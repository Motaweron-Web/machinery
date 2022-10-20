<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use App\Traits\PhotoTrait;
use App\Http\Requests\StoreSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Yajra\DataTables\DataTables;

class SettingController extends Controller
{

    public function index()
    {
        $settings = Setting::get();
        return view('Admin.setting.index',compact('settings'));
    }

    public function update(StoreSetting $request, $id)
    {
        $inputs = $request->except('id');

        $setting = Setting::findOrFail($id);

        if ($setting->update($inputs)) {

             toastr()->success('Edited successfully');

             return redirect()->back();
        }else{

            toastr()->error('There is something wrong!');

            return redirect()->back();
        }
    }
} // end class
