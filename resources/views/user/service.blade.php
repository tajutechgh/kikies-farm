@extends('user.layouts.master')

@section('main-content')

<!--Page Title-->
<section class="page-title" style="background-image:url('images/background/8.jpg');">
  <div class="auto-container">
    <div class="inner-box">
      <h1>Services</h1>
      <ul class="bread-crumb">
        <li><a href="{{ route('index') }}">Home</a></li>
        <li>Services</li>
      </ul>
    </div>
  </div>
</section>
<!--End Page Title-->

<!--Choose Section-->
<section class="choose-section">
  <div class="auto-container">

    <!--Image Column-->
    <div class="image-column">
      <figure class="image">
        <img src="{{ asset('user/images/resource/choose-inner.png') }}" alt="" />
      </figure>
      <!--Title Boxed-->
      <div class="title-boxed">
        <div class="sec-title centered">
          <div class="icon-box"></div>
          <div class="title">What We Do</div>
          <h2>Why Choose Us</h2>
        </div>
      </div>
    </div>

    <div class="row clearfix">

      <!--Column-->
      <div class="column pull-left col-lg-4 col-md-6 col-sm-6 col-xs-12">

        <!--Featured Block Two-->
        <div class="featured-block-two">
          <div class="inner-box">
            <div class="icon-box">
              <span class="icon flaticon-broccoli"></span>
            </div>
            <h3><a href="services.html">Quality Vegetables</a></h3>
            <div class="text">
              We provide quality vagetables which is good for your consumption. 
            </div>
          </div>
        </div>

        <!--Featured Block Two-->
        <div class="featured-block-two">
          <div class="inner-box">
            <div class="icon-box">
              <span class="icon flaticon-apple-1"></span>
            </div>
            <h3><a href="services.html">Quality Fruits</a></h3>
            <div class="text">
              We provide quality fruits which is good for your consumption. 
            </div>
          </div>
        </div>

        <!--Featured Block Two-->
        <div class="featured-block-two">
          <div class="inner-box">
            <div class="icon-box">
              <span class="icon flaticon-food"></span>
            </div>
            <h3><a href="services.html">High Quality Products</a></h3>
            <div class="text">
              Our products are of high quality and good consumption for your health. 
            </div>
          </div>
        </div>

      </div>

      <!--Column-->
      <div class="column pull-right col-lg-4 col-md-6 col-sm-6 col-xs-12">

        <!--Featured Block Three-->
        <div class="featured-block-three">
          <div class="inner-box">
            <div class="icon-box">
              <span class="icon flaticon-bus-1"></span>
            </div>
            <h3><a href="services.html">Fast Delivery</a></h3>
            <div class="text">Contact us to order for your own and we will deliever at your door step right away</div>
          </div>
        </div>

        <!--Featured Block Three-->
        <div class="featured-block-three">
          <div class="inner-box">
            <div class="icon-box">
              <span class="icon flaticon-smartphone-1"></span>
            </div>
            <h3><a href="services.html">Custom Order</a></h3>
            <div class="text">Both new and old customers are welcome to call and place their orders.</div>
          </div>
        </div>

        <!--Featured Block Three-->
        <div class="featured-block-three">
          <div class="inner-box">
            <div class="icon-box">
              <span class="icon flaticon-farmer-1"></span>
            </div>
            <h3><a href="services.html">Certified Farmers</a></h3>
            <div class="text">Our farmers are well trained and are the best when it comes to their work.
            </div>
          </div>
        </div>

      </div>

    </div>
  </div>
</section>
<!--End Choose Section-->

<!--Services Section-->
<section class="services-section">
  <div class="auto-container">
    <!--Sec Title-->
    <div class="sec-title centered">
      <div class="icon-box"></div>
      <div class="title">Our Sevices</div>
      <h2>What We Do</h2>
      <div class="text">
        We are the best at what we do and love doing.
      </div>
    </div>

    <div class="row clearfix">

      <!--Services Block-->
      <div class="services-block col-md-3 col-sm-6 col-xs-12">
        <div class="inner-box">
          <div class="icon-box"><img src="{{ asset('user/images/resource/service-1.png') }}" alt="" />
          </div>
          <h3><a href="services.html">Farm Fresh</a></h3>
          <div class="text">
            Production of fresh farm products.
          </div>
        </div>
      </div>

      <!--Services Block-->
      <div class="services-block col-md-3 col-sm-6 col-xs-12">
        <div class="inner-box">
          <div class="icon-box"><img src="{{ asset('user/images/resource/service-2.png') }}" alt="" />
          </div>
          <h3><a href="services.html">Fresh Vegetables</a></h3>
          <div class="text"> 
            Production of fresh vagetables.
          </div>
        </div>
      </div>

      <!--Services Block-->
      <div class="services-block col-md-3 col-sm-6 col-xs-12">
        <div class="inner-box">
          <div class="icon-box"><img src="{{ asset('user/images/resource/service-3.png') }}" alt="" />
          </div>
          <h3><a href="services.html">Fresh Fruits</a></h3>
          <div class="text"> 
            Production of fresh fruits. 
          </div>
        </div>
      </div>

      <!--Services Block-->
      <div class="services-block col-md-3 col-sm-6 col-xs-12">
        <div class="inner-box">
          <div class="icon-box"><img src="{{ asset('user/images/resource/service-4.png') }}" alt="" />
          </div>
          <h3><a href="services.html">Quality breads</a></h3>
          <div class="text"> 
            Production of quality breads. 
          </div>
        </div>
      </div>

    </div>

  </div>
</section>
<!--End Services Section-->


<!--Offer Section-->
{{-- <section class="offer-section">
  <div class="auto-container">
    <div class="offer-inner">
      <div class="row clearfix">
        <!--Image Column-->
        <div class="image-column col-md-6 col-sm-12 col-xs-12">
          <div class="price-box">Only <span>$35.00</span></div>
          <figure class="image">
            <img src="images/resource/pomegranate-2.png" alt="" />
          </figure>
        </div>
        <!--Content Column-->
        <div class="content-column col-md-6 col-sm-12 col-xs-12">
          <div class="inner-column">
            <h3>Natural Vegitabels</h3>
            <h2>$35.00</h2>
            <div class="text">Nullam sit amet turpis ornare, pulvinar lectus in, cursus mi. Duis et unc eu li duis
              sodales tempor pulvinar.</div>
            <div class="category">Category : <span>Vegetable Box</span></div>
            <a href="shop-single.html" class="theme-btn btn-style-one"><span class="fa fa-cart-plus"></span>&ensp;Add
              To Cart</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> --}}
<!--Offer Section-->

<!--Sponsors Section-->
<div class="sponsors-section" style="background-image:url('images/background/4.jpg');">
  <div class="auto-container">
    <div class="carousel-outer">
      <!--Sponsors Slider-->
      <ul class="sponsors-carousel owl-carousel owl-theme">
        <li>
          <div class="image-box"><a href="services.html#"><img src="images/clients/1.png" alt=""></a></div>
        </li>
        <li>
          <div class="image-box"><a href="services.html#"><img src="images/clients/2.png" alt=""></a></div>
        </li>
        <li>
          <div class="image-box"><a href="services.html#"><img src="images/clients/3.png" alt=""></a></div>
        </li>
        <li>
          <div class="image-box"><a href="services.html#"><img src="images/clients/4.png" alt=""></a></div>
        </li>
        <li>
          <div class="image-box"><a href="services.html#"><img src="images/clients/5.png" alt=""></a></div>
        </li>
        <li>
          <div class="image-box"><a href="services.html#"><img src="images/clients/1.png" alt=""></a></div>
        </li>
        <li>
          <div class="image-box"><a href="services.html#"><img src="images/clients/2.png" alt=""></a></div>
        </li>
        <li>
          <div class="image-box"><a href="services.html#"><img src="images/clients/3.png" alt=""></a></div>
        </li>
      </ul>
    </div>
  </div>
</div>
<!--End Sponsors Section-->

@endsection