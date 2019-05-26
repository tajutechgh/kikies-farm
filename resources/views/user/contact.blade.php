@extends('user.layouts.master')

@section('main-content')

<!--Page Title-->
<section class="page-title" style="background-image:url('{{asset('user/images/background/8.jpg')}}');">
  <div class="auto-container">
    <div class="inner-box">
      <h1>Contact Us</h1>
      <ul class="bread-crumb">
        <li><a href="{{ route('index') }}">Home</a></li>
        <li>Contact</li>
      </ul>
    </div>
  </div>
</section>
<!--End Page Title-->

<!--Contact Section-->
<!--Contact Form Section-->
<section class="contact-form-section">
  <div class="auto-container">
    <div class="row clearfix">

      <div class="column col-md-7 col-sm-12 col-xs-12">
        <h2>Send Us A Message</h2>
        <!-- Contact Form -->
        <div class="contact-form">
          @include('include.message')
          <!--Contact Form-->
          <form method="post" action="{{ route('contact.store') }}">
            @csrf
            <div class="row clearfix">
              <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                <input type="text" name="name" placeholder="Full Name">
              </div>

              <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                <input type="text" name="phone" placeholder="Phone Number">
              </div>

              <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                <input type="text" name="title" placeholder="Title">
              </div>

              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                <textarea name="message" placeholder="Message"></textarea>
              </div>

              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                <button class="theme-btn btn-style-one" type="submit" name="submit-form">Send Message</button>
              </div>

            </div>
          </form>

        </div>
        <!--End Comment Form -->
      </div>

      <div class="column col-md-5 col-sm-12 col-xs-12">
        <h2>Contact Details</h2>
        <div class="text">You can also contact us through the contact details provided below.</div>
        <!--Contact Info Detail-->
        <ul class="contact-info-detail">
          <li>
            <div class="icon"><span class="flaticon-placeholder"></span></div>
            <h4>Address</h4>Tsito,Volta Region
          </li>
          <li>
            <div class="icon"><span class="flaticon-interface"></span></div>
            <h4>Mail</h4>kikiesfarm@gmail.com
          </li>
          <li>
            <div class="icon"><span class="flaticon-technology"></span></div>
            <h4>Phone</h4>0304568798
          </li>
        </ul>

      </div>

    </div>
  </div>

</section>
<!--End Contact Section-->

@endsection