<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="lab, onepage, creative, html">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="{{asset("img/favicon.ico")}}" rel="shortcut icon"/>

    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,700|Roboto:300,400,700" rel="stylesheet">

    <link rel="stylesheet" href="{{asset("css/bootstrap.min.css")}}"/>
	<link rel="stylesheet" href="{{asset("css/font-awesome.min.css")}}"/>
	<link rel="stylesheet" href="{{asset("css/flaticon.css")}}"/>
	<link rel="stylesheet" href="{{asset("css/magnific-popup.css")}}"/>
	<link rel="stylesheet" href="{{asset("css/owl.carousel.css")}}"/>
	<link rel="stylesheet" href="{{asset("css/style.css")}}"/>
    <title>template</title>
</head>
<body>
    @include('partials.navbar')
    @yield('content')
    @include('partials.footer')
    


    <script src="{{asset("js/jquery-2.1.4.min.js")}}"></script>
	<script src="{{asset("js/bootstrap.min.js")}}"></script>
	<script src="{{asset("js/magnific-popup.min.js")}}"></script>
	<script src="{{asset("js/owl.carousel.min.js")}}"></script>
	<script src="{{asset("js/circle-progress.min.js")}}"></script>
	<script src="{{asset("js/main.js")}}"></script>
</body>
</html>