<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){
        $products = Product::paginate(10);
        return view("products", ["products" => $products]);
    }
    public function delete(Request $request){
        Product::find($request->id)->delete();
        return back();
    }
    public function createproduct_get(Request $request){
        $product = null;
        if($request->id){
            $product = Product::find($request->id);
        }
        return view("admin.createproduct", ["product" => $product]);
    }
    public function createproduct_post(Request $request){
        $this->validate($request, [
            "name"=>"required|max:255",
            "price"=>"required|numeric",
            "image"=> !$request->id ? "required" : ""
        ]);
        $imagePath = $request->existedImage ?? null;
        if ($request->image) {
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            $imageName = time() . $request->image->getClientOriginalName();
            $request->image->move(public_path('images/thumbnails'), $imageName);
            $imagePath = "/images/thumbnails/" . $imageName;
        }
        if($request->id){
            $product = Product::find($request->id);
            if($imagePath !== $product->image){
                $product->image = $imagePath;
            }
            $request->name !== $product->name && $product->name = $request->name;
            $request->price !== $product->price && $product->price = $request->price;
            $product->update();
            return redirect()->route("admin");
        }

        Product::create([
            'name' => $request->name,
            'image' => $imagePath,
            'price' =>$request->price
        ]);
        return back();
    }
}
