<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryApiController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:sanctum');
    }
    public function categryindex()
    {

        $categories = Category::all();
        return response()->json([
            "mesage" => "success", "categories" => $categories
        ]);
        //return view('pages.category.index', compact('categories'));
    }
    public function insert(Request $request)
    {
        $this->validate(
            $request,
            ['name' => 'required', 'description' => 'required']
        );
        $category = new Category;
        $category->name = $request->name;
        $category->description = $request->description;
        $category->save();
        return response()->json(['message' => "success", "category" => $category], 200);
        //return redirect()->route('categry.index');
    }

    public function update(Request $request, $id)
    {
        $this->validate(
            $request,
            ['name' => 'string|required', 'description' => 'string|required']
        );
        $category =  Category::find($id);
        $category->name = $request->name;
        $category->description = $request->description;
        $category->update();
        return response()->json(["message" => "success", "category" => $category], 200);
        //return redirect()->route('categry.index');
    }
    public function remove($id)
    {
        $category = Category::find($id);
        //return $category;
        if ($category != null || $category != '') {
            $category->delete();

            return response()->json(["message" => "success"], 200);
        } else {
            return response()->json(["message" => "fail"], 404);
        }

        //return redirect()->route('categry.index');
    }
}
