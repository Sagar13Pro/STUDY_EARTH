<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Courses;
use App\Models\Customer;
use App\Models\CourseDetails;
use Exception;
use App\Models\CourseMaterial;
use Illuminate\Support\Facades\Storage;

class CourseController extends Controller
{
    public function IndexView()
    {
        return view('index');
    }
    public function CoursesView($type, $lang)
    {
        $coursesImage = null;
        $Courses = CourseDetails::where([
            'courseType' => $type,
            'courseLanguage' => $lang
        ])->get();
        if (count($Courses) > 0) {
            $coursesImage = Courses::where(['Type' => $type, 'Language' => $lang])->get()[0]['ImageName'];
        }
        $langName = strtoupper($lang);
        return view('courses.courses', compact('Courses', 'coursesImage', 'langName'));
    }
    //Adding to Cart
    public function AddToCart(Request $request)
    {
        if (isset($_COOKIE['device'])) {
            $already_in_cart = Customer::where(['device' => $_COOKIE['device'], 'course_details_id' => $request->id])->get();
            if ($already_in_cart->count() == 0 || ($already_in_cart->pluck('payment_status')->contains('unpaid') ? false : true)) {
                try {
                    $addToCart = Customer::create([
                        'device' => $_COOKIE['device'],
                        'course_details_id' => $request->id,
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
    public function RemoveFromCart($id = null)
    {
        if (isset($_COOKIE['device'])) {
            if (Customer::where(['device'  => $_COOKIE['device'], 'id' => $id])->count() == 1) {
                try {
                    $removeFromCart = Customer::where(['device' => $_COOKIE['device'], 'id' => $id])->delete();

                    if ($removeFromCart == 1) {
                        return back();
                    }
                } catch (Exception $error) {
                    dd('Error Occured while removing customer from cart', $error);
                }
            }
        }
    }
    public function PDFViewer($title = null, $subtitle = null)
    {

        if ($_SERVER['REQUEST_METHOD'] === "POST" && (!is_null($title) && !is_null($subtitle))) {
            $pdf = CourseMaterial::where(['title' => $title, 'subtitle' => $subtitle])->first();
            if ($pdf['isDeleted'] == 'No') {
                $pdf_name = '../PDFs/' . $pdf['pdf_path'];
                $viewer = Storage::url('public/pdfjs/web/viewer.html');
                return view("pdf", compact(["pdf_name", "viewer"]));
            } else {
                return abort(404);
            }
        } else {
            return abort(404);
        }
    }
}
