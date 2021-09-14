<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function show(int $categoryId){


        $category=Category::findOrFail($categoryId);
        //dd(Category::all()->toArray());
        //$posts=$category->posts()->orderBy('id','desc')->paginate(2);

        return view('front.category', compact('category'));
}
}
