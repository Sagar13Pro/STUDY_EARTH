<?php

namespace App\Http\Controllers;

use App\Models\ProjectDetails;
use App\Models\Projects;
use Exception;
use GuzzleHttp\Psr7\Uri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;

class mainController extends Controller
{
    public function IndexView()
    {
        return view('index');
    }
    public function ProjectView()
    {
        $Projects = Projects::all();
        return view('project', compact('Projects'));
    }
    public function FreeProjectView($type, $lang)
    {
        $freeProjects = ProjectDetails::where([
            'projectType' => $type,
            'projectLanguage' => $lang
        ])->get();
        $langName = ucfirst($lang);
        return view('free-project', compact(['freeProjects', 'langName']));
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
        return view('paid-project', compact('paidProjects', 'projectsImage', 'langName'));
    }

    public function CartView($id = null)
    {
        $projectFetched = ProjectDetails::where('id', $id)->get();

        return view('cart', compact('projectFetched'));
    }
}
