@extends('admin.layouts.master')

@section('header')

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css" />

@endsection

@section('content')
<!-- Start Status area -->
<div class="notika-status-area">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
        <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
          <div class="website-traffic-ctn">
            <h2><span class="counter">{{ $countEmployees }}</span></h2>
            <p>Total Employees</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
        <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
          <div class="website-traffic-ctn">
            <h2><span class="counter">{{ $countEquipments }}</span></h2>
            <p>Total Equipment</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
        <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30 dk-res-mg-t-30">
          <div class="website-traffic-ctn">
            <h2><span class="counter">{{ $countCrops }}</span></h2>
            <p>Total Crops</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
        <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30 dk-res-mg-t-30">
          <div class="website-traffic-ctn">
            <h2><span class="counter">{{ $todayMessages }}</span></h2>
            <p>Today Messages</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Status area-->
<!-- Start Sale Statistic area-->
<div class="sale-statistic-area">
  <div class="container">
    <div class="row">
      {{-- <div class="col-lg-6 col-md-8 col-sm-7 col-xs-12">
        <div class="sale-statistic-inner notika-shadow mg-tb-30">
          <div class="curved-inner-pro">
            <div class="curved-ctn">
              <h2>Sales Statistics</h2>
              <p>Vestibulum purus quam scelerisque, mollis nonummy metus</p>
            </div>
          </div>
          <div id="curved-line-chart" class="flot-chart-sts flot-chart"></div>
        </div>
      </div> --}}
      <div class="col-lg-12 col-md-4 col-sm-5 col-xs-12">
        <div class="statistic-right-area notika-shadow mg-tb-30 sm-res-mg-t-0">
          {!! $calendar_details->calendar() !!}
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Sale Statistic area-->
@endsection

@section('footer')

{!! $calendar_details->script() !!}

@endsection