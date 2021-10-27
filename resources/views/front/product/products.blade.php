@extends('layouts.front_layout')
@section('hometitle')




@section('content')
    <!--start-breadcrumbs-->
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="breadcrumbs">
                    <div class="container">
                        <div class="breadcrumbs-main">
                            <ol class="breadcrumb">
                                <li><a href="/">Home</a></li>
                                <li class="active"></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       </div>


    <!--end-breadcrumbs-->
    <!--filters-->
       <div class="container mt-4 ml-4">
        <div class="row">
            <div class="col-xl-10 col-lg-10 col-md-9 col-sm-12">
                <form action="{{ route('index.products') }}" method="GET">
                <select name="unit_price" class="form-control d-inline w-25 m-4" title="unit_price">
                    <option value="0">Select by price</option>
                    <option value="min"@if(request()->unit_price == 'min') selected @endif>Price (Low to High)</option>
                    <option value="max"@if(request()->unit_price == 'max') selected @endif>Price (High to Low)</option>
                </select>


                <!-- by colour -->
                <select name="colour" class="form-control d-inline w-25 m-4" title="colour">
                    <option value="0">Select by color</option>
                    <option value="white"@if(request()->colour == 'white') selected @endif>White</option>
                    <option value="black"@if(request()->colour == 'black') selected @endif>Black</option>
                    <option value="yellow"@if(request()->colour == 'yellow') selected @endif>Yellow</option>
                    <option value="red"@if(request()->colour == 'red') selected @endif>Red</option>
                </select>
                <!-- new -->
                <div class="form-check form-check-inline">
                    <input type="checkbox" name="new" class="form-check-input" id="new"
                           @if(request()->has('new')) checked @endif value="yes">
                    <label class="form-check-label" for="new">New</label>
                </div>
                <!-- on sale -->
                <div class="form-check form-check-inline ">
                    <input type="checkbox" name="sale" class="form-check-input" id="sale"
                           @if(request()->has('sale')) checked @endif value="yes">
                    <label class="form-check-label" for="sale">On sale</label>
                </div>
                <button type="submit" class="btn btn-info">Filter</button>
                </form>
            </div>
        </div>
       </div>

    <!--end-filters-->
    <!--prdt-starts-->
    <div class="prdt">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                        @foreach($products as $product)
                        <div class="col-md-4 my-2">
                            <div class="product-main">
                                <a href="{{route('show.product', [$product->id])}}" class="mask">
                                    <img class="img-responsive zoom-img" src="{{$product->productDetail->image_url}}" alt="" />
                                </a>
                                <div class="product-bottom">
                                    <h3>{{$product->name}}</h3>
                                    <p>{{$product->description}}</p>
                                    <h4><a class="item_add" href="#"></a> <span class=" item_price">$ {{$product->unit_price}}</span></h4>
                                </div>
                            </div>
                        </div>
                        @endforeach
                </div>


    </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 d-flex justify-content-center">
                        <nav aria-label="Page navigation">
                            {{ $products->links() }}
                        </nav>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div>

        </div>
    </div>


@endsection
