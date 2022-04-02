<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
        $categorias = Category::all();
        return view('admin.category.index', compact('categorias'));
    }

 
    public function create()
    {
        return view('admin.category.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'slug' =>'required|unique:categories',
        ]);

        $category = Category::create($request->all());

        return redirect()->route('category.edit', compact('category'))->with('info', 'La categoria se creó con exito');
    }

    public function show(Category $category)
    {
        return view('admin.category.show', compact('category'));
    }

  
    public function edit(Category $category)
    {
        return view('admin.category.edit', compact('category'));
    }

   
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required',
            'slug' =>"required|unique:categories,slug,$category->id",
        ]);
        $category->update($request->all());    
        
        return redirect()->route('category.edit', compact('category'))->with('info', 'La categoria se actualizo con exito');

    }

 
    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route('category.index',)->with('delete', 'La categoria se eliminó con exito');
    }
}
