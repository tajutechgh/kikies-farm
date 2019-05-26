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
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="breadcomb-wp">
                <div class="breadcomb-icon">
                  <i class="fa fa-envelope"></i>
                </div>
                <div class="breadcomb-ctn"><br>
                  <h2>View Message</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Breadcomb area End-->
<!-- Inbox area Start-->
<div class="inbox-area">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-9 col-sm-9 col-xs-12">
        <div class="view-mail-list sm-res-mg-t-30">
          <div class="mail-ads mail-vw-ph">
            <p class="first-ph"><b>Subject:</b> {{ $message->title }}</p>
            <p><b>Conatct:</b> {{ $message->phone }}</p>
            <p class="last-ph"><b>Date:</b> {{Carbon\Carbon::parse($message->created_at)->format('d-m-y')}}</p>
          </div>
          <div class="view-mail-atn">
            <p>{{ $message->message }}</p>
          </div><br>
          <div align="center">
            <a href="{{ route('message.index') }}" class="btn btn-success btn-xs">Go Back</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Inbox area End-->
@endsection

@section('footer')

@endsection