<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProject;
use App\Models\Project;
use App\Traits\PhotoTrait;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class ProjectController extends Controller
{
    use PhotoTrait;

    public function index(Request $request)
    {
        if($request->ajax()) {
            $project = Project::latest()->get();
            return Datatables::of($project)
                ->addColumn('action', function ($project) {
                    return '
                            <button type="button" data-id="' . $project->id . '" class="btn btn-pill btn-info-light editBtn"><i class="fa fa-edit"></i></button>
                            <button class="btn btn-pill btn-danger-light" data-toggle="modal" data-target="#delete_modal"
                                    data-id="' . $project->id . '" data-title="' . $project->name . '">
                                    <i class="fas fa-trash"></i>
                            </button>
                       ';
                })
                ->editColumn('image', function ($project) {
                    return '
                    <img alt="image" onclick="window.open(this.src)" class="avatar avatar-md rounded-circle" src="'.asset($project->image).'">
                    ';
                })
                ->editColumn('salary', function ($project){
                    return number_format($project->salary, 2) .' $ ';
                })
                ->escapeColumns([])
                ->make(true);
        }else{
            return view('Admin.project.index');
        }
    }


    public function delete(Request $request)
    {
        $project = Project::where('id', $request->id)->first();
        if (file_exists($project->image)) {
            unlink($project->image);
        }
        $project->delete();
        return response(['message'=>'Deleted successfully','status'=>200],200);
    }

    public function create(){
        return view('Admin.project.parts.create');
    }

    public function store(StoreProject $request)
    {
        $inputs = $request->all();
        if($request->has('image')){
            $inputs['image'] = $this->saveImage($request->image,'assets/uploads/project');
        }
        if(Project::create($inputs))
            return response()->json(['status'=>200]);
        else
            return response()->json(['status'=>405]);
    }

    public function edit($id){
        $projects = Project::findOrFail($id);
        return view('Admin.project.parts.edit',compact('projects'));
    }

    public function update(StoreProject $request, $id)
    {
        $inputs = $request->except('id');

        $project = Project::findOrFail($id);

        if ($request->has('image')) {
            if (file_exists($project->image)) {
                unlink($project->image);
            }
            $inputs['image'] = $this->saveImage($request->image, 'assets/uploads/project');
        }

        if ($project->update($inputs))
            return response()->json(['status' => 200]);
        else
            return response()->json(['status' => 405]);
    }
}
