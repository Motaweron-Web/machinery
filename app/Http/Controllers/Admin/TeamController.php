<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTeam;
use App\Models\Team;
use App\Traits\PhotoTrait;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class TeamController extends Controller
{
    use PhotoTrait;

    public function index(Request $request)
    {
        if($request->ajax()) {
            $team = Team::latest()->get();
            return Datatables::of($team)
                ->addColumn('action', function ($team) {
                    return '
                            <button type="button" data-id="' . $team->id . '" class="btn btn-pill btn-info-light editBtn"><i class="fa fa-edit"></i></button>
                            <button class="btn btn-pill btn-danger-light" data-toggle="modal" data-target="#delete_modal"
                                    data-id="' . $team->id . '" data-title="' . $team->name_ar . '">
                                    <i class="fas fa-trash"></i>
                            </button>
                       ';
                })
                ->editColumn('image', function ($team) {
                    return '
                    <img alt="image" onclick="window.open(this.src)" class="avatar avatar-md rounded-circle" src="'.asset($team->image).'">
                    ';
                })
                ->editColumn('facebook', function ($data){
                    return '
                        <button class="btn btn-blue" ><a href="'. $data->facebook .'"></a><i class="fe fe-facebook"></i></button>
                    ';
                })
                ->editColumn('whatsapp', function ($data){
                    return '
                        <button class="btn btn-green" ><a href="'. $data->whatsapp .'"></a><i class="fe fe-message-square "></i></button>
                    ';
                })
                ->editColumn('instagram', function ($data){
                    return '
                        <button class="btn btn-instagram" ><a href="'. $data->instagram .'"></a><i class="fe fe-instagram"></i></button>
                    ';
                })
                ->escapeColumns([])
                ->make(true);
        }else{
            return view('Admin.team.index');
        }
    }


    public function delete(Request $request)
    {
        $team = Team::where('id', $request->id)->first();
        if (file_exists($team->image)) {
            unlink($team->image);
        }
        $team->delete();
        return response(['message'=>'Deleted successfully','status'=>200],200);
    }

    public function create(){
        return view('Admin.team.parts.create');
    }

    public function store(StoreTeam $request)
    {
        $inputs = $request->all();
        if($request->has('image')){
            $inputs['image'] = $this->saveImage($request->image,'assets/uploads/team');
        }
        if(Team::create($inputs))
            return response()->json(['status'=>200]);
        else
            return response()->json(['status'=>405]);
    }

    public function edit($id){
        $teams = Team::findOrFail($id);
        return view('Admin.team.parts.edit',compact('teams'));
    }

    public function update(StoreTeam $request, $id)
    {
        $inputs = $request->except('id');

        $team = Team::findOrFail($id);

        if ($request->has('image')) {
            if (file_exists($team->image)) {
                unlink($team->image);
            }
            $inputs['image'] = $this->saveImage($request->image, 'assets/uploads/team');
        }

        if ($team->update($inputs))
            return response()->json(['status' => 200]);
        else
            return response()->json(['status' => 405]);
    }
}
