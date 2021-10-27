@extends('layouts.front_layout')
@section('hometitle')
    Category

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
                                <li class="active"><a href="/">Men</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--end-breadcrumbs-->


    <!--end-filters-->
    <!--prdt-starts-->
    <div class="about">
        <div class="container">
                <div class="row row-cols-3 g-4">
                @foreach($categories as $category)
                    <a href="{{route('index.products')}}" >
                        <div class="col">
                        <div class="about-left">
                            <figure class="effect-bubba">
                                <img class="img-responsive" class="rounded" src="{{$category->image_path}}" alt=""/>
                                <figcaption>
                                    <h2 class="text-uppercase">{{$category->name}}</h2>
                                    <p>{{$category->description}}</p>
                                </figcaption>
                            </figure>
                        </div>
                        </div>
                    </a>
                @endforeach

                    <div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div class="container">
    <div class="row">
        <div class="col-md-10 d-flex justify-content-center">
            <nav aria-label="Page navigation">
                {{ $categories->links() }}
            </nav>
        </div><!-- end col -->
    </div><!-- end row -->
    </div>




@endsection
