<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use App\Models\Order;
use App\Models\Product;
use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data['projects'] = Project::get();
        $data['products'] = Product::get();
        $data['users'] = User::get();
        $data['contactus'] = ContactUs::get();
        $data['orders'] = Order::get();
        return view('Admin.index')->with($data);
    }
}
