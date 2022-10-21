<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use App\Models\ProductOrder;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        if($request->ajax()) {
            $order = Order::latest()->get();
            return Datatables::of($order)
                ->addColumn('action', function ($order) {
                    return '
                             <button class="btn btn-pill btn-danger-light" data-toggle="modal" data-target="#delete_modal"
                                    data-id="' . $order->id . '" data-title="' . $order->id . '">
                                    <i class="fas fa-trash"></i>
                            </button>
                       ';
                })
                ->editColumn('user_name', function ($order){
                  return $order->user->user_name;
                })
                ->editColumn('user_email', function ($order){
                    return '<a href="mailto:'.$order->user->email.'">'.$order->user->email.'</a>';
                })
                ->editColumn('product_id', function ($order){
                    return '<form action="'. route('details_product',$order->products->id) .'" method="get">
                    <button class="btn btn-green" type="submit"><i class="fa fa-door-open"></i>'. $order->products->title_en .'</button>
                            </form>';
                })
                ->addColumn('price', function ($order){
                    return number_format($order->products->price,2);
                })
                ->editColumn('created_at', function ($value){
                    return \Carbon\Carbon::parse($value->created_at)->diffForHumans() ;
                })
                ->escapeColumns([])
                ->make(true);
        }else{
            return view('Admin.order.index');
        }
    }

    public function details_product($id)
    {
        $product = Product::findOrFail($id);
        return view('Admin.order.product',compact('product'));
    }

    public function delete(Request $request)
    {
        $order = Order::where('id', $request->id)->first();
        $order->delete();
        return response(['message'=>'Deleted Successfully','status'=>200],200);
    }
}
