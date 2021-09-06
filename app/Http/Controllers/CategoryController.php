<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show($id){


        $category=Category::where('id',$id)->firstOrFail();
        dd(Category::all()->toArray());
        //$posts=$category->posts()->orderBy('id','desc')->paginate(2);

        return view('categories.show', compact('category'));
}
}
