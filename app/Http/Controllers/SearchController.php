<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request){
        $request->validate([
            's'=>'required',
        ]);
       // dd($request->all());
        $s=$request->s;

        $products=Product::like($s)->paginate(4);

        return view('front.product.product_search',compact('products','s'));
    }
}
