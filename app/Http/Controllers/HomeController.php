<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;


class HomeController extends Controller
{
    public function index(){

       $categories=Category::offset(0)->limit(3)->get();

       $products=Product::orderBy('id','DESC')->limit(4)->get();

       $saleProducts=Product::orderBy('id','ASC')->limit(4)->get();

        return view('front.home.homepage', compact('categories','products','saleProducts'));
}
public function show(int $id){

     $category=Category::findOrFail($id);

     $product=Product::findOrFail($id);

     $saleProduct=Product::findOrFail($id);

     return view ('front.product-details', compact('category','product','saleProduct'));


     }
}
