{{--  @extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard <span style="float: right"><button class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#addparcel">Add Parcel</button></span></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                <div class="">
                    <table class="table responsive">
                        <thead>
                            <th>Parcel</th>
                            <th>Tracking No.</th>
                            <th>Sender</th>
                            <th>Receiver</th>
                            <th>Current Location</th>
                            <th>Pick-up</th>
                            <th>Drop-off</th>
                            <th>Fee</th>
                            <th>Status</th>
                            <th>Creation Date</th>
                            <th>Actions</th>
                        </thead>
                        <tbody>
                        @foreach($parcels as $parcel)
                        @php($curr_location = App\ParcelLog::where('parcel_id',$parcel->id)->orderby('created_at','desc')->first())
                            <tr>
                                <td> {{$parcel->parcel_name}} </td>
                                <td> {{$parcel->track_no}} </td>
                                <td> {{$parcel->sender_name}} </td>
                                <td> {{$parcel->receiver_name}} </td>
                                @if(empty($curr_location))
                                <td> Not Available </td>
                                @else
                                <td>{{$curr_location->curr_location}}</td>
                                @endif
                                <td> {{$parcel->pickup_location}} </td>
                                <td> {{$parcel->receiver_address}} </td>
                                <td> {{$parcel->fee}} </td>
                                <td> {{$parcel->status}} </td>
                                <td> {{$parcel->created_at->format('Y-M-d')}} </td>
                                <td>
                                    <a href="" class="btn btn-outline-success btn-sm">View</a>
                                    <a href="{{ route('parcel.show',$parcel) }}" class="btn btn-outline-info btn-sm">Log</a>
                                    <a href="" class="btn btn-outline-danger btn-sm" data-toggle="modal" data-target="#del-{{$parcel->id}}">Delete</a>

                                    <div class="modal fade bd-example-modal-md" id="del-{{$parcel->id}}">
                                        <div class="modal-dialog modal-dialog-centered modal-md" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header mb-3">
                                                    <h5 class="modal-title">Delete Parcel </h5>
                                                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button></h5>
                                                </div>
                                                <div class="modal-body">
                                                Are you sure? Deleting this would also delete all logs related to this item
                                                <form action="{{ route('parcel.destroy',$parcel)}}" method="post">@csrf @method('delete')
                                                    <div class="modal-footer">
                                                        <button class="btn btn-outline-info btn-sm" type="button" class="close" data-dismiss="modal">Cancel</button>
                                                        <button type="submit" class="btn btn-outline-danger btn-sm" >Proceed</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade bd-example-modal-lg" id="addparcel">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
          <div class="modal-content">
              <div class="modal-header mb-3">
                  <h5 class="modal-title">Add Parcel </h5>
                  <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button></h5>
              </div>
              <div class="modal-body">
                  <form action="{{ route('parcel.store') }}" method="post">@csrf
                  <div class="row">
                      <div class="col-md-6">
                        <div class="form-group mb-2 ">
                            <label for="">Sender Name</label>
                            <input type="text" name="sender_name" class="form-control" required value="{{old('sender_name')}}">
                        </div>
                        <div class="form-group mb-2">
                            <label for="">Sender Email</label>
                            <input type="email" name="sender_email" class="form-control" required value="{{old('sender_email')}}">
                        </div>
                        <div class="form-group mb-2">
                            <label for="">Sender Phone Number</label>
                            <input type="number" name="sender_phone" class="form-control" required value="{{old('sender_phone')}}">
                        </div>
                        <div class="form-group mb-2">
                            <label for="">Parcel Name</label>
                            <input type="text" name="parcel_name" class="form-control" required value="{{old('parcel_name')}}">
                        </div>
                        <div class="form-group mb-2">
                            <label for="">Pickup Country</label>
                            <input type="text" name="pickup_location" class="form-control" required value="{{old('pickup_location')}}">
                        </div>
                        <div class="form-group mb-2">
                            <label for="">Pickup State</label>
                            <input type="text" name="pickup_location" class="form-control" required value="{{old('pickup_location')}}">
                        </div>
                        <div class="form-group mb-2">
                            <label for="">Pickup Location</label>
                            <input type="text" name="pickup_location" class="form-control" required value="{{old('pickup_location')}}">
                        </div>
                      </div>

                    <div class="col-md-6">
                        <div class="form-group mb-2">
                            <label for="">Receiver Name</label>
                            <input type="text" name="receiver_name" class="form-control" required value="{{old('receiver_name')}}">
                        </div>
                        <div class="form-group mb-2">
                            <label for="">Receiver Phone Number</label>
                            <input type="text" name="receiver_phone" class="form-control" required value="{{old('receiver_phone')}}">
                        </div>
                        <div class="form-group mb-2">
                            <label for="">Receiver Address</label>
                            <textarea type="text" rows="3" name="receiver_address" class="form-control" required>{!! old('receiver_address') !!}</textarea>
                        </div>
                        <div class="form-group mb-2">
                            <label for="">Delivery Fee (NGN)</label>
                            <input type="number" name="fee" class="form-control" required value="{{old('fee')}}">
                        </div>
                        <div class="control-group">
                            <button type="submit" class="btn btn-blue">Proceed</button>
                        </div>
                    </div>
                </div>
              </div>
              </form>
          </div>
      </div>
  </div>

  <div class="modal fade bd-example-modal-lg" id="addparcel">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
          <div class="modal-content">
              <div class="modal-header mb-3">
                  <h5 class="modal-title">Add Parcel </h5>
                  <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button></h5>
              </div>
              <div class="modal-body">

          </div>
      </div>
  </div>


@endsection  --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>