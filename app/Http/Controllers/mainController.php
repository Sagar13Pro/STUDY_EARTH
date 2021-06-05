<?php

namespace App\Http\Controllers;

use Anand\LaravelPaytmWallet\Facades\PaytmWallet;
use App\Models\Customer;
use App\Models\ProjectDetails;
use App\Models\CourseDetails;
use App\Models\CourseMaterial;
use App\Models\Projects;
use App\Models\User;
use App\Models\Transaction;
use App\Models\Contact;
use App\Models\CustomProjectsForm;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use App\Mail\CustomProjectFormMailable as custom_project_mail;
use App\Mail\InvoiceMailable;

class mainController extends Controller
{
    public function IndexView()
    {
        return view('index');
    }
    public function ProjectView()
    {
        $Projects = Projects::all();
        return view('projects.project', compact('Projects'));
    }
    public function FreeProjectView($type, $lang)
    {
        $freeProjects = ProjectDetails::where([
            'projectType' => $type,
            'projectLanguage' => $lang
        ])->get();
        $langName = ucfirst($lang);
        return view('projects.free-project', compact(['freeProjects', 'langName']));
    }
    public function PaidProjectView($type, $lang)
    {
        $projectsImage = null;
        $paidProjects = ProjectDetails::where([
            'projectType' => $type,
            'projectLanguage' => $lang
        ])->get();
        if (count($paidProjects) > 0) {
            $projectsImage = Projects::where(['Type' => $type, 'Language' => $lang])->get()[0]['ImageName'];
        }
        $langName = strtoupper($lang);
        return view('projects.paid-project', compact('paidProjects', 'projectsImage', 'langName'));
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
                    ->get();
                $topics = CourseMaterial::where('course_detail_id', $id)
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
                    dd('Error Occured while creating customer', $error);
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
                    dd('Error Occured while removing customer from cart', $error);
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
            dd('error');
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
            dd($error);
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
        } catch (Exception $error) {
            dd($error);
            return true;
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
                'date' => $response['TXNDATE'],
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
            return redirect()->route('index.view', compact('isUserExist'));
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
        return redirect(route('index.view'));
    }
    //contact details
    public function contactDetails(Request $request)
    {
        Validator::make($request->all(), [
            'con_mobile' => 'integer|digits:10',
            'con_email' => 'regex:/^[a-z0-9]+[\._]?[a-z0-9]+[@]\w+[.]\w{2,3}$/',
        ])->validated();
        $email = 'akashtarapara222@gmail.com';
        try {
            $contact = Contact::create([
                'name' => $request->con_name,
                'email' => $request->con_email,
                'mobile' => $request->con_mobile,
                'message' => $request->con_message,
            ]);
            if ($contact) {
                Mail::send('email.mail-contact', ["data" => $request], function ($message) use ($email) {
                    $message->to($email)
                        ->subject('Contact');
                });
                return redirect(route('contact.details'));
                //return Redirect::to('contact.details')->with('success', true)->with('message','That was great!');
            }
        } catch (Exception $error) {
            dd($error);
            return false;
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
            'email.regex' => 'The email format is invalid.',
            'mobile_numberInput.digits' => 'The mobile number must be 10 digits.'
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
                Mail::to($request->emailInput)->cc('sagarpatel_30@yahoo.com')->send(new custom_project_mail($request->full_nameInput, $request->emailInput, $request->mobile_numberInput, $request->project_platformInput, $request->project_requirementsInput));
                $isMailSent = true;
            } catch (Exception $error) {
                $isMailSent = false;
            }
            if ($isMailSent) {
                CustomProjectsForm::where('email', $request->emailInput)->orderBy('created_at', 'desc')->first()->update(['isMailSent' => 'Yes']);
                return back()
                    ->with('custom_message', 'Your request for custom project form submited.Kindly wait for 24hr for reply.');
            } else {
                return back()
                    ->with('custom_message', 'ERROR_MAIL');
            }
        }
    }
}
