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
	<div class="col-md-3-24"> <strong>Filter by:</strong> </div> <!-- col.// -->
	<div class="col-md-21-24"> 
		<ul class="list-inline">
		  <li class="list-inline-item dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">   Supplier type </a>
            <div class="dropdown-menu p-3" style="max-width:400px;"">	
		      <label class="form-check">
		      	<a href="#">
		      	 <input type="checkbox" class="form-check-input"> Good supplier
			    </a>
		      </label>
		      <label class="form-check">
		      	<a href="#">
		      	 <input type="checkbox" class="form-check-input"> Best supplier
			    </a>
		      </label>
		      <label class="form-check">
		      	<a href="#">
		      	 <input type="checkbox" class="form-check-input"> New supplier
			    </a>
		      </label>
            </div> <!-- dropdown-menu.// -->
	      </li>
	      <li class="list-inline-item dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">  Country </a>
            <div class="dropdown-menu p-3" style="max-width:400px;"">	
		      <label class="form-check">
		      	<a href="#">
		      	 <input type="checkbox" class="form-check-input"> China
			    </a>
		      </label>
		      <label class="form-check">
		      	<a href="#">
		      	 <input type="checkbox" class="form-check-input"> Japan
			    </a>
		      </label>
		      <label class="form-check">
		      	<a href="#">
		      	 <input type="checkbox" class="form-check-input"> Uzbekistan
			    </a>
		      </label>
		      <label class="form-check">
		      	<a href="#">
		      	 <input type="checkbox" class="form-check-input"> Russia
			    </a>
		      </label>
            </div> <!-- dropdown-menu.// -->
	      </li>
		  <li class="list-inline-item"><a href="#">Product type</a></li>
		  <li class="list-inline-item"><a href="#">Brand name</a></li>
		  <li class="list-inline-item"><a href="#">Color</a></li>
		  <li class="list-inline-item"><a href="#">Size</a></li>
		  <li class="list-inline-item">
		  	<div class="form-inline">
		  		<label class="mr-2">Price</label>
				<input class="form-control form-control-sm" placeholder="Min" type="number">
					<span class="px-2"> - </span>
				<input class="form-control form-control-sm" placeholder="Max" type="number">
				<button type="submit" class="btn btn-sm ml-2">Ok</button>
			</div>
		  </li>
		</ul>
	</div> <!-- col.// -->
</div> <!-- row.// -->
	</div> <!-- card-body .// -->
</div> <!-- card.// -->

<div class="padding-y-sm">
<span>3897 results for "Item"</span>	
</div>

<div class="row-sm">
<div class="col-md-3 col-sm-6">
    <a href="{{'/category/product/{id}'}}">
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