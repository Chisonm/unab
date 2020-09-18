<!doctype html>
@php
    $append_ = env('MY_ASSET_URL');
@endphp
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
           <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>@yield('title')  Unitednation Airwaybill</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

        <!-- CSS here -->
            <link rel="stylesheet" href="{{asset($append_ .'assets2/css/bootstrap.min.css')}}">
            <link rel="stylesheet" href="{{asset($append_ .'assets2/css/owl.carousel.min.css')}}">
            <link rel="stylesheet" href="{{asset($append_ .'assets2/css/flaticon.css')}}">
            <link rel="stylesheet" href="{{asset($append_ .'assets2/css/price_rangs.css')}}">
            <link rel="stylesheet" href="{{asset($append_ .'assets2/css/slicknav.css')}}">
            <link rel="stylesheet" href="{{asset($append_ .'assets2/css/animate.min.css')}}">
            <link rel="stylesheet" href="{{asset($append_ .'assets2/css/magnific-popup.css')}}">
            <link rel="stylesheet" href="{{asset($append_ .'assets2/css/fontawesome-all.min.css')}}">
            <link rel="stylesheet" href="{{asset($append_ .'assets2/css/themify-icons.css')}}">
            <link rel="stylesheet" href="{{asset($append_ .'assets2/css/slick.css')}}">
            <link rel="stylesheet" href="{{asset($append_ .'assets2/css/nice-select.css')}}">
            <link rel="stylesheet" href="{{asset($append_ .'assets2/css/style.css')}}">
            
   </head>
<body>
    @include('partials.menu')
    <main>
       @yield('content') 
    </main>
    @include('partials.footer')
</body>
</html>
