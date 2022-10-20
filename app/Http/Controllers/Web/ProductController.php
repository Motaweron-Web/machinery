<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use App\Models\Setting;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $settings = Setting::get();
        $products = Product::paginate(6);

        return view('Web.product.index',compact('settings','products'));
    }

    public function details($id)
    {
        $settings = Setting::get();
        $product = Product::findOrFail($id);

        return view('Web.product.details',compact('settings','product'));
    }

    public function storeOrder(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'product_id' => 'required',
        ]);

        $inputs = $request->all();

        if(Order::create($inputs)) {
            return back()->with('success', 'Request send successfully');
        }
        else {
            return back()->with('failed', 'Failed! Try in a few minutes');
        }


    }
}
