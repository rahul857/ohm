<!doctype html>
<html lang="en">

<head>
@notifyCss

    <title>Old Age Home &mdash; Website Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="{{url('/frontend')}}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{url('/frontend')}}/css/jquery-ui.css">
    <link rel="stylesheet" href="{{url('/frontend')}}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{url('/frontend')}}/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{url('/frontend')}}/css/owl.theme.default.min.css">

    <link rel="stylesheet" href="{{url('/frontend')}}/css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="{{url('/frontend')}}/css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="{{url('/frontend')}}/fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="{{url('/frontend')}}/css/aos.css">

    <link rel="stylesheet" href="{{url('/frontend')}}/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
<x-notify::notify />

@include('Frontend.Partials.Header')





<!-- MAIN -->



        @yield('content')



       
        @include('Frontend.Partials.Footer')




                
            
       

    <script src="{{url('/frontend')}}/js/jquery-3.3.1.min.js"></script>
    <script src="{{url('/frontend')}}/js/jquery-ui.js"></script>
    <script src="{{url('/frontend')}}/js/popper.min.js"></script>
    <script src="{{url('/frontend')}}/js/bootstrap.min.js"></script>
    <script src="{{url('/frontend')}}/js/owl.carousel.min.js"></script>
    <script src="{{url('/frontend')}}/js/jquery.countdown.min.js"></script>
    <script src="{{url('/frontend')}}/js/jquery.easing.1.3.js"></script>
    <script src="{{url('/frontend')}}/js/aos.js"></script>
    <script src="{{url('/frontend')}}/js/jquery.waypoints.min.js"></script>
    <script src="{{url('/frontend')}}/js/jquery.animateNumber.min.js"></script>
    <script src="{{url('/frontend')}}/js/jquery.fancybox.min.js"></script>
    <script src="{{url('/frontend')}}/js/jquery.sticky.js"></script>
    <script src="{{url('/frontend')}}/js/isotope.pkgd.min.js"></script>


    <script src="{{url('/frontend')}}/js/main.js"></script>


    @notifyJs


    <script>
    (function (window, document) {
        var loader = function () {
            var script = document.createElement("script"), tag = document.getElementsByTagName("script")[0];
            script.src = "https://sandbox.sslcommerz.com/embed.min.js?" + Math.random().toString(36).substring(7);
            tag.parentNode.insertBefore(script, tag);
        };

        window.addEventListener ? window.addEventListener("load", loader, false) : window.attachEvent("onload", loader);
    })(window, document);
</script>
</body>

</html>