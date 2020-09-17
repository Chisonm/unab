@extends('layout.master')

@section('content')
<div class="row">
  <div class="col-md-12 grid-margin">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title">Flot Charts</h6>
        <p>Flot is a pure JavaScript plotting library for jQuery, with a focus on simple usage, attractive looks and interactive features. Read the <a href="http://www.flotcharts.org/" target="_blank"> Official Flot Documentation</a> for a full list of instructions and other options.</p>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-xl-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title">Line chart</h6>
        <div class="flot-chart-example-wrapper">
          <div class="flot-chart-example" id="flotLine"></div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title">Bar chart</h6>
        <div class="flot-chart-example-wrapper">
          <div class="flot-chart-example" id="flotBar"></div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-xl-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title">Area chart</h6>
        <div class="flot-chart-example-wrapper">
          <div class="flot-chart-example" id="flotArea"></div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title">Pie chart</h6>
        <div class="flot-chart-example-wrapper">
          <div class="flot-chart-example" id="flotPie"></div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-xl-12">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title">Real-Time chart</h6>
        <div class="flot-chart-example-wrapper">
          <div class="flot-chart-example" id="flotRealTime"></div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@push('plugin-scripts')
  {!! Html::script('/assets/plugins/jquery.flot/jquery.flot.js') !!}
  {!! Html::script('/assets/plugins/jquery.flot/jquery.flot.resize.js') !!}
  {!! Html::script('/assets/plugins/jquery.flot/jquery.flot.pie.js') !!}
  {!! Html::script('/assets/plugins/jquery.flot/jquery.flot.categories.js') !!}
@endpush

@push('custom-scripts')
  {!! Html::script('/assets/js/jquery.flot.js') !!}
@endpush