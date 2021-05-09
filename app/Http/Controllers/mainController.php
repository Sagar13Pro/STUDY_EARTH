<?php

namespace App\Http\Controllers;

use Anand\LaravelPaytmWallet\Facades\PaytmWallet;
use App\Models\Customer;
use App\Models\ProjectDetails;
use App\Models\Projects;
use App\Models\User;
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
            ->where([['customers.device', $_COOKIE['device']],['payment_status','unpaid']])
            ->get();
        return view('cart', compact('projectFetched'));
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
    //Checkout for cart
    public function Checkout(Request $request)
    {
        $stored = $this->Store($request);
        if ($stored) {
            $payment = PaytmWallet::with('receive');
            $payment->prepare([
                'order' => rand(0, 1000000),
                'user' => $request->fnameInput . $request->lnameInput,
                'mobile_number' => $request->mobileNoInput,
                'email' => $request->emailInput,
                'amount' => $request->amount,
                'callback_url' => route('payment.callback',$_COOKIE['device'])
            ]);
            session()->put('session_email',$request->emailInput);
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
                'address' => $request->addressInput
            ]);

            if ($user) {
                return true;
            }
        } catch (Exception $error) {
            dd($error);
            return false;
        }
    }

    public function PaymentCallback($cookie)
    {
        $transaction = PaytmWallet::with('receive');
        $response = $transaction->response();
        $toMail = 'akashtarapara222@gmail.com';
        $data = [];
        $email = session('session_email');
        if ($transaction->isSuccessful()) {
            // Mail::send('mail',$data, function ($message) use ($toMail) {
            //     $message->to($toMail)
            //         ->subject('invoice');
            // });
            //$user_id = DB::table('user')->where('email', $email)->value('id');
            $user_id = User::where('email' , $email)->value('id');
            $customers_model = Customer::where('device' , $cookie)->update(['payment_status'=> 'paid','user_id'=>$user_id]);

            
            dd("done");
        } else if ($transaction->isFailed()) {
            dd('failed');
        } else if ($transaction->isOpen()) {
            dd('open');
        }
    }
}
