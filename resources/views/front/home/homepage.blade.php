@extends('layouts.front_layout')
@section('hometitle')
Homepage
@endsection


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                @if(session()->has('message'))
                    <div class="alert alert-success text-capitalize fw-bold fs-3">
                        {{ session()->get('message') }}
                    </div>
                @endif
            </div>
        </div>
    </div>




    <!--carousel-starts-->
      @include('front.home.carousel')
     <!--banner-ends-->
    <!--Slider-Starts-Here-->

    <div class="about">
        <div class="container">
            <div class="about-top grid-1">
                <h1 class="text-center my-4">Category with discounts</h1>
                @foreach($categories as $category)
                <a href="{{route('index.products',[$category->name])}}" >
                <div class="col-md-4 about-left">
                    <figure class="effect-bubba">
                        <img class="img-responsive img-thumbnail" src="{{$category->image_path}}" alt=""/>
                        <figcaption>
                            <h2>{{$category->name}}</h2>
                            <p>{{$category->description}}</p>
                        </figcaption>
                    </figure>
                </div>
                </a>
                @endforeach
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!--about-end-->
    <!--product-starts-->
    <div class="product">
        <div class="container">
            <h1 class="text-center my-4">New Products</h1>
            <div class="product-top">
                <div class="product-one">
                    @foreach($products as $product)
                    <div class="col-md-3 product-left">
                        <div class="product-main simpleCart_shelfItem">
                            <a href="{{route('show.product', [$product->id])}}" class="mask"><img class="img-responsive zoom-img" src="{{$product->productDetail->image_url}}" alt="" /></a>
                            <div class="product-bottom">
                                <h3>{{$product->name}}</h3>
                                <p>{{$product->description}}w</p>
                                <h4><a class="item_add" href=""><i></i></a> <span class=" item_price">$ {{$product->unit_price}}</span></h4>
                            </div>
                            <div class="srch">
                                <span>-50%</span>
                            </div>
                        </div>
                    </div>
                    @endforeach


                    <div class="clearfix"></div>
                </div>
                <h1 class="text-center my-4">Products with discounts</h1>
                <div class="product-one">
                    @foreach($saleProducts as $saleProduct)
                    <div class="col-md-3 h-100 product-left">
                        <div class="product-main simpleCart_shelfItem">
                            <a href="{{route('show.product', [$product->id])}}" class="mask"><img class="img-responsive zoom-img" src="{{$saleProduct->productDetail->image_url}}" alt="" /></a>
                            <div class="product-bottom">
                                <h3>{{$saleProduct->name}}</h3>
                                <p>{{$saleProduct->description}}</p>
                                <h4><a class="item_add" href=""><i></i></a> <span class=" item_price">$ {{$saleProduct->unit_price}}</span></h4>
                            </div>
                            <div class="srch">
                                <span>-50%</span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
    <!--product-end-->

@endsection
