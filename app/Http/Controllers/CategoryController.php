<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index(){

        $categories=Category::paginate(12);
        //dd($categories);

        return view('front.category.categories', compact('categories'));

    }
}

