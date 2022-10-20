<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Models\Setting;
use App\Models\Team;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $settings = Setting::get();
        $abouts = AboutUs::get();
        $teams = Team::get();

        return view('Web.about.index',compact('abouts','teams','settings'));
    }
}
