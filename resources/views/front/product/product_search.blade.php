@extends('layouts.front_layout')
@section('hometitle')
    Homepage
@endsection


@section('content')

    <!--carousel-starts-->
    <!--banner-ends-->
    <!--Slider-Starts-Here-->

    <div class="product">
        <div class="container">
            <div class="product-top">
                <h2>Search: {{$s}}</h2>
                <div class="product-one">
                    @if($products->count())
                    @foreach($products as $product)
                        <div class="col-md-3 product-left">
                            <div class="product-main simpleCart_shelfItem">
                                <a href="{{route('show.product', [$product->id])}}" class="mask"><img class="img-responsive zoom-img" src="{{$product->productDetail->image_url}}" alt="" /></a>
                                <div class="product-bottom">
                                    <h3>{{$product->name}}</h3>
                                    <h4>{{$product->category->name}}</h4>
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
            </div>
        </div>
    </div>
    @else
        <h3 class="my-4">Nothing to display for this search</h3>
    @endif
    <div class="row">
        <div class="col-md-12">
            <nav aria-label="Page navigation">
                {{$products->appends(['s'=>request()->s])->links()}}



            </nav>
        </div><!-- end col -->
    </div><!-- end row -->
    <!--product-end-->
@endsection

