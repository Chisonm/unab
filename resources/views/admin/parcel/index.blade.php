@extends('admin.layout.master')
@push('plugin-styles')
<link rel="stylesheet" href="{{asset('/assets/plugins/datatables-net/dataTables.bootstrap4.css')}}">
@endpush

@section('content')
<nav class="page-breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/admin/dashboard">Dashboard</a></li>
    <li class="breadcrumb-item active" aria-current="page">parcels</li>
  </ol>
</nav>

<div class="row">
  <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title">Parcels <span style="float: right"><button class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#addparcel">Add Parcel</button></span></h6>
        <div class="table-responsive">
          <table id="dataTableExample" class="table">
            <thead>
              <tr>
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
              </tr>
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
                                    <a href="{{ route('parcel.edit',$parcel->id) }}" class="btn btn-outline-success btn-sm">View</a>
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
<div class="modal fade bd-example-modal-lg" id="addparcel">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header mb-3">
                <h5 class="modal-title">Add Parcel </h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button></h5>
            </div>
            <div class="modal-body">
                <form action="{{ route('parcel.store') }}" method="post">
                    @csrf
                <div class="row">
                    <div class="col-md-6">
                      <div class="form-group mb-2 ">
                          <label for="">Sender Name</label>
                          <input type="text" name="sender_name" class="form-control" value="{{old('sender_name')}}">
                      </div>
                      <div class="form-group mb-2">
                          <label for="">Sender Email</label>
                          <input type="email" name="sender_email" class="form-control" value="{{old('sender_email')}}">
                      </div>
                      <div class="form-group mb-2">
                          <label for="">Sender Phone Number</label>
                          <input type="text" name="sender_phone" class="form-control" value="{{old('sender_phone')}}">
                      </div>
                      <div class="form-group mb-2">
                          <label for="">Parcel Name</label>
                          <input type="text" name="parcel_name" class="form-control" value="{{old('parcel_name')}}">
                      </div>
                      <div class="form-group mb-2">
                          <label for="">Pickup Country</label>
                          <input type="text" name="pickup_location" class="form-control" value="{{old('pickup_location')}}">
                      </div>
                      <div class="form-group mb-2">
                          <label for="">Package</label>
                          <input type="text" name="package" class="form-control" value="{{old('package')}}">
                      </div>
                      <div class="form-group mb-2">
                          <label for="">Carrier</label>
                          <input type="text" name="carrier" class="form-control" value="{{old('carrier')}}">
                      </div>
                      <div class="form-group mb-2">
                          <label for="">Shipment</label>
                          <input type="text" name="shipment" class="form-control" value="{{old('shipment')}}">
                      </div>
                      <div class="form-group mb-2">
                          <label for="">Weight</label>
                          <input type="number" name="weight" class="form-control" value="{{old('weight')}}">
                      </div>
                    </div>

                  <div class="col-md-6">
                      <div class="form-group mb-2">
                          <label for="">Receiver Name</label>
                          <input type="text" name="receiver_name" class="form-control" value="{{old('receiver_name')}}">
                      </div>
                      <div class="form-group mb-2">
                          <label for="">Receiver email</label>
                          <input type="email" name="receiver_email" class="form-control" value="{{old('receiver_email')}}">
                      </div>
                      <div class="form-group mb-2">
                          <label for="">Receiver Phone Number</label>
                          <input type="text" name="receiver_phone" class="form-control" value="{{old('receiver_phone')}}">
                      </div>
                      <div class="form-group mb-2">
                          <label for="">Receiver Address</label>
                          <textarea type="text" rows="3" name="receiver_address" class="form-control">{!! old('receiver_address') !!}</textarea>
                      </div>
                      <div class="form-group mb-2">
                          <label for="">Origin</label>
                          <input type="text" name="origin" class="form-control" value="{{old('origin')}}">
                      </div>
                      <div class="form-group mb-2">
                          <label for="">Product</label>
                          <input type="text" name="product" class="form-control" value="{{old('product')}}">
                      </div>
                      <div class="form-group mb-2">
                          <label for="">Quantity</label>
                          <input type="number" name="quantity" class="form-control" value="{{old('quantity')}}">
                      </div>
                      <div class="form-group mb-2">
                          <label for="">PickUp Date</label>
                          <input type="date" name="pickup_date" class="form-control" value="{{old('pickup_date')}}">
                      </div>
                      <div class="form-group mb-2">
                          <label for="">PickUp Time</label>
                          <input type="time" name="pickup_time" class="form-control" value="{{old('pickup_time')}}">
                      </div>
                      <div class="form-group mb-2">
                          <label for="">Delivery Fee (NGN)</label>
                          <input type="number" name="fee" class="form-control" value="{{old('fee')}}">
                      </div>
                      <div class="control-group">
                          <button type="submit" class="btn btn-primary">Proceed</button>
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
@endsection

@push('plugin-scripts')
<script src="{{asset('/assets/plugins/datatables-net/jquery.dataTables.js')}}"></script>
<script src="{{asset('/assets/plugins/datatables-net-bs4/dataTables.bootstrap4.js')}}"></script>
@endpush

@push('custom-scripts')
<script src="{{asset('/assets/js/data-table.js')}}"></script>
@endpush