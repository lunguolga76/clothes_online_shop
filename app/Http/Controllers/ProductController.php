<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Product;
use  App\Models\ProductDetail;
use  App\Services\Logging\ViewLogger;

class ProductController extends Controller
{
    public function index ()
    {
        $products = Product::paginate(12);
          //dd($products->all());
        return view ('front.products',compact('products'));
    }

    public function show(int $productId,  ViewLogger $viewLogger){
       // dd(Article::all());
        $product = Product::findOrFail($productId);
        $viewLogger->logView($product);


        return view ('front.product-details', compact('product'));

    }


}
