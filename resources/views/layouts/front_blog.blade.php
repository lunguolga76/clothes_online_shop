<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="author" content="Bootstrap-ecommerce">

<title>@yield('hometitle','Online Clothes Market')</title>

<link rel="shortcut icon" type="image/x-icon" href="images/favicom1.png">

<!-- Bootstrap5 files-->
<script src="/js/bootstrap.bundle.min.js" type="text/javascript"></script>
<link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

<!-- Font awesome 5 -->
<link href="/fonts/fontawesome-all.min.css" type="text/css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="blog.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/1ad2e98449.js" crossorigin="anonymous"></script>

<!-- custom style -->
<link href="/css/ui.css" rel="stylesheet" type="text/css"/>
<link href="/css/responsive.css" rel="stylesheet" media="only screen and (max-width: 1200px)" />
<!--My styles-->
<link rel="stylesheet" type="text/css" href="/css/style.css">

<!-- custom javascript -->
<script src="js/script.js" type="text/javascript"></script>

<script type="text/javascript">
/// some script

// jquery ready start
$(document).ready(function() {
	// jQuery code

}); 
// jquery end
</script>
</head>
<body>

@include('layouts.front_header')
<section class="section lb">
            <div class="container">
                <div class="row">
                                     
                    @include('layouts.front_blog_sidebar')
                


                
                  @yield('content')
                
            </div><!-- end row -->
        </div><!-- end container -->
    </section>
<!-- ========================= FOOTER ========================= -->
@include('layouts.front_footer')
<!-- ========================= FOOTER END // ========================= -->


</body>
</html>
