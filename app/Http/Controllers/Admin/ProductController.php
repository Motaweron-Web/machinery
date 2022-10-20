<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProduct;
use App\Http\Requests\StoreProject;
use App\Models\Product;
use App\Traits\PhotoTrait;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class ProductController extends Controller
{

    use PhotoTrait;

    public function index(Request $request)
    {
        if($request->ajax()) {
            $product = Product::latest()->get();
            return Datatables::of($product)
                ->addColumn('action', function ($product) {
                    return '
                            <button type="button" data-id="' . $product->id . '" class="btn btn-pill btn-info-light editBtn"><i class="fa fa-edit"></i></button>
                            <button class="btn btn-pill btn-danger-light" data-toggle="modal" data-target="#delete_modal"
                                    data-id="' . $product->id . '" data-title="' . $product->title_en . '">
                                    <i class="fas fa-trash"></i>
                            </button>
                       ';
                })
                ->editColumn('image1', function ($product) {
                    return '
                    <img alt="image" onclick="window.open(this.src)" class="avatar avatar-md rounded-circle" src="'.asset($product->image1).'">
                    ';
                })
                ->editColumn('salary', function ($product){
                    return number_format($product->salary, 2) .' $ ';
                })
                ->escapeColumns([])
                ->make(true);
        }else{
            return view('Admin.product.index');
        }
    }


    public function delete(Request $request)
    {
        $product = Product::where('id', $request->id)->first();
        if (file_exists($product->image)) {
            unlink($product->image);
        }
        $product->delete();
        return response(['message'=>'Deleted successfully','status'=>200],200);
    }

    public function create(){
        return view('Admin.product.parts.create');
    }

    public function store(StoreProduct $request)
    {
        $inputs = $request->all();
        if($request->has('image1','image2','image3','image4','image5')){
            $inputs['image1'] = $this->saveImage($request->image1,'assets/uploads/products');
            $inputs['image2'] = $this->saveImage($request->image2,'assets/uploads/products');
            $inputs['image3'] = $this->saveImage($request->image3,'assets/uploads/products');
            $inputs['image4'] = $this->saveImage($request->image4,'assets/uploads/products');
            $inputs['image5'] = $this->saveImage($request->image5,'assets/uploads/products');
        }
        if(Product::create($inputs))
            return response()->json(['status'=>200]);
        else
            return response()->json(['status'=>405]);
    }

    public function edit($id){
        $products = Product::findOrFail($id);
        return view('Admin.product.parts.edit',compact('products'));
    }

    public function update(StoreProduct $request, $id)
    {
        $inputs = $request->except('id');

        $product = Product::findOrFail($id);

        if ($request->has('image1','image2','image3','image4','image5')) {
            if (file_exists($product->image1) && file_exists($product->image2) && file_exists($product->image3) && file_exists($product->image4) && file_exists($product->image5)) {
                unlink($product->image1) && unlink($product->image2) && unlink($product->image3) && unlink($product->image4) && unlink($product->image5);
            }
            $inputs['image1'] = $this->saveImage($request->image1, 'assets/uploads/products');
            $inputs['image2'] = $this->saveImage($request->image2, 'assets/uploads/products');
            $inputs['image3'] = $this->saveImage($request->image3, 'assets/uploads/products');
            $inputs['image4'] = $this->saveImage($request->image4, 'assets/uploads/products');
            $inputs['image5'] = $this->saveImage($request->image5, 'assets/uploads/products');
        }

        if ($product->update($inputs))
            return response()->json(['status' => 200]);
        else
            return response()->json(['status' => 405]);
    }
}
