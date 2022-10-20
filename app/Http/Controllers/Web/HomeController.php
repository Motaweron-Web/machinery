<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Models\Product;
use App\Models\Project;
use App\Models\Setting;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $settings = Setting::get();
        $projects = Project::paginate(6);
        $products = Product::get();
        $abouts = AboutUs::get();

        return view('Web.home.index',compact([
            'settings',
            'projects',
            'products',
            'abouts',
        ]));
    }
}














