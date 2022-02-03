<?php

namespace App\Http\Controllers;

use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('category/index', ['categories' => Category::all()]);
    }

    public function show(Category $category)
    {
        return view('category/show', ['category' => $category->load('products')]);
    }
}
