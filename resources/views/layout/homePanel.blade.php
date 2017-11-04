<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
    	<meta name="author" content="">

        <title>Panel Ligas de Domino</title>

        <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('css/style.default.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('css/grasp_mobile_progress_circle-1.0.0.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/custom.css')}}">

        <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}">
		

    </head>
    <body>


    @yield('contentPanel')


    <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('js/tether.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/jquery.cookie.js')}}"></script>
    <script src="{{asset('js/grasp_mobile_progress_circle-1.0.0.min.js')}}"></script>
    <script src="{{asset('js/jquery.nicescroll.min.js')}}"></script>
    <script src="{{asset('js/jquery.validate.min.js')}}"></script>
    <script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js')}}"></script>
    <script src="{{asset('js/charts-home.js')}}"></script>
    <script src="{{asset('js/front.js')}}"></script>

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID.-->
    <!---->
    <script>
      (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
      function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
      e=o.createElement(i);r=o.getElementsByTagName(i)[0];
      e.src='//www.google-analytics.com/analytics.js';
      r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
      ga('create','UA-XXXXX-X');ga('send','pageview');
    </script>

    </body>
</html>