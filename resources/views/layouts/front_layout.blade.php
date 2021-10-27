<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="author" content="Bootstrap-ecommerce">

<title>@yield('hometitle','Online Clothes Market')</title>

    <link href="/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <!--jQuery(necessary for Bootstrap's JavaScript plugins)-->
    <script src="/js/jquery-1.11.0.min.js"></script>
    <!--Custom-Theme-files-->
    <!--theme-style-->
    <link href="/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="/css/flexslider.css">
    <!--//theme-style-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- Font awesome 5 -->
    <link href="../fontawesome/css/fontawesome-all.min.css" type="text/css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/1ad2e98449.js" crossorigin="anonymous"></script>

    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!--start-menu-->
    <script src="/js/simpleCart.min.js"> </script>
    <link rel="stylesheet" href="/css/owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/owlcarousel/owl.theme.default.min.css">
    <link href="/css/memenu.css" rel="stylesheet" type="text/css" media="all" />
    <script type="text/javascript" src="/js/memenu.js"></script>
    <script>$(document).ready(function(){$(".memenu").memenu();});
    </script>
    <!--dropdown-->
    <script src="/js/jquery.easydropdown.js"></script>
    <script src="/js/imagezoom.js"></script>
    <script src="/js/jquery.flexslider.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</head>
<body>

@include('layouts.front_header')
@yield('content')
<!-- ============== owl slide items 2 .end // ============= -->

<!-- ========================= FOOTER ========================= -->
@include('layouts.front_footer')
<!-- ========================= FOOTER END // ========================= -->


</body>
</html>
