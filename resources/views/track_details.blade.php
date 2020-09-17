<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .top-left {
                position: absolute;
                left: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 54px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
        <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}" defer></script>
        <script src="{{ asset('bootstrap/js/myscript.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('asset/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('asset/css/mycss.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="flex-center position-ref full-height">
        <a href="{{ url('/') }}" class="top-left links">Homepage</a>

            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Sender`s Information</h3>
                        <div class="row mb-2">
                            <div class="col-md-3">
                                <b>Sender Name:</b>
                            </div>
                            <div class="col-md-9 mt-2 mt-md-0">
                                {{$parcel->sender_name}}
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-3">
                                <b>Pickup Location:</b>
                            </div>
                            <div class="col-md-9 mt-2 mt-md-0">
                                {{$parcel->pickup_location}}
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <h3>Receiver`s Information</h3>
                        <div class="row mb-2">
                            <div class="col-md-3">
                                <b>Receiver`s Name:</b>
                            </div>
                            <div class="col-md-9 mt-2 mt-md-0">
                                {{$parcel->sender_name}}
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-3">
                                <b>Pickup Location:</b>
                            </div>
                            <div class="col-md-9 mt-2 mt-md-0">
                                {{$parcel->sender_name}}
                            </div>
                        </div>

                    </div>
                </div>
                <div class="row">
                    <h3>Parcel Information</h3>
                    <div class="row mb-2">
                        <div class="col-md-3">
                            <b>Pickup Location:</b>
                        </div>
                        <div class="col-md-9 mt-2 mt-md-0">
                            {{$parcel->sender_name}}
                        </div>
                    </div>
 
                    <div class="">
                        <div class="">
                            {{$parcel->parcel_name}}
                        </div>

                        <div class="links">
                           <p>Parcel Movement</p>
                            <p>
                                <b>Pickup point:  {{$parcel->pickup_location}} </b>
                            </p>
                            <p>
                                @foreach($parcel->logs as $log)
                                {{$log->curr_location}} >
                                @endforeach
                            </p>
                            <p>
                                <b>Delivery point:  {{$parcel->receiver_address}} </b>
                            </p>
                            @if(Session::has('error'))
                            <p>{{ Session::get('error')}}</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </body>
</html>
