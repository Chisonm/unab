@extends('layouts.app')
@section('title')
Track
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
                                    <h2>TRACK PARCEL</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            <div class="container mb-5">

                {{--  <div class="row justify-content-center">

                </div>  --}}
                <!-- Search Box -->
                <div class="row md-5 justify-content-center">
                    <div class="col-xl-10">
                        <div class="card p-5">
                            <h4 style="font-weight: 900">Track a Parcel</h4>
                        <form action="{{ route('track_order') }}" method="get">
                            @csrf
                            <div class="row">
                                <div class="col-md-8 col-lg-9 mb-2">
                                     <input type="text" class="form-control pr-5 w-100" name="track_no" placeholder="Exp:1234" required>
                                </div>
                                <div class="col-md-4 col-lg-3">
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
@endsection
