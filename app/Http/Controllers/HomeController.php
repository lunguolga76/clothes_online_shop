<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Section;

class SectionController extends Controller
{
    public function index(){


       $categories=Category::offset(0)->limit(3)->get();
       $products=Product::orderBy('id','DESC')->limit(4)->get();
       $saleProducts=Product::orderBy('id','ASC')->limit(4)->get();
       //dd($categories);
       //dd(Section::all()->toArray());
        //$posts=$category->posts()->orderBy('id','desc')->paginate(2);

        return view('front.home.homepage', compact('categories','products','saleProducts'));
}
public function show(int $productId){
    // dd(Article::all());
     $category=Section::findOrFail('id');
     $product=Product::findOrFail('id');
     $saleProduct=Product::findOrFail('id');

     return view ('front.product-details', compact('category','product','saleProduct'));


     }
}
