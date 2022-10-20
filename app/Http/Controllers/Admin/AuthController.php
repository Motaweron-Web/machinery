<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller {

    public function index(){
        if (Auth::guard('admin')->check()){
            return redirect('admin');
        }
        return view('Admin.auth.login');
    }

    public function login(Request $request): \Illuminate\Http\JsonResponse
    {
        $data = $request->validate([
            'email'   =>'required|exists:admins',
            'password'=>'required'
        ],[
            'email.exists'      => 'This email is not registered with us',
            'email.required'    => 'Please enter your email',
            'password.required' => 'Please enter the password',
        ]);
        if (Auth::guard('admin')->attempt($data)){
            return response()->json(200);
        }
        return response()->json(405);
    }

    public function logout(){
        Auth::guard('admin')->logout();
        toastr()->info('Signed out');
        return redirect('admin/login');
    }

}//end class
