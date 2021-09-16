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
	<div class="col-md-3-24"> <strong>Category</strong> </div> <!-- col.// -->
	<div class="col-md-21-24"> 
		
    <div class="row row-cols-1 row-cols-md-2 g-4">
        @foreach($categories as $category)
    <a href=""> 
    <div class="card bg-secondary text-white mb-3 mx-1" style="max-width: 18rem;">
    <img src="{{$category->getImageUrlAttribute()}}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title text-uppercase fw-bold text-center">{{$category->name}}</h5>
        <p class="card-text">{{$category->description}}</p>
      </div>
</div>
    </a>
    

        @endforeach
		</div>
	</div> <!-- col.// -->
</div> <!-- row.// -->
	</div> <!-- card-body .// -->
</div> <!-- card.// -->

<div class="padding-y-sm">
<span>3897 results for "Item"</span>	
</div>

<div class="row-sm">
<div class="col-md-3 col-sm-6">
    <a href="{{route('categoryhome')}}">
        <figure class="card card-product">
            <div class="img-wrap"> 
                <h4 class="text-center text-dark font-weight-bold  mt-3"> Future</h4>
                <img src="../images/items/bed/bed10.jpg">
            </div>
            <figcaption class="info-wrap text-center border-none">
                <div class="price-wrap ">
                    <small class="text-primary font-weight-bold">Was <del> $500 </del>&nbsp; &nbsp;</small>
                    <p class="price text-danger font-weight-bold mt-2">Now $255</p>
                </div> <!-- price-wrap.// -->
                <button type="button" class="btn btn-secondary">Read more</button>
            </figcaption>
        </figure>
    </a>  <!-- card // -->
</div> <!-- col // -->
<div class="col-md-3 col-sm-6">
    <a href="../products/bedroom2.html">
        <figure class="card card-product">
            <div class="img-wrap"> 
                <h4 class="text-center text-dark font-weight-bold  mt-3"> Country</h4>
                <img src="../images/items/bed/bed12.jpg">
            </div>
            <figcaption class="info-wrap text-center border-none">
                <div class="price-wrap ">
                    <small class="text-primary font-weight-bold">Was <del> $500 </del>&nbsp; &nbsp;</small>
                    <p class="price text-danger font-weight-bold mt-2">Now $255</p>
                </div> <!-- price-wrap.// -->
                <button type="button" class="btn btn-secondary">Read more</button>
            </figcaption>
        </figure>
    </a>  <!-- card // -->
</div> <!-- col // -->
<div class="col-md-3 col-sm-6">
    <a href="../products/bedroom3.html">
        <figure class="card card-product">
            <div class="img-wrap"> 
                <h4 class="text-center text-dark font-weight-bold  mt-3"> Curly</h4>
                <img src="../images/items/bed/bed13.jpg">
            </div>
            <figcaption class="info-wrap text-center border-none">
                <div class="price-wrap ">
                    <small class="text-primary font-weight-bold">Was <del> $500 </del>&nbsp; &nbsp;</small>
                    <p class="price text-danger font-weight-bold mt-2">Now $255</p>
                </div> <!-- price-wrap.// -->
                <button type="button" class="btn btn-secondary">Read more</button>
            </figcaption>
        </figure>
    </a> <!-- card // -->
</div> <!-- col // -->
<div class="col-md-3 col-sm-6">
    <a href="../products/bedroom4.html">
        <figure class="card card-product">
            <div class="img-wrap"> 
                <h4 class="text-center text-dark font-weight-bold  mt-3"> Parma</h4>
                <img src="../images/items/bed/bed1.jpg">
            </div>
            <figcaption class="info-wrap text-center border-none">
                <div class="price-wrap ">
                    <small class="text-primary font-weight-bold">Was <del> $500 </del>&nbsp; &nbsp;</small>
                    <p class="price text-danger font-weight-bold mt-2">Now $255</p>
                </div> <!-- price-wrap.// -->
                <button type="button" class="btn btn-secondary">Read more</button>
            </figcaption>
        </figure>
    </a>  <!-- card // -->
</div> <!-- col // -->
<div class="col-md-3 col-sm-6">
	<a href="../products/bedroom5.html">
	<figure class="card card-product">
                <div class="img-wrap"> 
                    <h4 class="text-center text-dark font-weight-bold  mt-3"> Inglezi</h4>
                    <img src="../images/items/bed/bed2.jpg">
                </div>
                <figcaption class="info-wrap text-center border-none">
                    <div class="price-wrap ">
                        <small class="text-primary font-weight-bold">Was <del> $500 </del>&nbsp; &nbsp;</small>
                        <p class="price text-danger font-weight-bold mt-2">Now $255</p>
                    </div> <!-- price-wrap.// -->
                    <button type="button" class="btn btn-secondary">Read more</button>
                </figcaption>
            </figure>
        </a>  <!-- card // -->
</div> <!-- col // -->
<div class="col-md-3 col-sm-6">
    <a href="../products/bedroom6.html">
        <figure class="card card-product">
            <div class="img-wrap"> 
                <h4 class="text-center text-dark font-weight-bold  mt-3"> Lady</h4>
                <img src="../images/items/bed/bed3.jpg">
            </div>
            <figcaption class="info-wrap text-center border-none">
				<div class="price-wrap ">
					<small class="text-primary font-weight-bold">Was <del> $500 </del>&nbsp; &nbsp;</small>
					<p class="price text-danger font-weight-bold mt-2">Now $255</p>
				</div> <!-- price-wrap.// -->
				<button type="button" class="btn btn-secondary">Read more</button>
			</figcaption>
        </figure>
    </a>  <!-- card // -->
</div> <!-- col // -->
<div class="col-md-3 col-sm-6">
    <a href="../products/bedroom7.html">
        <figure class="card card-product">
            <div class="img-wrap"> 
                <h4 class="text-center text-dark font-weight-bold  mt-3"> Kiko</h4>
                <img src="../images/items/bed/bed4.jpg">
            </div>
            <figcaption class="info-wrap text-center border-none">
                <div class="price-wrap ">
                    <small class="text-primary font-weight-bold">Was <del> $500 </del>&nbsp; &nbsp;</small>
                    <p class="price text-danger font-weight-bold mt-2">Now $255</p>
                </div> <!-- price-wrap.// -->
                <button type="button" class="btn btn-secondary">Read more</button>
            </figcaption>
        </figure>
    </a> 
<!-- card // -->
</div> <!-- col // -->
<div class="col-md-3 col-sm-6">
    <a href="../products/bedroom8.html">
        <figure class="card card-product">
            <div class="img-wrap"> 
                <h4 class="text-center text-dark font-weight-bold  mt-3"> Pray</h4>
                <img src="../images/items/bed/bed5.jpg">
            </div>
            <figcaption class="info-wrap text-center border-none">
                <div class="price-wrap ">
                    <small class="text-primary font-weight-bold">Was <del> $500 </del>&nbsp; &nbsp;</small>
                    <p class="price text-danger font-weight-bold mt-2">Now $255</p>
                </div> <!-- price-wrap.// -->
                <button type="button" class="btn btn-secondary">Read more</button>
            </figcaption>
        </figure>
    </a> <!-- card // -->
</div> <!-- col // -->
<div class="col-md-3 col-sm-6">
    <a href="../products/bedroom9.html">
        <figure class="card card-product">
            <div class="img-wrap"> 
                <h4 class="text-center text-dark font-weight-bold  mt-3"> Bingo</h4>
                <img src="../images/items/bed/bed6.jpg">
            </div>
            <figcaption class="info-wrap text-center border-none">
                <div class="price-wrap ">
                    <small class="text-primary font-weight-bold">Was <del> $500 </del>&nbsp; &nbsp;</small>
                    <p class="price text-danger font-weight-bold mt-2">Now $255</p>
                </div> <!-- price-wrap.// -->
                <button type="button" class="btn btn-secondary">Read more</button>
            </figcaption>
        </figure>
    </a>  <!-- card // -->
</div> <!-- col // -->
<div class="col-md-3 col-sm-6">
    <a href="../products/bedroom10.html">
        <figure class="card card-product">
            <div class="img-wrap"> 
                <h4 class="text-center text-dark font-weight-bold  mt-3"> Zuluf</h4>
                <img src="../images/items/bed/bed7.jpg">
            </div>
            <figcaption class="info-wrap text-center border-none">
                <div class="price-wrap ">
                    <small class="text-primary font-weight-bold">Was <del> $500 </del>&nbsp; &nbsp;</small>
                    <p class="price text-danger font-weight-bold mt-2">Now $255</p>
                </div> <!-- price-wrap.// -->
                <button type="button" class="btn btn-secondary">Read more</button>
            </figcaption>
        </figure>
    </a>  <!-- card // -->
</div> <!-- col // -->
<div class="col-md-3 col-sm-6">
    <a href="../products/bedroom11.html">
        <figure class="card card-product">
            <div class="img-wrap"> 
                <h4 class="text-center text-dark font-weight-bold  mt-3"> Sigma</h4>
                <img src="../images/items/bed/bed8.jpg">
            </div>
            <figcaption class="info-wrap text-center border-none">
                <div class="price-wrap ">
                    <small class="text-primary font-weight-bold">Was <del> $500 </del>&nbsp; &nbsp;</small>
                    <p class="price text-danger font-weight-bold mt-2">Now $255</p>
                </div> <!-- price-wrap.// -->
                <button type="button" class="btn btn-secondary">Read more</button>
            </figcaption>
        </figure>
    </a>  <!-- card // -->
</div> <!-- col // -->
<div class="col-md-3 col-sm-6">
    <a href="../products/bedroom12.html">
        <figure class="card card-product">
            <div class="img-wrap"> 
                <h4 class="text-center text-dark font-weight-bold  mt-3"> Banny</h4>
                <img src="../images/items/bed/bed9.jpg">
            </div>
            <figcaption class="info-wrap text-center border-none">
                <div class="price-wrap ">
                    <small class="text-primary font-weight-bold">Was <del> $500 </del>&nbsp; &nbsp;</small>
                    <p class="price text-danger font-weight-bold mt-2">Now $255</p>
                </div> <!-- price-wrap.// -->
                <button type="button" class="btn btn-secondary">Read more</button>
            </figcaption>
        </figure>
    </a>  <!-- card // -->
</div> <!-- col // -->
</div> <!-- row.// -->

<nav aria-label="Page navigation example">
	<ul class="pagination pg-blue  d-flex justify-content-center">
	  <li class="page-item disabled">
		<a class="page-link" tabindex="-1">Previous</a>
	  </li>
	  <li class="page-item active"><a class="page-link bg-primary">1<span class="sr-only">(current)</span></a></li>
	  <li class="page-item ">
		<a class="page-link">2 </a>
	  </li>
	  <li class="page-item"><a class="page-link">3</a></li>
	  <li class="page-item">
		<li class="page-item"><a class="page-link">4</a></li>
		<li class="page-item">
		<a class="page-link">Next</a>
	  </li>
	</ul>
  </nav>
</div><!-- container // -->
</section>
@endsection