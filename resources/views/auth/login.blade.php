@extends('admin.layout.master2')
@include('partials.header')
@include('partials.menu')
@php
    $append_ = env('MY_ASSET_URL');
@endphp
@section('content')
<div class="page-content d-flex align-items-center justify-content-center">

  <div class="row w-100 mx-0 auth-page">
    <div class="col-md-8 col-xl-6 mx-auto">
      <div class="card">
        <div class="row">
          <div class="col-md-4 pr-md-0">
            <div class="auth-left-wrapper" style="background-image: url({{ url($append_ .'assets2/img/hero/parcelbox.jpg') }})">

            </div>
          </div>
          <div class="col-md-8 pl-md-0">
            <div class="auth-form-wrapper px-4 py-5">
              <a href="/" class="noble-ui-logo d-block mb-2" style="color: #00BF6F">United Nations Airway Bill</a>
              {{--  <h5 class="text-muted font-weight-normal mb-4">Welcome back! Log in to your account.</h5>  --}}
              <form class="forms-sample" method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                  <label for="email" >Email address</label>
                  <input class="form-control" id="email" placeholder="Email" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                  @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="password" >Password</label>
                  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                  @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="form-check form-check-flat form-check-primary">
                  <label class="form-check-label" for="remember">
                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} class="form-check-input">
                        {{ __('Remember Me') }}
                  </label>
                </div>
                <div class="mt-3">
                    <button type="submit" style="background-color: #00BF6F;color:white" class="btn mr-2 mb-2 mb-md-0">
                        {{ __('Login') }}
                    </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
@endsection