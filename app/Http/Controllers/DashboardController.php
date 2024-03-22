<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:sanctum');
    }


    public function mydashboard()
    {
        return view('dashboard.layout.dashboard');
    }
    public function categryindex()
    {
        $categories = Category::all();

        //return $categories;
        return view('pages.category.index', compact('categories'));
    }
    public function categrycreate()
    {
        return view('pages.category.create');
    }

    public function categoryinsert(Request $request)
    {
        $categoryid = $request->id;
        $this->validate(
            $request,
            ['name' => 'required', 'description' => 'required']
        );
        Category::updateOrCreate([], []);
        $category = new Category;
        $category->name = $request->name;
        $category->description = $request->description;
        $category->save();
        return response()->json($category);
        return redirect()->route('categry.index');
    }
    public function edit($id)
    {
        $category = Category::find($id);

        return view('pages.category.edit', compact('category'));
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
        return redirect()->route('categry.index');
    }
    public function remove($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect()->route('categry.index');
    }
}
