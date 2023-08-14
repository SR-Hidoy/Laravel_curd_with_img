<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private static $products, $product;
    public function index(Request $request){
        Product::saveProduct($request);
        return back()->with('message', 'Info Saved !!');
    }

    public function productList(){
        self::$products=Product::all();
        return view('product-list',[
            'products'=>self::$products
        ]);
    }

    public function productDelete(Request $request){
        Product::deleteProduct($request->id);
        return back()->with('message', 'Info deleted !! ');
    }

    public function productEdit($id){
        self::$product=Product::find($id);
        return view('product-edit', [
            'product'=>self::$product
        ]);


    }
}
