<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="author" content="Bootstrap-ecommerce">

<title>@yield('hometitle','Online Clothes Market')</title>

<link rel="shortcut icon" type="image/x-icon" href="images/favicom1.png">

<!-- Bootstrap5 files-->
<link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

<!-- Custom styles for this template -->
<link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->

<!--My styles-->
<link rel="stylesheet" type="text/css" href="/css/style.css">

<!-- plugin: owl carousel  -->
<link href="/css/owl.carousel.min.css" rel="stylesheet">
<link href="/css/owl.theme.default.min.css" rel="stylesheet">

</head>
<body>

@include('layouts.front_header')
@yield('content')
<!-- ============== owl slide items 2 .end // ============= -->

<!-- ========================= FOOTER ========================= -->
@include('layouts.front_footer')
<!-- ========================= FOOTER END // ========================= -->
<script src="/js/bootstrap.bundle.min.js" type="text/javascript"></script>
<script src="https://kit.fontawesome.com/1ad2e98449.js" crossorigin="anonymous"></script>
<script src="/js/owl.carousel.min.js"></script>
<script src="/js/jquery-3.6.0.min.js"></script>
@yield('scripts')

</body>
</html>
