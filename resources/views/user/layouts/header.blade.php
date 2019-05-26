<!-- Header Top -->
<div class="header-top">
  <div class="auto-container clearfix">
    <!--Top Left-->
    <div class="top-left pull-left">
      <ul class="links-nav clearfix">
        <li><a href="index.html#"><span class="icon fa fa-envelope-o"></span> kikiesfarm@gmail.com</a>
        </li>
        <li><a href="index.html#"><span class="icon fa fa-phone"></span> Call Us Now : 0304568798</a></li>
      </ul>
    </div>

    <!--Top Right-->
    <div class="top-right pull-right">
      <ul class="links-nav clearfix">
        <li><a href="{{ route('login') }}">Administrator</a></li>
        {{-- <li><a href="index.html#">Sign Up</a></li> --}}
      </ul>
    </div>
  </div>
</div>
<!-- Header Top End -->

<!--Header-Upper-->
<div class="header-upper">
  <div class="auto-container">

    <div class="logo-outer">
      <div class="logo"><a href="{{ route('index')}}"><img src="{{ asset('user/images/kikies.jpg') }}" alt="" title="Company Logo" style="width:130px;"></a></div>
    </div>

    <div class="nav-outer clearfix">

      <!-- Main Menu -->
      <nav class="main-menu">
        <div class="navbar-header">
          <!-- Toggle Button -->
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>

        <div class="navbar-collapse collapse clearfix">
          <!--Left Nav-->
          <ul class="navigation left-nav clearfix">
            <li><a href="{{ route('index') }}">Home</a></li>
            <li><a href="{{ route('about') }}"">About Us</a></li>
          </ul>
          <!--Right Nav-->
          <ul class="navigation right-nav clearfix">
            <li><a href="{{ route('service') }}">Services</a></li>
            <li><a href="{{ route('contact.index') }}">Contact Us</a></li>
          </ul>
        </div>
      </nav>

    </div>
  </div>
</div>
<!--End Header Upper-->

<!--Sticky Header-->
<div class="sticky-header">
  <div class="auto-container clearfix">
    <!--Logo-->
    <div class="logo pull-left">
      <a href="{{ route('index')}}" class="img-responsive"><img src="{{ asset('user/images/kikies.jpg') }}" alt="" title="Company Logo" style="width:100px;"></a>
    </div>

    <!--Right Col-->
    <div class="right-col pull-right">
      <!-- Main Menu -->
      <nav class="main-menu">
        <div class="navbar-header">
          <!-- Toggle Button -->
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>

        <div class="navbar-collapse collapse clearfix">
          <ul class="navigation clearfix">
            <li><a href="{{ route('index') }}">Home</a></li>
            <li><a href="{{ route('about') }}">About Us</a></li>
            <li><a href="{{ route('service') }}">Services</a></li>
            <li><a href="{{ route('contact.index') }}">Contact Us</a></li>
          </ul>
        </div>
      </nav><!-- Main Menu End-->
    </div>

  </div>
</div>
<!--End Sticky Header-->