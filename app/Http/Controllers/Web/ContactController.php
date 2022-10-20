<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use App\Models\Setting;
use Dotenv\Validator;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $settings = Setting::get();
        return view('Web.contact.index',compact('settings'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'message' => 'required',
            'phone' => 'nullable|numeric',
            'whatsapp' => 'nullable|numeric',
        ],[
            'name.required' => ' name is required',
            'email.required' => ' email is required',
            'message.required' => ' message is required',
        ]);

//        return dd($request->all());
       $inputs = $request->all();

        if(ContactUs::create($inputs)) {
            return back()->with('success', 'message send successfully');
        }
        else {
            return back()->with('failed', 'Failed! Try in a few minutes');
        }
    }
}
