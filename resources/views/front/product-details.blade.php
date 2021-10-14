@extends('layouts.front_layout')
@section('hometitle')
Contacts

@endsection


@section('content')
<section class="header-main">
	<div class="container">
<div class="row-sm align-items-center">
	<div class="col-lg-4-24 col-sm-3">
	<div class="category-wrap dropdown py-1">
		<button type="button" class="btn btn-light  dropdown-toggle" data-toggle="dropdown" ><i class="fa fa-bars"></i> Categories</button>
		<div class="dropdown-menu">
			<a class="dropdown-item" href="#">Machinery / Mechanical Parts / Tools </a>
			<a class="dropdown-item" href="#">Consumer Electronics / Home Appliances </a>
			<a class="dropdown-item" href="#">Auto / Transportation</a>
			<a class="dropdown-item" href="#">Apparel / Textiles / Timepieces </a>
			<a class="dropdown-item" href="#">Home & Garden / Construction / Lights </a>
			<a class="dropdown-item" href="#">Beauty & Personal Care / Health </a>
		</div>
	</div>
	</div>
	<div class="col-lg-11-24 col-sm-8">
			<form action="#" class="py-1">
				<div class="input-group w-100">
					<select class="custom-select"  name="category_name">
						<option value="">All type</option>
						<option value="">Special</option>
						<option value="">Only best</option>
						<option value="">Latest</option>
					</select>
				    <input type="text" class="form-control" style="width:50%;" placeholder="Search">
				    <div class="input-group-append">
				      <button class="btn btn-warning" type="submit">
				        <i class="fa fa-search"></i> Search
				      </button>
				    </div>
			    </div>
			</form> <!-- search-wrap .end// -->
	</div> <!-- col.// -->
	<div class="col-lg-9-24 col-sm-12">
		<div class="widgets-wrap float-right row no-gutters py-1">
			<div class="col-auto">
			<div class="widget-header dropdown">
				<a href="#" data-toggle="dropdown" data-offset="20,10">
					<div class="icontext">
						<div class="icon-wrap"><i class="text-warning icon-sm fa fa-user"></i></div>
						<div class="text-wrap text-dark">
							Sign in <br>
							My account <i class="fa fa-caret-down"></i>
						</div>
					</div>
				</a>
				<div class="dropdown-menu">
					<form class="px-4 py-3">
						<div class="form-group">
						  <label>Email address</label>
						  <input type="email" class="form-control" placeholder="email@example.com">
						</div>
						<div class="form-group">
						  <label>Password</label>
						  <input type="password" class="form-control" placeholder="Password">
						</div>
						<button type="submit" class="btn btn-primary">Sign in</button>
						</form>
						<hr class="dropdown-divider">
						<a class="dropdown-item" href="#">Have account? Sign up</a>
						<a class="dropdown-item" href="#">Forgot password?</a>
				</div> <!--  dropdown-menu .// -->
			</div>  <!-- widget-header .// -->
			</div> <!-- col.// -->
			<div class="col-auto">
				<a href="#" class="widget-header">
					<div class="icontext">
						<div class="icon-wrap"><i class="text-warning icon-sm fa fa-shopping-cart"></i></div>
						<div class="text-wrap text-dark">
							Order <br> Protection
						</div>
					</div>
				</a>
			</div> <!-- col.// -->
			<div class="col-auto">
				<a href="#" class="widget-header">
					<div class="icontext">
						<div class="icon-wrap"><i class="text-warning icon-sm  fa fa-heart"></i></div>
						<div class="text-wrap text-dark">
							<span class="small round badge badge-secondary">0</span>
							<div>Favorites</div>
						</div>
					</div>
				</a>
			</div> <!-- col.// -->
		</div> <!-- widgets-wrap.// row.// -->
	</div> <!-- col.// -->
</div> <!-- row.// -->
	</div> <!-- container.// -->
</section> <!-- header-main .// -->
</header> <!-- section-header.// -->

<!-- ========================= SECTION TOPBAR ========================= -->
<section class="section-topbar border-top padding-y-sm">
<div class="container">
	<span>Supplier: Manufacturer of China Co., Ltd.</span> &nbsp  <span class="text-warning">2 years</span>
	<div class="float-right dropdown">
		<a href="" class="dropdown-toggle" data-toggle="dropdown" >English</a>
		<div class="dropdown-menu dropdown-menu-right">
			<a class="dropdown-item" href="#">Russian </a>
			<a class="dropdown-item" href="#">Arabic </a>
		</div>
	</div>
</div> <!-- container.// -->
</section>
<!-- ========================= SECTION TOPBAR .// ========================= -->

<!-- ========================= SECTION CONTENT ========================= -->
<section class="section-content bg padding-y-sm">
<div class="container">
<nav class="mb-3">
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item"><a href="#">Category name</a></li>
    <li class="breadcrumb-item"><a href="#">Sub category</a></li>
    <li class="breadcrumb-item active" aria-current="page">Items</li>
</ol>
</nav>

<div class="row">
<div class="col-xl-10 col-md-9 col-sm-12">


<main class="card">
	<div class="row no-gutters">
		<aside class="col-sm-6 border-right">
<article class="gallery-wrap">
<div class="img-big-wrap">
  <div> <a href="images/items/1.jpg" data-fancybox=""><img src="images/items/1.jpg"></a></div>
</div> <!-- slider-product.// -->
<div class="img-small-wrap">
  <div class="item-gallery"> <img src="images/items/1.jpg"></div>
  <div class="item-gallery"> <img src="images/items/2.jpg"></div>
  <div class="item-gallery"> <img src="images/items/3.jpg"></div>
  <div class="item-gallery"> <img src="images/items/4.jpg"></div>
</div> <!-- slider-nav.// -->
</article> <!-- gallery-wrap .end// -->
		</aside>
		<aside class="col-sm-6">
<article class="card-body">
<!-- short-info-wrap -->
	<h3 class="title mb-3">{{$product->name}}</h3>
    <pre>
        {{ $product }}
    </pre>

<div class="mb-3">
	<var class="price h3 text-warning">
		<span class="currency">$ </span><span class="num">{{$product->unit_price}}</span>
	</var>

</div> <!-- price-detail-wrap .// -->
<dl>
  <dt>Description</dt>
  <dd><p>{{$product->description}}</p></dd>
</dl>
<dl class="row">
  <dt class="col-sm-3">Cod</dt>
  <dd class="col-sm-9">{{$product->code}}</dd>

  <dt class="col-sm-3">Color</dt>
  <dd class="col-sm-9">Black and white </dd>
</dl>
<div class="rating-wrap">

	<ul class="rating-stars">
		<li style="width:80%" class="stars-active">
			<i class="fa fa-star"></i> <i class="fa fa-star"></i>
			<i class="fa fa-star"></i> <i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
		</li>
		<li>
			<i class="fa fa-star"></i> <i class="fa fa-star"></i>
			<i class="fa fa-star"></i> <i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
		</li>
	</ul>
	<div class="label-rating">132 reviews</div>
	<div class="label-rating">154 orders </div>
</div> <!-- rating-wrap.// -->
<hr>
	<div class="row">
		<div class="col-sm-5">
			<dl class="dlist-inline">
			  <dt>Quantity: </dt>
			  <dd>
			  	<select class="form-control form-control-sm" style="width:70px;">
			  		<option> 1 </option>
			  		<option> 2 </option>
			  		<option> 3 </option>
			  	</select>
			  </dd>
			</dl>  <!-- item-property .// -->
		</div> <!-- col.// -->
		<div class="col-sm-7">
			<dl class="dlist-inline">
				  <dt>Size: </dt>
				  <dd>
				  	<label class="form-check form-check-inline">
					  <input class="form-check-input" name="inlineRadioOptions" id="inlineRadio2" value="option2" type="radio">
					  <span class="form-check-label">S</span>
					</label>
					<label class="form-check form-check-inline">
					  <input class="form-check-input" name="inlineRadioOptions" id="inlineRadio2" value="option2" type="radio">
					  <span class="form-check-label">M</span>
					</label>
					<label class="form-check form-check-inline">
					  <input class="form-check-input" name="inlineRadioOptions" id="inlineRadio2" value="option2" type="radio">
					  <span class="form-check-label">L</span>
					</label>
					<label class="form-check form-check-inline">
					  <input class="form-check-input" name="inlineRadioOptions" id="inlineRadio2" value="option2" type="radio">
					  <span class="form-check-label">XL</span>
					</label>
					<label class="form-check form-check-inline">
					  <input class="form-check-input" name="inlineRadioOptions" id="inlineRadio2" value="option2" type="radio">
					  <span class="form-check-label">XXL</span>
					</label>
				  </dd>
			</dl>  <!-- item-property .// -->
		</div> <!-- col.// -->
	</div> <!-- row.// -->
	<hr>
	<a href="#" class="btn  btn-warning"> <i class="fas fa-shopping-bag"></i> Add to bag </a>

<!-- short-info-wrap .// -->
</article> <!-- card-body.// -->
		</aside> <!-- col.// -->
	</div> <!-- row.// -->
</main> <!-- card.// -->

<!-- PRODUCT DETAIL -->
<article class="card mt-3">
	<div class="card-body">
		<h4>Detail overview</h4>
	<p>	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia ididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi deserunt mollit anim id est laborum.</p>
	<p>	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteurididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	<p>	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	<p>	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	</div> <!-- card-body.// -->
</article> <!-- card.// -->

<!-- PRODUCT DETAIL .// -->

</div> <!-- col // -->
<aside class="col-xl-2 col-md-3 col-sm-12">
<div class="card">
	<div class="card-header">
	    Trade Assurance
	</div>
	<div class="card-body small">
		 <span>China | Trading Company</span>
		 <hr>
		 Transaction Level: Good <br>
		 Supplier Assessments: Best
		 <hr>
		 11 Transactions $330,000+
		 <hr>
		 Response Time 24h <br>
		 Response Rate: 94%  <br>
		 <hr>
		 <a href="">Visit pofile</a>

	</div> <!-- card-body.// -->
</div> <!-- card.// -->
<div class="card mt-3">
	<div class="card-header">
	    You may like
	</div>
	<div class="card-body row">
<div class="col-md-12 col-sm-3">
	<figure class="item border-bottom mb-3">
			<a href="#" class="img-wrap"> <img src="images/items/2.jpg" class="img-md"></a>
			<figcaption class="info-wrap">
				<a href="#" class="title">The name of product</a>
				<div class="price-wrap mb-3">
					<span class="price-new">$280</span> <del class="price-old">$280</del>
				</div> <!-- price-wrap.// -->
			</figcaption>
	</figure> <!-- card-product // -->
</div> <!-- col.// -->
<div class="col-md-12 col-sm-3">
<figure class="item border-bottom mb-3">
		<a class="img-wrap"> <img src="images/items/3.jpg" class="img-md"></a>
		<figcaption class="info-wrap">
			<a href="#" href="#" class="title">The name of product</a>
			<div class="price-wrap mb-3">
				<span class="price-new">$280</span>
			</div> <!-- price-wrap.// -->
		</figcaption>
</figure> <!-- card-product // -->
</div> <!-- col.// -->
<div class="col-md-12 col-sm-3">
<figure class="item border-bottom mb-3">
		<a href="#" class="img-wrap"> <img src="images/items/4.jpg" class="img-md"></a>
		<figcaption class="info-wrap">
			<a href="#" class="title">The name of product</a>
			<div class="price-wrap mb-3">
				<span class="price-new">$280</span>
			</div> <!-- price-wrap.// -->
		</figcaption>
</figure> <!-- card-product // -->
</div> <!-- col.// -->
	</div> <!-- card-body.// -->
</div> <!-- card.// -->
</aside> <!-- col // -->
</div> <!-- row.// -->



</div><!-- container // -->
</section>

@endsection
