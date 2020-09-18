<!DOCTYPE html>
@php
    $append_ = env('MY_ASSET_URL');
@endphp
<html>
<head>
  <title>United Nations Airway Bill</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- CSRF Token -->
  <meta name="_token" content="{{ csrf_token() }}">
  
  {{--  <link rel="shortcut icon" href="{{ asset('/favicon.ico') }}">  --}}

  <!-- plugin css -->
<link rel="stylesheet" href="{{asset($append_ .'assets/fonts/feather-font/css/iconfont.css')}}">
<link rel="stylesheet" href="{{asset($append_ .'assets/plugins/perfect-scrollbar/perfect-scrollbar.css')}}">
  <!-- end plugin css -->

  @stack('plugin-styles')

  <!-- common css -->
  <link rel="stylesheet" href="{{asset($append_ .'css/app.css')}}">
  <!-- end common css -->

  @stack('style')
</head>
<body data-base-url="{{url('/')}}" class="loaded nimbus-is-editor settings-open sidebar-dark">
<script src="{{asset($append_ .'assets/js/spinner.js')}}"></script>


  <div class="main-wrapper" id="app">
    @include('admin.layout.sidebar')
    <div class="page-wrapper">
      @include('admin.layout.header')
      <div class="page-content">
        @yield('content')
      </div>
      @include('admin.layout.footer')
    </div>
  </div>

    <!-- base js -->
    <script src="{{asset($append_ .'js/app.js')}}"></script>
    <script src="{{asset($append_ .'assets/plugins/feather-icons/feather.min.js')}}"></script>
    <script src="{{asset($append_ .'assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <!-- end base js -->

    <!-- plugin js -->
    @stack('plugin-scripts')
    <!-- end plugin js -->

    <!-- common js -->
    <script src="{{asset($append_ .'assets/js/template.js')}}"></script>
    <!-- end common js -->

    @stack('custom-scripts')
</body>
</html>