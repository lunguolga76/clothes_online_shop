@extends('layouts.front_layout')
@section('hometitle')
Homepage

@endsection

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
            <div class="col-lg-6">
                <select name="price" class="form-control d-inline w-25 m-4" title="price">
                    <option value="0">Select by price</option>
                    <option value="min"@if(request()->price == 'min') selected @endif>Price (Low to High)</option>
                    <option value="max"@if(request()->price == 'max') selected @endif>Price (High to Low)</option>
                </select>

                <!-- by colour -->
                <select name="colour" class="form-control d-inline w-25 m-4" title="colour">
                    <option value="0">Select by color</option>
                    <option value="white"@if(request()->price == 'white') selected @endif>White</option>
                    <option value="black"@if(request()->price == 'black') selected @endif>Black</option>
                    <option value="yellow"@if(request()->price == 'yellow') selected @endif>Yellow</option>
                    <option value="red"@if(request()->price == 'red') selected @endif>Red</option>
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
            </div>
        </div>
       </div>

    <!--end-filters-->
    <!--prdt-starts-->
    <div class="prdt">
        <div class="container">
            <div class="prdt-top">
                <div class="col-md-9 prdt-left">
                    <div class="product-one">
                        @foreach($products as $product)
                        <div class="col-md-4 product-left p-left my-3">
                            <div class="product-main simpleCart_shelfItem">
                                <a href="{{route('show.product', [$product->id])}}" class="mask"><img class="img-responsive zoom-img" src="../images/woman.jpg" alt="" /></a>
                                <div class="product-bottom">
                                    <h3>{{$product->name}}</h3>
                                    <p>{{$product->description}}</p>
                                    <h4><a class="item_add" href="#"><i></i></a> <span class=" item_price">$ {{$product->unit_price}}</span></h4>
                                </div>
                                <div class="srch srch1">
                                    <span>-50%</span>
                                </div>
                            </div>
                        </div>
                        @endforeach

        </div>

    </div>
                <div class="row">
                    <div class="col-lg-6">
                        <nav aria-label="Page navigation">
                            {{ $products->links() }}
                        </nav>
                    </div><!-- end col -->
                </div><!-- end row -->




@endsection
