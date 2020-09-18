@extends('layouts.app')
@section('title')
Services
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
                                    <h2>Our Services</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            <div class="container mb-5">

               <!-- Blog Area Start -->
          <div class="home-blog-area blog-h-padding">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle text-center">
                            <h2>Our Services</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-4">
                        <div class="home-blog-single mb-30">
                            <div class="blog-img-cap">
                                <div class="blog-img">
                                    <img src=" {{asset($append_ .'assets2/img/hero/parcelbox4.jpg')}}" alt="">
                                    <!-- Blog date -->
                                </div>
                                <div class="blog-cap">
                                    <p>| Cargo</p>
                                    <h2 style="font-weight: 900">LARGE PROJECTS</h2>
                                    <p>we work with more than 18,000 friendly local couriers to offer an easy and affordable door to door parcel delivery service. That means we can collect your parcel from almost any UK address, including workplaces.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4">
                        <div class="home-blog-single mb-30">
                            <div class="blog-img-cap">
                                <div class="blog-img">
                                    <img src=" {{asset($append_ .'assets2/img/hero/parcelbox6.jpg')}}" alt="">
                                </div>
                                <div class="blog-cap">
                                    <p>| Air-Freight</p>
                                    <h3 style="font-weight: 900">INTERNATIONAL AIR FREIGHT</h3>
                                    <p>We provide full supply chain management package including cost effective and fast sea freight. You can also combine this package with other means of transportation.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4">
                        <div class="home-blog-single mb-30">
                            <div class="blog-img-cap">
                                <div class="blog-img">
                                    <img src=" {{asset($append_ .'assets2/img/hero/parcelbox5.jpg')}}" alt="">
                                </div>
                                <div class="blog-cap">
                                    <p>| Road</p>
                                    <h3 style="font-weight: 900">GROUND SHIPPING</h3>
                                    <p>We provide delivery services for most of the overland industry specific logistic solutions like pharmaceutical logistics, retail and automotive logistics by train or road.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog Area End -->            
@endsection