@extends('layouts.app')
@section('title')
Welcome
@endsection
@section('content')
    

        <!-- slider Area Start-->
        <div class="slider-area ">
            <!-- Mobile Menu -->
            <div class="slider-active">
            <div class="single-slider slider-height d-flex align-items-center" data-background="{{asset('assets2/img/hero/parcelbox.jpg')}}" style="background-color: rgb(78, 221, 73);">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-lg-9 col-md-10">
                                <div class="hero__caption">
                                    <h1>Sending lots of parcels is much FASTER</h1>
                                    <p style="margin-top:0;" class="mt-0 font-weight-bolder" >We bring your goods safely to worldwide destinations with our great sea fright services.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Search Box -->
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card p-5">
                                    <h4 style="font-weight: 900">Track a Parcel</h4>
                                <form action="{{ route('track_order') }}" method="get">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-8 mb-2">
                                             <input type="text" class="form-control pr-5 w-100" name="track_no" placeholder="Exp:1234" required>
                                        </div>
                                        <div class="col-md-4">
                                            <button type="submit" class="btn w-100">Track</button>
                                        </div>
                                    </div>	
                                </form>	
                                @if(Session::has('error'))
                                <p>{{ Session::get('error')}}</p>
                                @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->
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
                            <img src="assets2/img/hero/parcelbox2.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Support Company End-->
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
                                    <img src="assets2/img/hero/parcelbox4.jpg" alt="">
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
                                    <img src="assets2/img/hero/parcelbox6.jpg" alt="">
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
                                    <img src="assets2/img/hero/parcelbox5.jpg" alt="">
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
        <!-- Online CV Area Start -->
         <div class="online-cv cv-bg section-overly pt-90 pb-120"  data-background="assets2/img/gallery/cv_bg.jpg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-10">
                        <div class="cv-caption text-center">
                            <p class="pera1">SEAMLESS INFASTRUCTURE</p>
                            <p class="pera2">Providing first class logistics services worldwide.</p>
                            <a href="/contact" class="border-btn2 border-btn4">Get a Quote</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Online CV Area End-->
        <!-- How  Apply Process Start-->
        <div class="apply-process-area apply-bg pt-150 pb-150 mt-5" >
            <div class="container">
                <!-- Section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle white-text text-center">
                            <span>Apply process</span>
                            <h2 style="color: rgb(71, 194, 71)"> How it works</h2>
                        </div>
                    </div>
                </div>
                <!-- Apply Process Caption -->
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-process text-center mb-30">
                            <div class="process-ion">
                                <span class="flaticon-search"></span>
                            </div>
                            <div class="process-cap">
                               <h5>1. Send a Quote</h5>
                               <p style="color: #fff;">All we need next is a few details about your parcel.  
                                You can book your collection up to 7 days in advance or as early as tomorrow.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-process text-center mb-30">
                            <div class="process-ion">
                                <span class="flaticon-curriculum-vitae"></span>
                            </div>
                            <div class="process-cap">
                               <h5>2. Choose standard delivery</h5>
                               <p style="color: #fff;"> Just book before 10pm and a courier will collect your parcel the next day, between 8am and 8pm.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-process text-center mb-30">
                            <div class="process-ion">
                                <span class="flaticon-tour"></span>
                            </div>
                            <div class="process-cap">
                               <h5>3. Parcel Delivery</h5>
                               <p style="color: #fff;">Just sit and relax while we get your parcel to you safely within the time you specified.</p>
                            </div>
                        </div>
                    </div>
                </div>
             </div>
        </div>
      
        <section class="contact-section">
            <div class="container">    
                <div class="row">
                    <div class="col-12">
                        <h2 class="contact-title" style="font-weight: 900;font-size:32px;">Send Us a Message</h2>
                    </div>
                    <div class="col-lg-8">
                        <form class="form-contact contact_form" action="{{route('contact.store')}}" method="post">
                            @csrf
                            <div class="row">
                                
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder="Enter Subject">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder=" Enter Message"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="button button-contactForm boxed-btn">Send</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-home"></i></span>
                            <div class="media-body">
                                <h3>United Kingdom.</h3>
                                <p>332 bakers street London United Kingdom W2U4BK.</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                            <div class="media-body">
                                <h3>+44 7520 629311</h3>
                                <p>Mon to Fri 9am to 6pm</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-email"></i></span>
                            <div class="media-body">
                                <h3>info@unitednationairwaybill.com</h3>
                                <p>Send us your query anytime!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection
