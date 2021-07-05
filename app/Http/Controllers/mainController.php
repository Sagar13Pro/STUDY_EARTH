<?php

namespace App\Http\Controllers;

use Anand\LaravelPaytmWallet\Facades\PaytmWallet;
use App\Mail\ContactMailable;
use App\Mail\InterestMailable;
use App\Models\Customer;
use App\Models\ProjectDetails;
use App\Models\Courses;
use App\Models\CourseDetails;
use App\Models\CourseMaterial;
use App\Models\Projects;
use App\Models\User;
use App\Models\Transaction;
use App\Models\Contact;
use App\Models\CustomProjectsForm;
use App\Models\InterestDetails;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use App\Mail\CustomProjectFormMailable as custom_project_mail;
use App\Mail\InvoiceMailable;
use App\Mail\ResetPasswordMailable;
use App\Models\ResetPassword;

class mainController extends Controller
{
    public function IndexView()
    {
        $Imp_projects = ProjectDetails::where('projectType', 'imp')->get();
        $course_type = Courses::where('type', 'paid')->get();
        return view('index', compact('Imp_projects'), compact('course_type'));
    }
    public function ProjectView()
    {
        $Projects = Projects::all();
        return view('projects.project', compact('Projects'));
    }
    public function FreeProjectView($type, $lang)
    {
        $project_icon = null;
        $freeProjects = ProjectDetails::where([
            'projectType' => $type,
            'projectLanguage' => $lang
        ])->get();
        $project_icon = Projects::where(['Type' => $type, 'Language' => $lang])->get()[0]['ImageName'];
        $langName = strtoupper($lang);
        return view('projects.free-project', compact(['freeProjects', 'langName', 'project_icon']));
    }
    public function PaidProjectView($type, $lang)
    {
        $project_icon = null;
        $paidProjects = ProjectDetails::where([
            'projectType' => $type,
            'projectLanguage' => $lang
        ])->get();
        $project_icon = Projects::where(['Type' => $type, 'Language' => $lang])->get()[0]['ImageName'];
        $langName = strtoupper($lang);
        return view('projects.paid-project', compact('paidProjects', 'project_icon', 'langName'));
    }

    public function CartView($id = null)
    {
        $projectFetched = ProjectDetails::select('*')
            ->join('customers', 'customers.project_details_id', '=', 'project_details.id')
            ->where([['customers.device', $_COOKIE['device']], ['customers.payment_status', 'unpaid']])
            ->get();
        $courseFetched = CourseDetails::select('*')
            ->join('customers', 'customers.course_details_id', '=', 'course_details.id')
            ->where([['customers.device', $_COOKIE['device']], ['customers.payment_status', 'unpaid']])
            ->get();
        return view('cart', compact('projectFetched'), compact('courseFetched'));
    }
    public function PurchaseView()
    {
        if (!is_null('session_email')) {
            $user_id = User::where('email', session('session_email'))->value('id');
            $project_products = ProjectDetails::select("*")
                ->join('customers', 'customers.project_details_id', '=', 'project_details.id')
                ->where(['customers.user_id' => $user_id, 'customers.payment_status' => 'paid'])
                ->get();
            $course_products = Customer::select("*")
                ->join('course_details', 'customers.course_details_id', '=', 'course_details.id')
                ->where(['customers.user_id' => $user_id, 'customers.payment_status' => 'paid'])
                ->get();
            return view('courses.purchase', compact(['project_products', 'course_products']));
        }
    }
    public function ContactView()
    {
        return view('contact');
    }
    public function CourseReading($course = null, $id = null)
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (!is_null($id)) {
                $titles = CourseMaterial::select('title')
                    ->groupBy('title')
                    ->where('course_detail_id', $id)
                    ->where('isDeleted', 'No')
                    ->get();
                $topics = CourseMaterial::where('course_detail_id', $id)
                    ->where('isDeleted', 'No')
                    ->orderBy('display_order', 'asc')
                    ->get();
                return view('courses.reading', compact(['topics', 'titles']));
            }
        } else {
            return abort(404);
        }
    }
    public function PaymentStatusView()
    {
        return view('payment.payment-status');
    }
    public function ResetPasswordView(Request $request, $token)
    {
        if (!$request->hasValidSignature()) {
            return abort(401);
        }
        if (!is_null($token)) {
            return view('new-password', compact('token'));
        }
    }
    public function PrivacyPolicyView()
    {
        return view('privacy-policy');
    }
    //Adding to Cart
    public function AddToCart(Request $request)
    {
        if (isset($_COOKIE['device'])) {
            $already_in_cart = Customer::where(['device' => $_COOKIE['device'], 'project_details_id' => $request->id])->get();
            if ($already_in_cart->count() == 0 || ($already_in_cart->pluck('payment_status')->contains('unpaid') ? false : true)) {
                try {
                    $addToCart = Customer::create([
                        'device' => $_COOKIE['device'],
                        'project_details_id' => $request->id,
                    ]);
                    if ($addToCart) {
                        return back();
                    }
                } catch (Exception $error) {
                }
            } else {
                return back()
                    ->with('info', 'The item is already in your cart.');
            }
        }
    }
    //Removing From Cart
    public function RemoveFromCart(Request $request)
    {
        if (isset($_COOKIE['device'])) {
            if (Customer::where(['device' => $_COOKIE['device'], 'id' => $request->id])->count() == 1) {
                try {
                    $removeFromCart = Customer::where(['device' => $_COOKIE['device'], 'id' => $request->id])->delete();

                    if ($removeFromCart == 1) {
                        return back();
                    }
                } catch (Exception $error) {
                }
            }
        }
    }
    //Checkout for cart
    public function Checkout(Request $request)
    {
        $user = session()->has('session_email') ?  (User::where('email', session('session_email'))->first()) : $request->all();
        $stored = !session()->has('session_email') ? (User::where('email', $user['emailInput'])->count() == 0 ? ($this->Store($request)) : true) : true;
        if ($stored) {
            $payment = PaytmWallet::with('receive');
            $payment->prepare([
                'order' => rand(0, 1000000),
                'user' => session()->has('session_email') ?  ($user->firstName . $user->lastName) : ($user['fnameInput'] . $user['lnameInput']),
                'mobile_number' => session()->has('session_email') ? $user->mobileNo : $user['mobileNoInput'],
                'email' => session()->has('session_email') ? session('session_email') : $user['emailInput'],
                'amount' => $request->amount,
                'callback_url' => route('payment.callback', $_COOKIE['device'])
            ]);
            session()->put('temporary_email', session()->has('session_email') ? session('session_email') : $user['emailInput']);
            return $payment->receive();
        } else {
            return redirect(route('index.view'))->with('error_msg', 'Something went wrong. Please try again.');
        }
    }
    //Storing details of user
    public function Store($request)
    {
        $rules = [
            'fnameInput' => 'required',
            'lnameInput' => 'required',
            'mobileNoInput' => 'required|integer|digits:10',
            'emailInput' => 'required|regex:/^[a-z0-9]+[\._]?[a-z0-9]+[@]\w+[.]\w{2,3}$/',
            'passwordInput' => 'required|min:8|',
            'confirmpasswordInput' => 'required|min:8|same:passwordInput',
            'addressInput' => 'required',
            'birthdateInput' => 'required',
        ];
        $message = [
            '*.required' => 'This is required.',
            'emailInput.regex' => 'The email format is invalid.',
            'mobileNoInput.integer' => 'The mobile number must be an integer.',
            'mobileNoInput.digits' => 'The mobile number must be 10 digits.',
            'passwordInput.min' => 'The password  must be at least 8 characters.',
            'confirmpasswordInput.same' => 'The password must match.'
        ];
        Validator::make($request->all(), $rules, $message)->validated();

        try {
            $user = User::create([
                'firstName' => $request->fnameInput,
                'lastName' => $request->lnameInput,
                'email' => $request->emailInput,
                'mobileNo' => $request->mobileNoInput,
                'address' => $request->addressInput,
                'dob' => $request->birthdateInput,
                'password' => $request->passwordInput
            ]);

            if ($user) {
                return true;
            }
        } catch (Exception $error) {
            return false;
        }
    }

    //Storing details of transactions
    public function StoreTransactions($request, $user_id, $email)
    {
        try {
            $transaction = Transaction::create([
                'foreign_email' => $email,
                'user_id' => $user_id,
                'order_id' => $request['ORDERID'],
                'txn_id' => $request['TXNID'],
                'txn_amount' => $request['TXNAMOUNT'],
                'payment_mode' => $request['PAYMENTMODE'],
                'currency' => $request['CURRENCY'],
                'txn_date' => $request['TXNDATE'],
                'status' => $request['STATUS'],
                'resp_code' => $request['RESPCODE'],
                'resp_msg' => $request['RESPMSG'],
                'bank_txn_id' => $request['BANKTXNID'],
                'bank_name' => $request['BANKNAME'],
                'checksum' => $request['CHECKSUMHASH']
            ]);
            return true;
        } catch (Exception $error) {

            return false;
        }
    }

    public function PaymentCallback($cookie)
    {
        $transaction = PaytmWallet::with('receive');
        $response = $transaction->response();
        $email = session('temporary_email');
        $user_id = User::where('email', $email)->value('id');
        if ($transaction->isSuccessful()) {
            $customers_model = Customer::where(['device' => $cookie, 'payment_status' => 'unpaid'])->get();
            foreach ($customers_model as $key => $value) {
                if (!empty($value->project_details_id)) {
                    $paid_for[$key] = ProjectDetails::select('*')
                        ->where(['id' => $value->project_details_id])
                        ->value('projectTitle');
                }
                if (!empty($value->course_details_id)) {
                    $paid_for[$key] = CourseDetails::select('*')
                        ->where(['id' => $value->course_details_id])
                        ->value('courseTitle');
                }
            }
            foreach ($customers_model as $key => $items) {
                $items->payment_status = "paid";
                $items->user_id = $user_id;
                $items->save();
            }
            $paid_for = implode(', ', $paid_for);
            $stored = $this->StoreTransactions($response, $user_id, $email);
            Mail::to($email)->send(new InvoiceMailable(
                $response['TXNID'],
                $response['TXNAMOUNT'],
                $paid_for,
                $response['ORDERID'],
                $response['TXNDATE'],
                $user_id
            ));
            session()->pull('temporary_email');
            session()->pull('fnia');
            return redirect(route('payment.status', 'successful'))->with([
                'status' => $response['STATUS'],
                'txn_id' => $response['TXNID'],
                'order_id' => $response['ORDERID'],
                'amount' => $response['TXNAMOUNT'],
                'date' => $response['TXNDATE']
            ]);
        } else if ($transaction->isFailed()) {
            return redirect(route('payment.status', 'failed'))->with([
                'status' => $response['STATUS'],
                'txn_id' => $response['TXNID'],
                'order_id' => $response['ORDERID'],
                'amount' => $response['TXNAMOUNT'],
                'date' => isset($response['TXNDATE']) ? $response['TXNDATE'] : null,
                'message' => $response['RESPMSG']
            ]);
        } else if ($transaction->isPending()) {
            return redirect(route('payment.status', 'pending'))->with([
                'status' => $response['STATUS'],
                'txn_id' => $response['TXNID'],
                'order_id' => $response['ORDERID'],
                'amount' => $response['TXNAMOUNT'],
                'date' => $response['TXNDATE'],
                'message' => $response['RESPMSG']
            ]);
        }
    }
    //Free projects download 
    public function FreeProjectsDownloadable($id)
    {
        if (!is_null($id)) {
            $getFileName = ProjectDetails::findOrFail($id);
            $file = 'Free Projects/' . $getFileName->projectLanguage . '/' . $getFileName->file_path;

            if (Storage::disk('public')->exists($file)) {
                return Storage::disk('public')->download($file);
            } else {
                return abort(404);
            }
        }
    }
    //Modal Showcast
    public function ModalContent(ProjectDetails $id)
    {
        return response()->json([
            'success' => true,
            'content' => $id->requirements,
            'title' => $id->projectTitle
        ]);
    }
    //User Related
    public function Login(Request $request)
    {
        $isUserExist = User::where('email', $request->login_emailInput)->first();
        if (!is_null($isUserExist) && Hash::check($request->login_passwordInput, $isUserExist->password)) {
            session()->put('session_email', $request->login_emailInput);
            return back()->with('user_name', $isUserExist->Full_Name);
        } else {
            return back()
                ->withInput($request->all())
                ->with('login_failed', 'Email or password is not correct.');
        }
    }
    public function Logout()
    {
        if (session()->has('session_email')) {
            session()->pull('session_email');
        }
        //return redirect(route('index.view'));
        return back();
    }
    public function ForgetPassword(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            ['forget_emailInput' => 'required'],
        );
        if (!$validator->fails()) {
            $token = uniqid();
            $isUserExist = User::where('email', $request->forget_emailInput)->first();
            if (!is_null($isUserExist)) {
                $user_id = User::where('email', $request->forget_emailInput)->value('id');
                $reset = ResetPassword::where('email', $request->forget_emailInput)->first();
                if ($reset == null) {
                    ResetPassword::create([
                        'email' => $request->forget_emailInput,
                        'token' => $token,
                    ]);
                } else {
                    $reset->update([
                        'token' => $token,
                    ]);
                }
                Mail::to($request->forget_emailInput)->send(new ResetPasswordMailable($user_id, $token));
                return redirect()->route('index.view');
            } else {
                return back();
            }
        } else {
            return back()->with('validation_error', 'This is required.');
        }
    }
    public function UpdatePassword(Request $request)
    {
        Validator::make($request->all(), [
            'new_passwordInput' => 'required'
        ], [
            'new_passwordInput.required' => 'This is required.'
        ])->validated();
        $getEmail = ResetPassword::where('token', $request->token)->first();
        $getEmail->DeleteOldReset();
        $update_password = User::where('email', $getEmail->email)
            ->first()
            ->update(['password' => $request->new_passwordInput]);
        if ($update_password) {
            return redirect(route('index.view'))->with('success_message', 'Your password has been reset.');
        }
    }
    //contact details
    public function contactDetails(Request $request)
    {
        $rules = [
            "con_name" => 'required',
            "con_email" => 'required|regex:/^[A-z]+?[a-z0-9]+[\._]?[a-z0-9]+[@]\w+[.]\w{2,3}$/',
            "con_mobile" => 'required|integer|digits:10',
            "con_message" => 'required'
        ];
        $message = [
            '*.required' => 'This is required.',
            'con_email.regex' => 'The email format is invalid.',
            'con_mobile.digits' => 'The contact number must be 10 digits.',
            'con_mobile.integer' => 'The contact mobile must be an digit.'
        ];
        $validate = Validator::make($request->all(), $rules, $message)->validated();
        $email = 'sagarvanesa@gmail.com';
        try {
            $contact = Contact::create([
                'name' => $request->con_name,
                'email' => $request->con_email,
                'mobile' => $request->con_mobile,
                'message' => $request->con_message,
            ]);
        } catch (Exception $error) {
            $contact = false;
        }
        if ($contact) {
            try {
                Mail::to(config('custom_configs.notifier_email'))->send(new ContactMailable($request->con_name, $request->con_email, $request->con_mobile, $request->con_message));
                $isMailSent = $contact->update(['isMailSent' => 'Yes']);
            } catch (Exception $error) {
                //dd($error);
                $isMailSent = false;
            }

            if ($isMailSent) {
                return back()
                    ->with('success_message', 'Your contact details submitted successfully. Kindly wait for 24hr for reply.');
            } else {
                return back()
                    ->with('error_message', 'If you don\'t recevie mail don\'t worry. Your data had been submitted successfully.');
            }
        }
    }

    //Custom Project Form
    public function CustomProjectForm(Request $request)
    {
        $rules = [
            "full_nameInput" => 'required',
            "emailInput" => 'required|regex:/^[a-z0-9]+[\._]?[a-z0-9]+[@]\w+[.]\w{2,3}$/',
            "mobile_numberInput" => 'required|integer|digits:10',
            "project_platformInput" => 'required',
            "project_requirementsInput" => 'required|max:255'
        ];
        $message = [
            '*.required' => 'This is required.',
            'emailInput.regex' => 'The email format is invalid.',
            'mobile_numberInput.digits' => 'The mobile number must be 10 digits.',
            'mobile_numberInput.integer' => 'The mobile number must be an integer.'
        ];
        $validate = Validator::make($request->all(), $rules, $message)->validated();
        try {
            $isFormCreated = CustomProjectsForm::create([
                'full_name' => $request->full_nameInput,
                'email' => $request->emailInput,
                'contact_number' => $request->mobile_numberInput,
                'selected_platform' => $request->project_platformInput,
                'project_description' => $request->project_requirementsInput
            ]);
        } catch (Exception $error) {
            $isFormCreated = false;
        }
        if ($isFormCreated) {
            try {
                Mail::to($request->emailInput)->send(new custom_project_mail($request->full_nameInput, $request->emailInput, $request->mobile_numberInput, $request->project_platformInput, $request->project_requirementsInput));
                Mail::to(config('custom_configs.notifier_email'))->send(new custom_project_mail($request->full_nameInput, $request->emailInput, $request->mobile_numberInput, $request->project_platformInput, $request->project_requirementsInput));
                $isMailSent = true;
            } catch (Exception $error) {
                $isMailSent = false;
            }
            if ($isMailSent) {
                CustomProjectsForm::where('email', $request->emailInput)->orderBy('created_at', 'desc')->first()->update(['isMailSent' => 'Yes']);
                return back()
                    ->with('success_message', 'Your request for custom project form submited. Kindly wait for 24hr for reply.');
            } else {
                return back()
                    ->with('error_message', 'If you don\'t recevie mail don\'t worry. Your data had been submitted successfully.');
            }
        }
    }

    //Akash Interest Form
    public function InterestView()
    {
        return view('interest');
    }

    //Interest details
    public function InterestDetails(Request $request)
    {
        $rules = [
            'interestfnameInput' => 'required',
            'interestlnameInput' => 'required',
            'interestpurposeInput' => 'required',
            'interestamountInput' => 'required|integer|min:1000',
            'interestmobileNoInput' => 'required|integer|digits:10',
            'interestemailInput' => 'required|regex:/^[a-z0-9]+[\._]?[a-z0-9]+[@]\w+[.]\w{2,3}$/',
            'interestaddressInput' => 'required',
        ];
        $message = [
            '*.required' => 'This is required.',
            'interestemailInput.regex' => 'The email format is invalid.',
            'interestmobileNoInput.digits' => 'The number must be 10 digits.',
            'interestmobileNoInput.integer' => 'The mobile must be an digit.',
            'interestamountInput.integer' => 'The Amount must be an digit.',
            'interestamountInput.min' => 'The Amount is greater than Equal to 1000'
        ];
        $validate = Validator::make($request->all(), $rules, $message)->validated();
        try {
            $interest = InterestDetails::create([
                'interest_fname' => $request->interestfnameInput,
                'interest_lname' => $request->interestlnameInput,
                'interest_mail' => $request->interestemailInput,
                'interest_mobile' => $request->interestmobileNoInput,
                'interest_address' => $request->interestaddressInput,
                'interest_purpose' => $request->interestpurposeInput,
                'interest_amount' => $request->interestamountInput,
            ]);
            $interest = true;
        } catch (Exception $error) {
            $interest = false;
        }
        $interest_detail = InterestDetails::where(['interest_mail' => $request->interestemailInput, 'interest_purpose' => $request->interestpurposeInput, 'interest_mobile' => $request->interestmobileNoInput, 'interest_amount' => $request->interestamountInput])->first();
        if ($interest) {
            $interest_detail = InterestDetails::where(['interest_mail' => $request->interestemailInput, 'interest_purpose' => $request->interestpurposeInput, 'interest_mobile' => $request->interestmobileNoInput, 'interest_amount' => $request->interestamountInput])->first();
            $payment = PaytmWallet::with('receive');
            $payment->prepare([
                'order' => rand(0, 1000000),
                'user' => $request->interestfnameInput . $request->interestlnameInput,
                'mobile_number' => $request->interestmobileNoInput,
                'email' => $request->interestemailInput,
                'amount' => $request->interestamountInput,
                'callback_url' => route('payment.callbackinterest', $interest_detail->id)
            ]);
            return $payment->receive();
        } else {
            return back();
            //->with('success_interest', 'If you don\'t recevie mail don\'t worry. Your data had been submitted successfully.');
        }
    }

    public function PaymentCallbackinterest($id)
    {
        $transaction = PaytmWallet::with('receive');
        $response = $transaction->response();
        if ($transaction->isSuccessful()) {
            $interest = InterestDetails::where(['id' => $id])->update(['order_id' => $response['ORDERID'], 'txn_id' => $response['TXNID'], 'txn_amount' => $response['TXNAMOUNT'], 'payment_mode' => $response['PAYMENTMODE'], 'status' => $response['STATUS'], 'txn_date' => $response['TXNDATE'], 'bank_txn_id' => $response['BANKTXNID']]);
            $interest = InterestDetails::where(['id' => $id])->first();
            Mail::to('custom_configs.notifier_email')->send(new InterestMailable($interest->interest_fname, $interest->interest_lname, $interest->interest_mail, $interest->interest_mobile, $interest->interest_address, $interest->interest_purpose, $interest->interest_amount, $interest->order_id, $interest->txn_date));
            return redirect(route('payment.status', 'successful'))->with([
                'status' => $response['STATUS'],
                'txn_id' => $response['TXNID'],
                'order_id' => $response['ORDERID'],
                'amount' => $response['TXNAMOUNT'],
                'date' => $response['TXNDATE']
            ]);
        } else if ($transaction->isFailed()) {
            return redirect(route('payment.status', 'failed'))->with([
                'status' => $response['STATUS'],
                'txn_id' => $response['TXNID'],
                'order_id' => $response['ORDERID'],
                'amount' => $response['TXNAMOUNT'],
                'date' => isset($response['TXNDATE']) ? $response['TXNDATE'] : null,
                'message' => $response['RESPMSG']
            ]);
        } else if ($transaction->isPending()) {
            return redirect(route('payment.status', 'pending'))->with([
                'status' => $response['STATUS'],
                'txn_id' => $response['TXNID'],
                'order_id' => $response['ORDERID'],
                'amount' => $response['TXNAMOUNT'],
                'date' => $response['TXNDATE'],
                'message' => $response['RESPMSG']
            ]);
        }
    }
}
