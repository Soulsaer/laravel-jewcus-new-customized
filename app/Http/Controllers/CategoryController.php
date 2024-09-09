<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::paginate(10); 
        return view('Admin.category.index', compact('categories'));
    }

    public function create(){
        return view('Admin.category.create');
    }

    public function store(Request $request)
    {
        Category::create($request->all());
        return redirect()->route('admin.category.index')->with('success', 'Category created successfully.');
    }


    public function show($id){
        $category = Category::findOrFail($id);
        return view('Admin.category.show', compact('category'));
    }

    public function edit($id){
        $category = Category::findOrFail($id);
        return view('Admin.category.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);
        $category->update($request->all());

        return redirect()->route('admin.category.index')->with('success', 'Category updated successfully.');
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return redirect()->route('admin.category.index')->with('success', 'Category deleted successfully.');
    }
}
