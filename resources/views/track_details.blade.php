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

            <div class="container mb-5">
                <h1 class="mb-3">Tracking No: <b style="font-weight: 900">{{$parcel->track_no}}</b></h1>
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6" >
                        <div class="post-details3  mb-50" style="border: 1px solid green;">
                            <!-- Small Section Tittle -->
                           <div class="small-section-tittle">
                               <h4 style="font-weight: 900;" class="text-center">Sender`s Information</h4>
                           </div>
                          <ul>
                              <li>Name :  <span class="text-wrap"> {{$parcel->sender_name}}</span></li>
                              <li>Email : <span>{{$parcel->sender_email}}</span></li>
                              <li>Parcel Name : <span>{{$parcel->parcel_name}}</span></li>
                              <li>Phone :  <span>{{$parcel->sender_phone}}</span></li>
                              <li>Application date : <span>{{$parcel->created_at->format('Y-M-d')}}</span></li>
                          </ul>
                       </div>
                
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
                              <li> <span class="mr-3">Address:</span>  <span> {{$parcel->receiver_address}}<i class="fas fa-map-marker-alt ml-1" style="color: green;"></i></span></li>
                        <li> Receiver`s Phone :  <span>{{$parcel->receiver_phone}}</span></li>
                          </ul>
                       </div>
                       <div class="post-details4  mb-50">
                            <!-- Small Section Tittle -->
                           <div class="small-section-tittle">
                               <h4 style="font-weight: 900;font-size:42px;">Shipment Information</h4>
                           </div>
                        <span >Shipment Status : <small style="color: chartreuse;font-weight:bolder;font-size:20px;">{{$parcel->status}}</small>...</span>
                        <h5>NOTE:</h5>
                              <p>CUSTOMERS ARE ADVICE TO FOLLOW INSTRUSTIONS.</p>
                              <div class="row">
                                  <div class="col-md-6">
                                    <ul>
                                        <li>Origin: <span>{{$parcel->origin}} </span></li>
                                        <li>Package : <span> {{$parcel->package}}</span></li>
                                        <li>Status: <span>{{$parcel->status}}</span></li>
                                        <li>Destination: <span>{{$parcel->pickup_location}}
                                            <i class="fas fa-street-view" style="color: green;"></i></span></li>
                                        <li>Carrier : <span> {{$parcel->carrier}}</span></li>
                                        <li>Type Of Shipment: <span>{{$parcel->shipment}}</span></li>
                                        <li>Pick-Up Time: <span>{{ date('h:i:A', strtotime($parcel->pickup_time)) }}</span></li>
                                    </ul> 
                                  </div>
                                  <div class="col-md-6">
                                    <ul>
                                        <li>Carrier Ref No : <span>{{$parcel->track_no}} </span></li>
                                        <li>Product : <span> {{$parcel->product}}</span></li>
                                        <li>Quantity: <span>{{$parcel->quantity}}</span></li>
                                        <li>Weight: <span>{{$parcel->weight}}KG</span></li>
                                        <li>Delivery Date: <span>{{$parcel->pickup_date}} </span></li>
                                        <li>Departure-time: <span class="text-wrap">{{$parcel->created_at->format('Y-M-d') }}</span></li>
                                        <li>Pick-Up Date: <span>{{$parcel->pickup_date}}</span></li>
                                    </ul> 
                                  </div>
                              </div>
                            
                       </div>
                    </div>
               
    
                            @if(Session::has('error'))
                            <p>{{ Session::get('error')}}</p>
                            @endif
                </div>
                    <div class="row justify-content-center">
                    <div class="col-xl-10 col-lg-10 col-md-12 " >
                        <div class="post-details3  mb-50 bg-white">
                            <!-- Small Section Tittle -->
                        <div class="small-section-tittle">
                            <h4 style="font-weight: 900;" class="text-center">Shipment History</h4>
                        </div>
                        <ul>
                            <li>Date :  <span class="text-wrap"> {{$parcel->created_at}}</span></li>
                            <li>Time: <span>{{$parcel->updated_at}}</span></li>
                            <li>Location : <span>{{$parcel->pickup_location}}</span></li>
                            <li>Status : <span>{{$parcel->status}}</span></li>
                            <li>Remarks :  <span>{{$parcel->carrier}} Company</span></li>
                        </ul>
                    </div>
        
            </div>
        </div>
    </div>
@endsection
