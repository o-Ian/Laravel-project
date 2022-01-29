<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("category/index");
    }

    public function show($slug)
    {
        return view("category/show", ['slug'=>$slug]);
    }


}
