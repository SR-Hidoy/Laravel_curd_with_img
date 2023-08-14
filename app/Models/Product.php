<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    private static $product, $image, $imageNewName, $directory, $imgUrl;
    public static function saveProduct($request){
        self::$product =new Product();
        self::$product->id = $request->id;
        self::$product->product_id = $request->product_id;
        self::$product->name = $request->name;
        self::$product->price = $request->price;
        self::$product->description = $request->description;
        self::$product->image = $request->image;
        if ($request->file('image')) {
            self::$product->image = self::saveImage($request);
        }
        self::$product->save();
    }

    private static function saveImage($request){
        self::$image =$request->file('image');
        self::$imageNewName ='product-'.rand().'.'. self::$image->getClientOriginalExtension();
        self::$directory ='asset/product-image/';
        self::$imgUrl =self::$directory.self::$imageNewName;
        self::$image->move(self::$directory,self::$imageNewName);
        return self::$imgUrl;

    }

    public static function deleteProduct($id){
        self::$product=Product::find($id);
        self::$product->delete();
    }


}
