<?php

namespace App\Http\Controllers;

use Anand\LaravelPaytmWallet\Facades\PaytmWallet;
use App\Models\Customer;
use App\Models\ProjectDetails;
use App\Models\CourseDetails;
use App\Models\Projects;
use App\Models\User;
use App\Models\Transaction;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

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
        return view('cart', compact('projectFetched') ,compact('courseFetched'));
    }
    //Adding to Cart
    public function AddToCart(Request $request)
    {
        if (isset($_COOKIE['device'])) {
            if (Customer::where(['device' => $_COOKIE['device'], 'project_details_id' => $request->id])->count() == 0) {
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
                dd('Already in your cart');
            }
        } else {
            dd('No cookie');
        }
    }
    //Removing From Cart
    public function RemoveFromCart(Request $request)
    {
        if (isset($_COOKIE['device'])) {
            if (Customer::where(['device' => $_COOKIE['device'], 'project_details_id' => $request->id])->count() == 0) {
                try {
                    $removeFromCart = Customer::where(['device' => $_COOKIE['device'], 'id' => $request->id])->delete();

                    if ($removeFromCart == 1) {
                        return back();
                    }
                } catch (Exception $error) {
                    dd('Error Occured while removing customer from cart', $error);
                }
            } else {
                dd('Already delete from your cart');
            }
        } else {
            dd('No cookie');
        }
    }
    //Checkout for cart
    public function Checkout(Request $request)
    {
        $stored = $this->Store($request);
        if ($stored) {
            //dd($request);
            $payment = PaytmWallet::with('receive');
            $payment->prepare([
                'order' => rand(0, 1000000),
                'user' => $request->fnameInput . $request->lnameInput,
                'mobile_number' => $request->mobileNoInput,
                'email' => $request->emailInput,
                'amount' => $request->amount,
                'callback_url' => route('payment.callback', $_COOKIE['device'])
            ]);
            session()->put('session_email', $request->emailInput);
            return $payment->receive();
        }
    }
    //Storing details of user
    public function Store($request)
    {
        Validator::make($request->all(), [
            'mobileNoInput' => 'integer|digits:10',
            'emailInput' => 'regex:/^[a-z0-9]+[\._]?[a-z0-9]+[@]\w+[.]\w{2,3}$/'
        ])->validated();

        try {
            $user = User::create([
                'firstName' => $request->fnameInput,
                'lastName' => $request->lnameInput,
                'email' => $request->emailInput,
                'mobileNo' => $request->mobileNoInput,
                'address' => $request->addressInput,
                'password' => $request->passwordInput
            ]);

            if ($user) {
                return true;
            }
        } catch (Exception $error) {
            //dd('Already register');
            return true;
        }
    }

    //Storing details of transactions
    public function StoreTransactions($request,$user_id)
    {
        //dd($user_id);
        try {
            $transaction = Transaction::create([
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
            //dd('Already register');
            return true;
        }
    }

    public function PaymentCallback($cookie)
    {
        $transaction = PaytmWallet::with('receive');
        $response = $transaction->response();
        //dd($response);
        
        //$data[0]=$response;
        $email = session('session_email');
        $user_id = User::where('email', $email)->value('id');
        //dd($email);
        if ($transaction->isSuccessful()) {
            //dd($user_id);
            $customers_model = Customer::where('device', $cookie)->update(['user_id' => $user_id]);

            $projectFetched = ProjectDetails::select('*')
            ->join('customers', 'customers.project_details_id', '=', 'project_details.id')
            ->where([['customers.user_id', $user_id], ['customers.payment_status', 'unpaid']])
            ->value('projectTitle');
            $courseFetched = CourseDetails::select('*')
            ->join('customers', 'customers.course_details_id', '=', 'course_details.id')
            ->where([['customers.user_id', $user_id], ['customers.payment_status', 'unpaid']])
            ->value('courseTitle');
            $customers_model = Customer::where('device', $cookie)->update(['payment_status' => 'paid']); 
            //dd($projectFetched);
            $stored = $this->StoreTransactions($response,$user_id);
            $data = array('payment_id'=>$response['TXNID'],'amount'=>$response['TXNAMOUNT'],'paid_for_project'=>$projectFetched,'paid_for_course'=>$courseFetched);
            //dd($data);
            Mail::send('mail',["data"=>$data] , function ($message) use ($email) {
                $message->to($email)
                    ->subject('invoice');
            });  


            dd("done");
        } else if ($transaction->isFailed()) {
            dd($transaction);
        } else if ($transaction->isOpen()) {
            dd('open');
        }
    }
}
