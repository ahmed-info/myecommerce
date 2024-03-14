<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('pages.product.index', compact('products'));
    }
    public function create()
    {
        $categories = Category::all();
        return view('pages.product.create', compact('categories'));
    }
    public function insert(Request $request)
    {
        $product = new Product;
        $product->productname = $request->productname;
        $product->country = $request->country;
        $product->price = $request->price;
        $product->detail = $request->detail;
        $product->color = $request->color;
        /// image 
        if ($request->file('image')) {
            $image = $request->file('image');
            // wach man.jpg
            // wach-man.jpg
            $filename = time() . '_' . $image->getClientOriginalName();
            $filename = str_replace(' ', '-', $filename);
            $image->move('images/product', $filename);
            //                  product/watch.jpg
            $product->image =   'product' . '/' . $filename;
        }
        $product->color = $request->color;
        $product->category_id = $request->category_id;
        $product->save();


        return "تم الحفظ";
    }
    public function edit($id)
    {
        $categories = Category::all();
        $product = Product::find($id);
        return view('pages.product.edit', compact('categories', 'product'));
    }
    public function remove($id)
    {
        $product = Product::find($id);
        $dest = 'images/' . $product->image;

        ///remove from file 
        if (File::exists($dest)) {
            File::delete($dest);
        }
        // remove from database
        $product->delete();
        return redirect()->route('product.index');
    }
}
