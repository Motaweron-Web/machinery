<?php

namespace App\Http\Controllers\Admin;

use App\Events\NewMessage;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAboutUs;
use App\Models\AboutUs;
use App\Traits\PhotoTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Yajra\DataTables\DataTables;

class AboutUsController extends Controller
{
    use PhotoTrait;

    public function index(Request $request)
    {
        if($request->ajax()) {
            $about = AboutUs::latest()->get();
            return Datatables::of($about)
                ->addColumn('action', function ($about) {
                    return '
                            <button type="button" data-id="' . $about->id . '" class="btn btn-pill btn-info-light editBtn"><i class="fa fa-edit"></i></button>

                       ';
                })
                ->editColumn('image', function ($about) {
                    return '
                    <img alt="image" onclick="window.open(this.src)" class="avatar avatar-md rounded-circle" src="'.asset($about->image).'">
                    ';
                })
                ->escapeColumns([])
                ->make(true);
        }else{
            return view('Admin.about_us.index');
        }
    }


    public function delete(Request $request)
    {
        $about = AboutUs::where('id', $request->id)->first();
            if (file_exists($about->image)) {
                unlink($about->image);
            }
            $about->delete();
            return response(['message'=>'Deleted Successfully','status'=>200],200);
    }

    public function create(){
        return view('Admin.about_us.parts.create');
    }

    public function store(StoreAboutUs $request)
    {
        $inputs = $request->all();
        if($request->has('image')){
            $inputs['image'] = $this->saveImage($request->image,'assets/uploads/about');
        }
        if(AboutUs::create($inputs))
            return response()->json(['status'=>200]);
        else
            return response()->json(['status'=>405]);
    }

    public function edit($id){
        $abouts = AboutUs::findOrFail($id);
        return view('Admin.about_us.parts.edit',compact('abouts'));
    }

    public function update(StoreAboutUs $request, $id)
    {
        $inputs = $request->except('id');

        $about = AboutUs::findOrFail($id);

        if ($request->has('image')) {
            if (file_exists($about->image)) {
                unlink($about->image);
            }
            $inputs['image'] = $this->saveImage($request->image, 'assets/uploads/about');
        }

        if ($about->update($inputs))
            return response()->json(['status' => 200]);
        else
            return response()->json(['status' => 405]);
    }
}
