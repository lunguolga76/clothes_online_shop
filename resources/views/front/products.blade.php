@extends('layouts.front_layout')
@section('hometitle')
Homepage

@endsection

@section('content')
<section class="section-content bg padding-y-sm">
<div class="container">
<div class="card ">
	<div class="card-body">
<div class="row">
	<div class="col-md-3-24"> <strong>Your are here:</strong> </div> <!-- col.// -->
	<nav class="col-md-18-24"> 
	<ol class="breadcrumb">
	    <li class="breadcrumb-item"><a href="../index.html">Home</a></li>
	    <li class="breadcrumb-item"><a href="bedroom.html">Bedroom</a></li>
	    <li class="breadcrumb-item active" aria-current="page">Items</li>
	</ol>  
	</nav> <!-- col.// -->
	<div class="col-md-3-24 text-right"> 
	 <a href="#" data-toggle="tooltip" title="List view"> <i class="fa fa-bars"></i></a>
	 <a href="#" data-toggle="tooltip" title="Grid view"> <i class="fa fa-th"></i></a>
	</div> <!-- col.// -->
</div> <!-- row.// -->
<hr>
<div class="row">
@foreach($products as $product)
	<div class="col-md-3-24"> <strong>{{$product->category->name}}</strong> </div> <!-- col.// -->
    @endforeach
	<div class="col-md-21-24"> 
		
    <div class="row row-cols-1 row-cols-md-2 g-4">
       
		</div>
	</div> <!-- col.// -->
</div> <!-- row.// -->
	</div> <!-- card-body .// -->
</div> <!-- card.// -->

<div class="padding-y-sm">
<span>3897 results for "Item"</span>	
</div>

<div class="row-sm">

    @foreach($products as $product)
    <div class="col-md-3 col-sm-6">
    <a href="{{route('show.product', [$product->id])}}">
        <figure class="card card-product">
            <div class="img-wrap"> 
              
                <img src="">
            </div>
            <figcaption class="info-wrap text-center border-none">
               
            <h4 class="text-center text-dark font-weight-bold  mt-3"> {{$product->name}}</h4>
            <p>{{$product->description}}</p>
            
                <div class="price-wrap ">
                    <p class="price text-danger font-weight-bold mt-2">$ {{$product->unit_price}}</p>
                </div> <!-- price-wrap.// -->
                <button type="button" class="btn btn-secondary">Read more</button>
            </figcaption>
        </figure>
    </a>  <!-- card // -->
    </div> <!-- col // -->
    @endforeach



</div> <!-- row.// -->

<nav aria-label="Page navigation example">
	<ul class="pagination pg-blue  d-flex justify-content-center">
    <nav aria-label="Page navigation">
  {{ $products->links() }}
  </nav>
 
</div><!-- container // -->
</section>

@endsection