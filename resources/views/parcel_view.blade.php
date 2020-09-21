@extends('admin.layout.master')
{{--  @dd(session()->all())  --}}
@section('content')
<div class="container">
        <div class="card">
            <div class="card-header">
                <div class="card-title">
                    <h4>Update Parcel</h4>
                </div>
            </div>
            <div class="card-body">
                @if(Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
              @endif
              @if(Session::has('error'))
              <div class="alert alert-danger">
                  {{ Session::get('error') }}
              </div>
            @endif
                <form action="{{ route('parcel.update',$parcel->id) }}" method="post">
                    @csrf
                    @method('PUT')
                <div class="row">
                    <div class="col-md-6">
                      <div class="form-group mb-2 ">
                          <label for="">Sender Name</label>
                          <input type="text" name="sender_name" class="form-control" value="{{$parcel->sender_name}}">
                      </div>
                      <div class="form-group mb-2">
                          <label for="">Sender Email</label>
                          <input type="email" name="sender_email" class="form-control" value="{{$parcel->sender_email}}">
                      </div>
                      <div class="form-group mb-2">
                          <label for="">Sender Phone Number</label>
                          <input type="text" name="sender_phone" class="form-control" value="{{$parcel->sender_phone}}">
                      </div>
                      <div class="form-group mb-2">
                          <label for="">Parcel Name</label>
                          <input type="text" name="parcel_name" class="form-control" value="{{$parcel->parcel_name}}">
                      </div>
                      <div class="form-group mb-2">
                          <label for="">Pickup Country</label>
                          <input type="text" name="pickup_location" class="form-control" value="{{$parcel->pickup_location}}">
                      </div>
                      <div class="form-group mb-2">
                        <label for="">Origin</label>
                        <input type="text" name="origin" class="form-control" value="{{$parcel->origin}}">
                    </div>
                    <div class="form-group mb-2">
                        <label for="">Package</label>
                        <input type="text" name="package" class="form-control" value="{{$parcel->package}}">
                    </div>
                    <div class="form-group mb-2">
                        <label for="">Carrier</label>
                        <input type="text" name="carrier" class="form-control" value="{{$parcel->carrier}}">
                    </div>
                    <div class="form-group mb-2">
                        <label for="">Shipment</label>
                        <input type="text" name="shipment" class="form-control" value="{{$parcel->shipment}}">
                    </div>
                    <div class="form-group mb-2">
                        <label for="">Weight</label>
                        <input type="number" name="weight" class="form-control" value="{{$parcel->weight}}">
                    </div>
                    </div>
                  <div class="col-md-6">
                      <div class="form-group mb-2">
                          <label for="">Receiver Name</label>
                          <input type="text" name="receiver_name" class="form-control" value="{{$parcel->receiver_name}}">
                      </div>
                      <div class="form-group mb-2">
                          <label for="">Receiver email</label>
                          <input type="email" name="receiver_email" class="form-control" value="{{$parcel->receiver_email}}">
                      </div>
                      <div class="form-group mb-2">
                          <label for="">Receiver Phone Number</label>
                          <input type="text" name="receiver_phone" class="form-control" value="{{$parcel->receiver_email}}">
                      </div>
                      <div class="form-group mb-2">
                          <label for="">Receiver Address</label>
                          <textarea type="text" rows="3" name="receiver_address" class="form-control">{!! $parcel->receiver_address !!}</textarea>
                      </div>
                      
                      <div class="form-group mb-2">
                          <label for="">Product</label>
                          <input type="text" name="product" class="form-control" value="{{$parcel->product}}">
                      </div>
                      <div class="form-group mb-2">
                          <label for="">Quantity</label>
                          <input type="number" name="quantity" class="form-control" value="{{$parcel->quantity}}">
                      </div>
                      <div class="form-group mb-2">
                          <label for="">PickUp Date</label>
                          <input type="date" name="pickup_date" class="form-control" value="{{$parcel->pickup_date}}">
                      </div>
                      <div class="form-group mb-2">
                          <label for="">PickUp Time</label>
                          <input type="time" name="pickup_time" class="form-control" value="{{$parcel->pickup_time}}">
                      </div>
                      <div class="form-group mb-2">
                          <label for="">Delivery Fee</label>
                          <input type="number" name="fee" class="form-control" value="{{$parcel->fee}}">
                      </div>
                      <div class="form-group mb-2">
                        <label for="">Status</label>
                        <input type="text" name="status" class="form-control" value="{{$parcel->status}}">
                    </div>
                      <div class="control-group">
                          <button type="submit" class="btn btn-primary">Update</button>
                      </div>
                  </div>
              </div>
            </form>
        </div>
    </div>
</div>
@endsection