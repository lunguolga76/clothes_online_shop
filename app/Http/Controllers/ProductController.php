<?php

namespace App\Http\Controllers;


use App\Http\Filters\ArticleFilter;
use App\Http\Filters\ProductFilter;
use  App\Models\Product;
use  App\Models\ProductDetail;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    public function index (Request $request, ProductFilter $filters)
    {
        $products = Product::with('productDetail')->filter($filters)->paginate(9);

        return view ('front.product.products',compact('products'));
    }

    public function show(int $productId){

        $product = Product::findOrFail($productId);

        // $viewLogger->logView($product);

        return view ('front.product.product-details', compact('product'));

    }


}
