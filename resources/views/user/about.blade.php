@extends('user.layouts.master')

@section('main-content')

<!--Page Title-->
<section class="page-title" style="background-image:url('images/background/8.jpg');">
  <div class="auto-container">
    <div class="inner-box">
      <h1>about us</h1>
      <ul class="bread-crumb">
        <li><a href="{{ route('index') }}">Home</a></li>
        <li>About</li>
      </ul>
    </div>
  </div>
</section>
<!--End Page Title-->

<!--Experiance Section-->
<section class="experiance-section" style="background-image:url('images/background/1.png');">
  <div class="auto-container">
    <div class="inner-content">
      <!--Sec Title-->
      <div class="sec-title centered">
        <div class="icon-box"></div>
        <div class="title">How Our Story Began</div>
        <h2>Over 5 Years Of Experience</h2>
      </div>
      <div class="text-content">
        <div class="text">
          <p align="center">
          Kikies Farm is a fast growing company in Ghana whose head office is situated at Tsito in the Volta Region of Ghana. The Chief 	Executive Director of Kikies Farm is known as Mr. Richmond Tetteh who has a deep love for farming. Kikies Farm has been in existence for the past 5 years but was registered with the Registrar General Department in 2017. <br>
          Kikies Farm are mainly into production of Fresh Fruits (mango, orange, banana etc.), Fresh Vegetables (pepper, tomato, okra etc.). Kikies Farm over the years has been a major supplier of fruits to Aqua Fresh Ltd, Tiwombi wild fruit company Ltd, and several companies. The services of this company are in high demand.
          </p>
        </div>
        {{-- <a href="about.html#" class="theme-btn btn-style-one">discover</a> --}}
      </div>
    </div>
  </div>
</section>
<!--End Experiance Section-->

<!--Call To Action Section-->
<section class="call-to-action-section" style="background-image:url('images/background/2.jpg');">
  <div class="auto-container">
    <h3>Healthy Living</h3>
    <h2>A Healthy Outside Starts From Inside</h2>
    {{-- <a href="shop.html" class="theme-btn btn-style-one">see all Products</a> --}}
  </div>
</section>
<!--End Call To Action Section-->

<!--Farmer Section-->
<section class="farmer-section">
  <div class="auto-container">
    <span class="right-image"><img src="images/resource/product-middle-image.jpg" alt="" /></span>
    <span class="left-image"><img src="images/resource/farmer-left-img.jpg" alt="" /></span>
    <!--Sec Title-->
    <div class="sec-title centered">
      <div class="icon-box"></div>
      {{-- <div class="title">Our Great Team</div> --}}
      <h2>Our Team</h2>
      <div class="text">
        This is our great team in charge of the management of the day to day operations of the farm.
      </div>
    </div>
    <div class="row clearfix">

      <!--Team Member-->
      <div class="team-member col-md-4 col-sm-6 col-xs-12">
        <div class="inner-box">
          <div class="image-box">
            <figure class="image"><img src="{{ asset('user/images/pics/4.jpg') }}" alt=""></figure>
            <ul class="social-icon-two">
              <li><a href="index.html#"><span class="fa fa-facebook-f"></span></a></li>
              <li><a href="index.html#"><span class="fa fa-twitter"></span></a></li>
              <li><a href="index.html#"><span class="fa fa-google-plus"></span></a></li>
              <li><a href="index.html#"><span class="fa fa-instagram"></span></a></li>
            </ul>
          </div>
          <div class="lower-content">
            <h4><a href="team-single.html">Mr. Richmond Tetteh</a></h4>
            <div class="designation">Farm Manager</div>
            {{-- <div class="text">As more and more people are turning to organic lifestyles </div> --}}
          </div>
        </div>
      </div>

      <!--Team Member-->
      <div class="team-member col-md-4 col-sm-6 col-xs-12">
        <div class="inner-box">
          <div class="image-box">
            <figure class="image"><img src="{{ asset('user/images/pics/5.jpg') }}" alt=""></figure>
            <ul class="social-icon-two">
              <li><a href="index.html#"><span class="fa fa-facebook-f"></span></a></li>
              <li><a href="index.html#"><span class="fa fa-twitter"></span></a></li>
              <li><a href="index.html#"><span class="fa fa-google-plus"></span></a></li>
              <li><a href="index.html#"><span class="fa fa-instagram"></span></a></li>
            </ul>
          </div>
          <div class="lower-content">
            <h4><a href="team-single.html">James Boye</a></h4>
            <div class="designation">Pastoral Farmer</div>
            {{-- <div class="text">As more and more people are turning to organic lifestyles </div> --}}
          </div>
        </div>
      </div>

      <!--Team Member-->
      <div class="team-member col-md-4 col-sm-6 col-xs-12">
        <div class="inner-box">
          <div class="image-box">
            <figure class="image"><img src="{{ asset('user/images/pics/1.jpg') }}" alt=""></figure>
            <ul class="social-icon-two">
              <li><a href="index.html#"><span class="fa fa-facebook-f"></span></a></li>
              <li><a href="index.html#"><span class="fa fa-twitter"></span></a></li>
              <li><a href="index.html#"><span class="fa fa-google-plus"></span></a></li>
              <li><a href="index.html#"><span class="fa fa-instagram"></span></a></li>
            </ul>
          </div>
          <div class="lower-content">
            <h4><a href="team-single.html">Adam Akpey</a></h4>
            <div class="designation">Arable Farmer</div>
            {{-- <div class="text">As more and more people are turning to organic lifestyles </div> --}}
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
<!--End Farmer Section-->

<!--Testimonial Section-->
<section class="testimonial-section" style="background-image:url('{{asset('user/images/background/3.jpg')}}');">
  <div class="auto-container">
    <!--Sec Title-->
    <div class="sec-title light centered">
      <div class="icon-box"></div>
      {{-- <div class="title">Customer Feedback</div> --}}
      <h2>Testimonials</h2>
      <div class="text">What our customers are saying about us.</div>
    </div>

    <div class="single-item-carousel owl-carousel owl-theme">

      <!--Testimonail Style One-->
      <div class="testimonail-style-one">
        <div class="inner-box">
          <div class="image-box">
            <img src="{{ asset('user/images/pics/7.jpg') }}" alt="" />
          </div>
          <div class="text">Kikies farm has been of great help to my business and i am ever grateful to them.</div>
          <h2>Dwyne Johnson</h2>
          <div class="designation">Regular Customer</div>
          <span class="quote-icon flaticon-left-quote-1"></span>
        </div>
      </div>

      <!--Testimonail Style One-->
      <div class="testimonail-style-one">
        <div class="inner-box">
          <div class="image-box">
            <img src="{{ asset('user/images/pics/2.jpg') }}" alt="" />
          </div>
          <div class="text">Words can't describe how happy i am to have come accross you guys, Kikies farm keep the good work up.</div>
          <h2>Mawutor Joseph</h2>
          <div class="designation">Regular Customer</div>
          <span class="quote-icon flaticon-left-quote-1"></span>
        </div>
      </div>

      <!--Testimonail Style One-->
      <div class="testimonail-style-one">
        <div class="inner-box">
          <div class="image-box">
            <img src="{{ asset('user/images/pics/3.jpg') }}" alt="" />
          </div>
          <div class="text">Kikies farm, you have always be the best and innovative farm in this country.</div>
          <h2>Jecob Benson</h2>
          <div class="designation">Regular Customer</div>
          <span class="quote-icon flaticon-left-quote-1"></span>
        </div>
      </div>

    </div>
  </div>
</section>
<!--End Testimonial Section-->

@endsection