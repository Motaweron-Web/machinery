<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Setting;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $settings = Setting::get();
        $projects = Project::paginate(6);

     return view('Web.project.index',compact('settings','projects'));
    }

    public function details($id)
    {
        $settings = Setting::get();
        $projects = Project::paginate(6);
        $project = Project::findOrFail($id);

        return view('Web.project.details',compact('settings','project','projects'));
    }
}
