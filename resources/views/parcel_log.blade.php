@extends('admin.layout.master')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header h4"> <b>{{$parcel->parcel_name}}</b> #{{$parcel->track_no}} <span style="float: right"><a href="{{ route('parcel.index') }}" class="btn btn-outline-dark btn-sm">Back to Parcels</a> 
                 <button class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#addparcel">Add Parcel Log</button></span></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                <div class="">
                    <table class="table responsive">
                        <thead>
                            <th>Added By</th>
                            <th>Previous Location</th>
                            <th>New Location</th>
                            <th>Update Time</th>
                            <th>Actions</th>
                        </thead>
                        <tbody>
                        @foreach($logs as $log)
                            <tr>
                                <td>{{$log->admin->name}}</td>
                                <td>{{$log->prev_location}}</td>
                                <td>{{$log->curr_location}}</td>
                                <td>{{ $log->created_at->format('Y M d , h:i:A')}}</td>
                                <td>
                                   
                                    <a href="" class="btn btn-outline-danger btn-sm" data-toggle="modal" data-target="#del-{{$log->id}}">Delete</a>
                                    
                                    <div class="modal fade bd-example-modal-md" id="del-{{$log->id}}">
                                        <div class="modal-dialog modal-dialog-centered modal-md" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header mb-3">
                                                    <h5 class="modal-title">Delete Parcel </h5>
                                                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button></h5>
                                                </div>
                                                <div class="modal-body">
                                                Are you sure? Deleting this would also delete all logs related to this item
                                                <form action="{{ route('delete_log',$log)}}" method="post">@csrf 
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


<div class="modal fade bd-example-modal-md" id="addparcel">
      <div class="modal-dialog modal-dialog-centered modal-md" role="document">
          <div class="modal-content">
              <div class="modal-header mb-3">
                  <h5 class="modal-title">Add Parcel Log </h5>
                  <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button></h5>
              </div>
              <div class="modal-body">
                  <form action="{{ route('add_log') }}" method="post">@csrf
                  <div class="row">
                      <div class="col-md-12">
                        <div class="form-group mb-2 ">
                        @php($curr_location = App\ParcelLog::where('parcel_id',$parcel->id)->orderby('created_at','desc')->first())
                            <label for="">Previous Location</label>
                            <input type="hidden" name="parcel_id" class="form-control" required value="{{$parcel->id}}">
                            @if(empty($curr_location->curr_location))
                            <input type="text" name="prev_location" class="form-control" required value="{{old('prev_location') ?? $parcel->pickup_location}}">
                            @else
                            <input type="text" name="prev_location" class="form-control" readonly required value="{{$curr_location->curr_location}}">
                            @endif
                        </div> 
                        <div class="form-group mb-2">
                            <label for="">New Location</label>
                            <input type="text" name="curr_location" class="form-control" required value="{{old('curr_location')}}">
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
