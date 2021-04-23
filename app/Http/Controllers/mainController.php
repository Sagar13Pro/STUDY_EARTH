<?php

namespace App\Http\Controllers;

use App\Models\ProjectDetails;
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
        return view('project');
    }
    public function FreeProjectDetails($type, $name)
    {
        $getProject = ProjectDetails::where([
            'projectType' => $type,
            'projectLanguage' => $name
        ])->get();
        //dd($getProject);
        $name = ucfirst($name);
        return view('free-project', compact(['getProject', 'name']));
    }
}
