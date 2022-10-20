<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Yajra\DataTables\DataTables;

class ContactController extends Controller
{
    public function index(Request $request)
    {
        if($request->ajax()) {
            $contact = ContactUs::latest()->get();
            return Datatables::of($contact)
                ->addColumn('action', function ($contact) {
                    return '
                             <button class="btn btn-pill btn-danger-light" data-toggle="modal" data-target="#delete_modal"
                                    data-id="' . $contact->id . '" data-title="' . $contact->name . '">
                                    <i class="fas fa-trash"></i>
                            </button>
                       ';
                })
                ->editColumn('created_at', function ($job){
                    return \Carbon\Carbon::parse($job->created_at)->diffForHumans() ;
                })
                ->editColumn('email', function ($user) {
                    return '<a href="mailto:'.$user->email.'">'.$user->email.'</a>';
                })
                ->escapeColumns([])
                ->make(true);
        }else{
            return view('Admin.contact_us.index');
        }
    }


    public function delete(Request $request)
    {
        $contact = ContactUs::where('id', $request->id)->first();
        $contact->delete();
        return response(['message'=>'Deleted Successfully','status'=>200],200);
    }
}
