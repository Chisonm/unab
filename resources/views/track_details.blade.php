@extends('layouts.app')
@section('title')
Tracking
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
                                    <h2>PARCEL INFORMATION</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>

            <div class="container">
            <h1>Tracking No:{{$parcel->track_no}}</h1>
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6" >
                        <div class="post-details3  mb-50" style="border: 1px solid green;">
                            <!-- Small Section Tittle -->
                           <div class="small-section-tittle">
                               <h4 style="font-weight: 900;" class="text-center">Sender`s Information</h4>
                           </div>
                          <ul>
                              <li>Sender Name :  <span class="text-wrap"> {{$parcel->sender_name}}</span></li>
                              <li>Pickup Location : <span>{{$parcel->pickup_location}}
                                <i class="fas fa-street-view" style="color: green;"></i></span></li>
                              <li>Email : <span>{{$parcel->sender_email}}</span></li>
                              <li>Parcel Name : <span>{{$parcel->parcel_name}}</span></li>
                              <li>Phone :  <span>{{$parcel->sender_phone}}</span></li>
                              <li>Application date : <span>{{$parcel->created_at}}</span></li>
                          </ul>
                       </div>
                        {{--  <div class="post-details4  mb-50">
                            <!-- Small Section Tittle -->
                           <div class="small-section-tittle">
                               <h4>Company Information</h4>
                           </div>
                              <span>Colorlib</span>
                              <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                            <ul>
                                <li>Name: <span>Colorlib </span></li>
                                <li>Web : <span> colorlib.com</span></li>
                                <li>Email: <span>carrier.colorlib@gmail.com</span></li>
                            </ul>
                       </div>  --}}
                    </div>

                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="post-details3  mb-50" style="border: 1px solid green;">
                            <!-- Small Section Tittle -->
                           <div class="small-section-tittle">
                               <h4 style="font-weight: 900;" class="text-center">Receiver`s Information</h4>
                           </div>
                          <ul>
                              <li>Receiver`s Name : <span class="text-wrap">{{$parcel->receiver_name}}</span></li>
                              <li>Current Location : <span>
                                   @foreach($parcel->logs as $log)
                                {{$log->curr_location}} <i class="fas fa-map-marker-alt" style="color: red;"></i>
                                @endforeach</span>
                            </li>
                              <li>Delivery point : <span> {{$parcel->receiver_address}}<i class="fas fa-map-marker-alt" style="color: green;"></i></span></li>
                        <li> Receiver`s Phone :  <span>{{$parcel->receiver_phone}}</span></li>
                          </ul>
                       </div>
                    </div>

                            @if(Session::has('error'))
                            <p>{{ Session::get('error')}}</p>
                            @endif
                </div>
        </div>
@endsection
