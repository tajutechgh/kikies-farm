@extends('admin.layouts.master')

@section('header')

@endsection

@section('content')
<!-- Breadcomb area Start-->
<div class="breadcomb-area">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="breadcomb-list">
          <div class="row">
            <form method="post" action="{{ route('searchPlantingReport') }}">
              {{csrf_field()}}
              <label>Start Date:</label>
              <input type="date" name="startdate" required="">
              <label>End Date:</label>
              <input type="date" name="enddate" required="">
              <button class="btn-success btn-xs">Generate Report</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Breadcomb area End-->
<!-- Table area Start-->
<div class="normal-table-area">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="normal-table-list">
          <div class="table-responsive">
            @if (isset($details))
            <table class="table table-striped">
              <thead>
                <th>Plant Name</th>
                <th>Planting Date</th>
              </thead>
              <tbody>
                @foreach ($details as $planting)
                <tr>
                  <td>{{$planting->name}}</td>
                  <td>{{$planting->planting_date}}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
            @elseif(isset($message))
            <h3>{{$message}}</h3>
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Table area End-->
@endsection

@section('footer')

@endsection