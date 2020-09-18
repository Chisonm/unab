@extends('layouts.app')
@section('title')
About
@endsection
@php
    $append_ = env('MY_ASSET_URL');
@endphp
@section('content')
<div class="slider-area mb-5">
    <div class="single-slider section-overly slider-height2 d-flex align-items-center" data-background=" {{asset($append_ .'assets2/img/hero/parcelbox.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap text-center">
                        <h2>About Us</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
<div class="container mb-5">
              <!-- Support Company Start-->
<div class="support-company-area support-padding fix mt-5">
<div class="container">
    <div class="row align-items-center">
        <div class="col-xl-6 col-lg-6">
            <div class="right-caption">
                <!-- Section Tittle -->
                <div class="section-tittle section-tittle2">
                    <span>What we are doing</span>
                    <h2 style="font-weight: 900;font-size:35px;">We’re TRUSTED by our customers & retailers</h2>
                </div>
                <div class="support-caption">
                    <p class="pera-top">We cover different industry sectors, from food and beverage, chemical, retail, durable goods and more. Check the full list...</p>
                    <p>We have a dedicated team of friendly helpful staff ready and waiting to receive your call and to ensure that your urgent consignments arrive safely as planned, time and time again.</p>
                    <a href="/track-parcel" class="btn post-btn">Track a parcel</a>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-lg-6">
            <div class="support-location-img">
                <img src=" {{asset($append_ .'assets2/img/hero/parcelbox2.jpg')}}" alt="">
            </div>
        </div>
    </div>
</div>
</div>
<!-- Support Company End-->
</div>
@endsection