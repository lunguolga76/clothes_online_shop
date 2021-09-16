<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Product;

class ProductController extends Controller
{
    public function index ()
    {
        $products=Product::paginate(12);
          // dd($products->all());
        return view ('front.products',compact('products'));  
    } 

    public function show(int $productId){
       // dd(Article::all());
        $product=Product::findOrFail($productId);
        
      
        return view ('front.product-details', compact('product'));

        }
   

}
