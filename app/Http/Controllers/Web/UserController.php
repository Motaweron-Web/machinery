<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function index(){
        $settings= Setting::get();
        if (Auth::guard('user')->attempt()){
            return view('Web.auth.login',compact('settings'));
        } else
        return view('Web.auth.register',compact('settings'));
    }

    public function dologin()
    {
        $settings = Setting::get();
        return view('Web.auth.login',compact('settings'));
    }

    public function login(Request $request)
    {
        $data = $request->validate([
            'email'   =>'required|exists:users',
            'password'=>'required'
        ],[
            'email.exists'      => 'This email is not registered with us',
            'email.required'    => 'Please enter your email',
            'password.required' => 'Please enter the password',
        ]);
        if (Auth::guard('user')->attempt($data)){

            return redirect()->route('home')->with('success', 'login Successfully');
        } else {
            return back()->with('failed', 'login again');
        }
    }


    public function store(Request $request)
    {
        $validator = $request->validate([
            'user_name'     => 'required|unique:users',
            'email'     => 'required|unique:users',
            'password' => 'required|min:6',
        ],[
            'user_name.required' => 'Please enter your username',
            'user_name.unique' => 'This User Name has already been entered',
            'email.unique' => 'This email has already been entered ',
            'email.required' => 'Please enter your email',
        ]);
        $data = $request->except('_token','image');
        if($request->has('image') && $request->image != null)
            $data['image'] = $this->saveImage($request->image,'assets/uploads/users','image','100');

        $data['password'] = Hash::make($request->password);
        User::create($data);

        return back()->with('success', 'Register successfully .. login Now');

    }

    public function logout(){
        Auth::guard('user')->logout();

        return redirect()->back()->with('success', 'Logout Successfully');
    }
}
