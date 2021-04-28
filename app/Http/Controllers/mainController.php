<?php

namespace App\Http\Controllers;

use App\Models\ProjectDetails;
use App\Models\Projects;
use Illuminate\Http\Request;

use function PHPUnit\Framework\isEmpty;
use function PHPUnit\Framework\isNull;

class mainController extends Controller
{
    public function Index()
    {
        return view('index');
    }
    public function Project()
    {
        $Projects = Projects::all();
        return view('project', compact('Projects'));
    }
    public function FreeProjectView($type, $name)
    {
        $getProjectDetails = ProjectDetails::where([
            'projectType' => $type,
            'projectLanguage' => $name
        ])->get();
        //dd($getProject);
        $name = ucfirst($name);
        return view('free-project', compact(['getProjectDetails', 'name']));
    }
    public function PaidProjectView()
    {
        return view('paid-project');
    }

    public function Cart()
    {
        return view('cart');
    }
}
