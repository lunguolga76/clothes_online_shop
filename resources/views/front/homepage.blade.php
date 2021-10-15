@extends('layouts.front_layout')
@section('hometitle')
Homepage

@endsection


@section('content')
<!-- ========================= SECTION INTRO-1 ========================= -->
<section id="intro-1" class="section-intro-1 pt-0">
<div class="slider">
	<div class="item pagina-start item-1 "><span class="slider-intro text-primary text-hover">Our name</span></div>
	<div class="item pagina-start item-2"><span class="slider-intro text-primary" >is the prommis</span></div>
	<div class="item pagina-start item-3"><span class="slider-intro text-primary">of standarts</span></div>
	<div class="item pagina-start item-4 "><span class="slider-intro text-primary">and quality</span></div>
</div>
</div>
</section>
<div class="container">
	<div class="row">
	<div class="col-xl-12 col-md-6 col-sm-12">
	<div class="owl-carousel owl-theme">
    <div class="item"><h4><img src="../images/blog-article/man.jpg"></h4></div>
    <div class="item"><h4>2</h4></div>
    <div class="item"><h4>3</h4></div>
	</div>	
</div>
</div>
<div class="py-5">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<div class="card">
						<img src="/images/blog-article/man.jpg" alt="Product Image">
						<div class="card-body">
							<h5>Demo Product</h5>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- ========================= SECTION INTRO ========================= -->
<section id="intro" class="section-intro pt-4">
	<div class="container-fluid intro">
		<div class="row d-flex" style="min-height:800px;">
		<div class="col-sm-12 col-lg-12 ">
		<div class="row row-cols-1 row-cols-md-2 g-4 d-flex justify-content-center align-items-center ">
		<header class="intro-wrap text-danger text-uppercase font-weight-bold">
				<h2 class="display-3 text-danger  text-uppercase font-weight-bold"> SALES NOW</h2>
				<p class="lead font-weight-bold">Up to 70%!!! </p>
  <div class="col d-flex justify-content-arround align-items-center">
 @foreach ($sections as $section)
 <a href="">
    <div class="card m-5"style="width: 28rem;">
      <div class="card-body">
        <h5 class="card-title text-uppercase fw-bold text-center">{{$section->name}}</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
	</a>
	@endforeach
  </div>	
				
				
			</header>  <!-- intro-wrap .// -->
			</div>
		</div> <!-- col.// -->
		</div> <!-- row.// -->
	</div> <!-- container .//  -->
	</section>
	<!-- ========================= SECTION INTRO END// ========================= -->
	
	<!-- ============== owl slide items  ============= -->

	
   
</div>	
</div>
</div>
</div>
@endsection

@section('scripts')
<script>
jQuery(function($){	
$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})
});


</script>
@endsection