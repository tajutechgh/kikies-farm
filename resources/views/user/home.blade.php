@extends('user.layouts.master')

@section('main-content')
<!--Main Slider-->
<section class="main-slider">
  <div class="rev_slider_wrapper fullwidthbanner-container" id="rev_slider_one_wrapper" data-source="gallery">
    <div class="rev_slider fullwidthabanner" id="rev_slider_one" data-version="5.4.1">
      <ul>
        <li data-description="Slide Description" data-easein="default" data-easeout="default"      data-fsmasterspeed="1500"
          data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-1687"
          data-masterspeed="default" data-param1="" data-param10="" data-param2="" data-param3="" data-param4=""
          data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0"
          data-saveperformance="off" data-slotamount="default" data-thumb="{{ asset('user/images/downloads/f2.jpg') }}"
          data-title="Slide Title" data-transition="parallaxvertical">
          <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center"
          data-bgrepeat="no-repeat" data-no-retina="" src="{{ asset('user/images/downloads/f2.jpg') }}">

          <div class="tp-caption tp-resizeme" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
            data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on" data-type="text"
            data-height="none" data-whitespace="nowrap" data-fontsize="['64','48','36','24']" data-width="none"
            data-hoffset="['15','15','15','15']" data-voffset="['-100','-120','-90','-120']" data-x="['center','center','center','center']"
            data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']" data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
            style="z-index: 7; white-space: nowrap;text-transform:left;">
            {{-- <figure class="content-image"><img src="{{ asset('user/images/main-slider/content-image-1.png') }}"
                alt=""></figure> --}}
          </div>

          <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]"
            data-paddingtop="[0,0,0,0]" data-responsive_offset="on" data-type="text" data-height="none" data-width="['900','600','400','290']"
            data-whitespace="normal" data-hoffset="['15','15','15','15']" data-voffset="['60','10','40','20']" data-x="['center','center','center','center']"
            data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']" data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
            style="z-index: 7; white-space: nowrap;text-transform:left;">
            <div class="text-center">
              <h2>Agriculture is at the core of the state!</h2>
            </div>
          </div>

          <div class="tp-caption tp-resizeme" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
            data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on" data-type="text"
            data-height="none" data-whitespace="nowrap" data-width="none" data-hoffset="['15','15','15','15']"
            data-voffset="['130','160','90','80']" data-x="['center','center','center','center']" data-y="['middle','middle','middle','middle']"
            data-textalign="['top','top','top','top']" data-frames='[{"from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
            style="z-index: 7; white-space: nowrap;text-transform:left;"><br>
            <ul class="slider-list">
              <li>Fruits</li>
              <li>Vegetables</li>
              <li>Food</li>
              <li>Breads</li>
            </ul>
          </div>

          <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]"
            data-paddingtop="[0,0,0,0]" data-responsive_offset="on" data-type="text" data-height="none" data-width="['900','600','400','290']"
            data-whitespace="normal" data-hoffset="['15','15','15','15']" data-voffset="['200','90','160','140']"
            data-x="['center','center','center','center']" data-y="['middle','middle','middle','middle']"
            data-textalign="['top','top','top','top']" data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
            style="z-index: 7; white-space: nowrap;text-transform:left;">
            {{-- <div class="text-center">
              <a href="index.html#" class="theme-btn btn-style-one">Explore</a>
            </div> --}}
          </div>

        </li>

        <li data-description="Slide Description" data-easein="default" data-easeout="default" data-fsmasterspeed="1500"
          data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-1688"
          data-masterspeed="default" data-param1="" data-param10="" data-param2="" data-param3="" data-param4=""
          data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0"
          data-saveperformance="off" data-slotamount="default" data-thumb="{{ asset('user/images/downloads/f7.jpg') }}"
          data-title="Slide Title" data-transition="parallaxvertical">
          <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center"
            data-bgrepeat="no-repeat" data-no-retina="" src="{{ asset('user/images/downloads/f7.jpg') }}">

          <div class="tp-caption tp-resizeme" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
            data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on" data-type="text"
            data-height="none" data-whitespace="nowrap" data-fontsize="['64','48','36','24']" data-width="none"
            data-hoffset="['15','15','15','15']" data-voffset="['-120','-130','-130','-120']" data-x="['left','left','left','left']"
            data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']" data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
            style="z-index: 7; white-space: nowrap;text-transform:left;">
            <div class="title">Over 5 Years Of Experience</div>
          </div>

          <div class="tp-caption tp-resizeme" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
            data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on" data-type="text"
            data-height="none" data-whitespace="nowrap" data-fontsize="['64','48','36','24']" data-width="none"
            data-hoffset="['15','15','15','15']" data-voffset="['-60','-65','-65','-70']" data-x="['left','left','left','left']"
            data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']" data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
            style="z-index: 7; white-space: nowrap;text-transform:left;">
            <h3>Welcome To Kikies</h3>
          </div>

          <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]"
            data-paddingtop="[0,0,0,0]" data-responsive_offset="on" data-type="text" data-height="none" data-width="['900','600','400','290']"
            data-whitespace="normal" data-hoffset="['15','15','15','15']" data-voffset="['0','10','0','-15']" data-x="['left','left','left','left']"
            data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']" data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
            style="z-index: 7; white-space: nowrap;text-transform:left;">
            <div class="text">Eat Better! Feel Better</div>
          </div>

          <div class="tp-caption tp-resizeme" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
            data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on" data-type="text"
            data-height="none" data-whitespace="nowrap" data-width="none" data-hoffset="['15','15','15','15']"
            data-voffset="['50','60','50','20']" data-x="['left','left','left','left']" data-y="['middle','middle','middle','middle']"
            data-textalign="['top','top','top','top']" data-frames='[{"from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
            style="z-index: 7; white-space: nowrap;text-transform:left;">
            <ul class="slider-list">
              <li>Fruits</li>
              <li>Vegetables</li>
              <li>Food</li>
              <li>Breads</li>
            </ul>
          </div>

          <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]"
            data-paddingtop="[0,0,0,0]" data-responsive_offset="on" data-type="text" data-height="none" data-width="['900','600','400','290']"
            data-whitespace="normal" data-hoffset="['15','15','15','15']" data-voffset="['120','130','110','80']"
            data-x="['left','left','left','left']" data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']"
            data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
            style="z-index: 7; white-space: nowrap;text-transform:left;">
            {{-- <a href="index.html#" class="theme-btn btn-style-one">Shop Now</a> --}}
          </div>

        </li>

        <li data-description="Slide Description" data-easein="default" data-easeout="default" data-fsmasterspeed="1500"
          data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-1690"
          data-masterspeed="default" data-param1="" data-param10="" data-param2="" data-param3="" data-param4=""
          data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0"
          data-saveperformance="off" data-slotamount="default" data-thumb="{{ asset('user/images/downloads/f3.png') }}"
          data-title="Slide Title" data-transition="parallaxvertical">
          <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center"
          data-bgrepeat="no-repeat" data-no-retina="" src="{{ asset('user/images/downloads/f3.png') }}">

          <div class="tp-caption tp-resizeme" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
            data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on" data-type="text"
            data-height="none" data-whitespace="nowrap" data-fontsize="['64','48','36','24']" data-width="none"
            data-hoffset="['15','15','15','15']" data-voffset="['-130','-150','-140','-120']" data-x="['center','center','center','center']"
            data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']" data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
            style="z-index: 7; white-space: nowrap;text-transform:left;">
            <figure class="content-image"><img src="{{ asset('user/images/main-slider/leaf-icon.png') }}" alt=""></figure>
          </div>

          <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]"
            data-paddingtop="[0,0,0,0]" data-responsive_offset="on" data-type="text" data-height="none" data-width="['900','600','400','290']"
            data-whitespace="normal" data-hoffset="['15','15','15','15']" data-voffset="['-60','-100','-70','-60']"
            data-x="['center','center','center','center']" data-y="['middle','middle','middle','middle']"
            data-textalign="['top','top','top','top']" data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
            style="z-index: 7; white-space: nowrap;text-transform:left;">
            <div class="text text-center">Eat Better! <span class="theme_color">Feel Better</span></div>
          </div>

          <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]"
            data-paddingtop="[0,0,0,0]" data-responsive_offset="on" data-type="text" data-height="none" data-width="['900','600','400','290']"
            data-whitespace="normal" data-hoffset="['15','15','15','15']" data-voffset="['0','-55','40','40']" data-x="['center','center','center','center']"
            data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']" data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
            style="z-index: 7; white-space: nowrap;text-transform:left;">
            <h2 class="alternate">We are highly committed to</h2>
          </div>


          <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]"
            data-paddingtop="[0,0,0,0]" data-responsive_offset="on" data-type="text" data-height="none" data-width="['900','600','400','290']"
            data-whitespace="normal" data-hoffset="['15','15','15','15']" data-voffset="['55','10','-20','-20']" data-x="['center','center','center','center']"
            data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']" data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
            style="z-index: 7; white-space: nowrap;text-transform:left;">
            <h4>quality food supplies</h4>
          </div>


          <div class="tp-caption tp-resizeme" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
            data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on" data-type="text"
            data-height="none" data-whitespace="nowrap" data-width="none" data-hoffset="['15','15','15','15']"
            data-voffset="['100','50','110','90']" data-x="['center','center','center','center']" data-y="['middle','middle','middle','middle']"
            data-textalign="['top','top','top','top']" data-frames='[{"from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
            style="z-index: 7; white-space: nowrap;text-transform:left;">
            <ul class="slider-list">
              <li>Fruits</li>
              <li>Vegetables</li>
              <li>Food</li>
              <li>Breads</li>
            </ul>
          </div>

          <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]"
            data-paddingtop="[0,0,0,0]" data-responsive_offset="on" data-type="text" data-height="none" data-width="['900','600','400','290']"
            data-whitespace="normal" data-hoffset="['15','15','15','15']" data-voffset="['170','100','170','150']"
            data-x="['center','center','center','center']" data-y="['middle','middle','middle','middle']"
            data-textalign="['top','top','top','top']" data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
            style="z-index: 7; white-space: nowrap;text-transform:left;">
            {{-- <div class="text-center">
              <a href="index.html#" class="theme-btn btn-style-one">Shop Now</a>
            </div> --}}
          </div>

        </li>

      </ul>
    </div>
  </div>
</section>
<!--End Main Slider-->

<!--Experiance Section-->
<section class="experiance-section" style="background-image:url('{{asset('user/images/background/1.png')}}');">
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
            Kikies Farm is a fast growing company in Ghana whose head office is situated at Tsito in the Volta Region of Ghana. The Chief 	Executive Director of Kikies Farm is known as Mr. Richmond Tetteh who has a deep love for farming. Kikies Farm has been in existence for the past 5 years but was registered with the Registrar General Department in 2017.
          </p>
        </div>
        <a href="{{ route('about') }}" class="theme-btn btn-style-one">read more</a>
      </div>
    </div>
  </div>
</section>
<!--End Experiance Section-->

<!--Cart Section-->
<section class="cart-info-section">
  <div class="auto-container">
    <div class="row clearfix">
      <!--Column-->
      <div class="content-column pull-right col-md-6 col-sm-12 col-xs-12">
        <div class="inner-column">
          <h3>Natural Vegitabels And Fruits</h3>
          {{-- <h2>$35.00</h2> --}}
          <div class="text">
            We are the best providers of natural vegetables and fruits. Contact us for your own and we will deliver it at your door step.
          </div>
          {{-- <div class="category">Category : <span>Vegetable Box</span></div> --}}
          {{-- <a href="shop-single.html" class="theme-btn btn-style-one"><span class="fa fa-cart-plus"></span>&ensp;Add
            To Cart</a> --}}
        </div>
      </div>
      <!--Image Column-->
      <div class="image-column pull-left col-md-6 col-sm-12 col-xs-12">
        <figure class="image">
          <img src="{{ asset('user/images/downloads/vit.jpeg') }}" alt="" />
        </figure>
      </div>
    </div>
  </div>
</section>
<!--End Cart Section-->

<!--Featured Section-->
<section class="featured-section">
  <div class="auto-container">
    <div class="featured-inner">
      <div class="row clearfix">
        <!--Featured Block-->
        <div class="featured-block col-md-4 col-sm-6 col-xs-12">
          <div class="inner-box">
            <div class="content">
              <div class="icon-box">
                <span class="icon"><img src="{{ asset('user/images/resource/featured-icon-1.png') }}" alt="" /></span>
              </div>
              <div class="title">Fariming Process</div>
              <h2><a href="services.html">Farm Fresh</a></h2>
              {{-- <div class="text">Cras ultricies mi eu turpis hen...</div> --}}
            </div>
          </div>
        </div>

        <!--Featured Block-->
        <div class="featured-block col-md-4 col-sm-6 col-xs-12">
          <div class="inner-box">
            <div class="content">
              <div class="icon-box">
                <span class="icon"><img src="{{ asset('user/images/resource/featured-icon-2.png') }}" alt="" /></span>
              </div>
              <div class="title">Organic Vegetables</div>
              <h2><a href="services.html">Fresh Vegetables</a></h2>
              {{-- <div class="text">Cras ultricies mi eu turpis hen...</div> --}}
            </div>
          </div>
        </div>

        <!--Featured Block-->
        <div class="featured-block col-md-4 col-sm-6 col-xs-12">
          <div class="inner-box">
            <div class="content">
              <div class="icon-box">
                <span class="icon"><img src="{{ asset('user/images/resource/featured-icon-3.png') }}" alt="" /></span>
              </div>
              <div class="title">Organic Fruits</div>
              <h2><a href="services.html">Fresh Fruits</a></h2>
              {{-- <div class="text">Cras ultricies mi eu turpis hen...</div> --}}
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>
<!--End Featured Section-->

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

<!--Call To Action Section-->
<section class="call-to-action-section" style="background-image:url('{{asset('user/images/background/2.jpg')}}');">
  <div class="auto-container">
    <h3>Healthy Living</h3>
    <h2>A Healthy Outside Starts From Inside</h2>
    {{-- <a href="shop.html" class="theme-btn btn-style-one">see all Products</a> --}}
  </div>
</section>
<!--End Call To Action Section-->

<!--Product Section-->
<section class="product-section">
  <span class="product-right-image"><img src="{{ asset('user/images/resource/product-right-image.jpg') }}" alt="" /></span>
  <span class="product-left-image"><img src="{{ asset('user/images/resource/product-left-image.jpg') }}" alt="" /></span>
  <span class="product-middle-image"><img src="{{ asset('user/images/resource/product-middle-image.jpg') }}" alt="" /></span>
  <div class="auto-container">
    <!--Sec Title-->
    <div class="sec-title centered">
      <div class="icon-box"></div>
      {{-- <div class="title">Our Organic Shop</div> --}}
      <h2>Our Products</h2>
    </div>

    <!--Sortable Gallery-->
    <div class="mixitup-gallery">

      <!--Filter-->
      <div class="filters clearfix">
        <ul class="filter-tabs filter-btns text-center">
          <li class="filter active" data-role="button" data-filter="all">ALL PRODUCTS</li>
          <li class="filter" data-role="button" data-filter=".vegetable">VEGETABLE</li>
          <li class="filter" data-role="button" data-filter=".fruits">FRUITS</li>
          <li class="filter" data-role="button" data-filter=".bread">BREAD</li>
          <li class="filter" data-role="button" data-filter=".others">OTHERS</li>
        </ul>
      </div>

      <div class="filter-list row clearfix">

        <!--Shop Item-->
        <div class="shop-item col-md-4 col-sm-6 col-xs-12 mix all fruits">
          <div class="inner-box">
            <div class="image-box"><img src="{{ asset('user/images/resource/products/ban.jpg') }}" alt="" style="height:330px;"></div>
            <!--lower box-->
            <div class="lower-box">
              <h3><a href="shop-single.html">Banana</a></h3>
              {{-- <span class="price">$17.00</span> --}}
              {{-- <a href="shop-single.html" class="theme-btn btn-style-one"><span class="fa fa-cart-plus"></span>&ensp;Add
                To Cart
              </a> --}}
            </div>
          </div>
        </div>

        <!--Shop Item-->
        <div class="shop-item col-md-4 col-sm-6 col-xs-12 mix all bread">
          <div class="inner-box">
            <div class="image-box"><img src="{{ asset('user/images/resource/products/2.jpg') }}" alt=""></div>
            <!--lower box-->
            <div class="lower-box">
              <h3><a href="shop-single.html">CARROTS</a></h3>
              {{-- <span class="price">$15.00</span> --}}
              {{-- <a href="shop-single.html" class="theme-btn btn-style-one"><span class="fa fa-cart-plus"></span>&ensp;Add
                To Cart
              </a> --}}
            </div>
          </div>
        </div>

        <!--Shop Item-->
        <div class="shop-item col-md-4 col-sm-6 col-xs-12 mix all fruits">
          <div class="inner-box">
            <div class="image-box"><img src="{{ asset('user/images/resource/products/3.jpg') }}" alt=""></div>
            <!--lower box-->
            <div class="lower-box">
              <h3><a href="shop-single.html">Orange</a></h3>
              {{-- <span class="price">$10.00</span> --}}
              {{-- <a href="shop-single.html" class="theme-btn btn-style-one"><span class="fa fa-cart-plus"></span>&ensp;Add
                To Cart
              </a> --}}
            </div>
          </div>
        </div>

        <!--Shop Item-->
        <div class="shop-item col-md-4 col-sm-6 col-xs-12 mix all vegetable bread">
          <div class="inner-box">
            <div class="image-box"><img src="{{ asset('user/images/resource/products/4.jpg') }}" alt=""></div>
            <!--lower box-->
            <div class="lower-box">
              <h3><a href="shop-single.html">BROCCOLI</a></h3>
              {{-- <span class="price">$13.00</span> --}}
              {{-- <a href="shop-single.html" class="theme-btn btn-style-one"><span class="fa fa-cart-plus"></span>&ensp;Add
                To Cart
              </a> --}}
            </div>
          </div>
        </div>

        <!--Shop Item-->
        <div class="shop-item col-md-4 col-sm-6 col-xs-12 mix all vegetable others">
          <div class="inner-box">
            <div class="image-box"><img src="{{ asset('user/images/resource/products/cuc.jpeg') }}" alt="" style="height:330px;"></div>
            <!--lower box-->
            <div class="lower-box">
              <h3><a href="shop-single.html">Cucumber</a></h3>
              {{-- <span class="price">$25.00</span> --}}
              {{-- <a href="shop-single.html" class="theme-btn btn-style-one"><span class="fa fa-cart-plus"></span>&ensp;Add
                To Cart
              </a> --}}
            </div>
          </div>
        </div>

        <!--Shop Item-->
        <div class="shop-item col-md-4 col-sm-6 col-xs-12 mix all others">
          <div class="inner-box">
            <div class="image-box"><img src="{{ asset('user/images/resource/products/6.jpg') }}" alt=""></div>
            <!--lower box-->
            <div class="lower-box">
              <h3><a href="shop-single.html">Tomatoes</a></h3>
              {{-- <span class="price">$32.00</span> --}}
              {{-- <a href="shop-single.html" class="theme-btn btn-style-one"><span class="fa fa-cart-plus"></span>&ensp;Add
                To Cart
              </a> --}}
            </div>
          </div>
        </div>

      </div>
    </div>

  </div>
</section>
<!--End Product Section-->

<!--Subscribe Style One-->
<section class="subscribe-style-one">
  <span class="left-image"><img src="{{ asset('user/images/resource/newsletter-1.png') }}" alt="" /></span>
  <div class="auto-container">
    <div class="row clearfix">
      <div class="column col-md-4 col-sm-12 col-xs-12">
        <h2>Subscribe To our <br> <span class="theme_color">Newsletter</span></h2>
      </div>
      <div class="column col-md-8 col-sm-12 col-xs-12">
        <form method="post" action="contact.html">
          <div class="form-group">
            <input type="email" name="email" value="" placeholder="Enter your email.." required>
            <button type="submit" class="subscribe-btn">Subscribe</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <span class="right-image"><img src="{{ asset('user/images/resource/newsletter-2.png') }}" alt="" /></span>
</section>
<!--End Subscribe Style One-->

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
            <h4><a href="team-single.html">David Warner</a></h4>
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
            <div class="designation">Patner</div>
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
            <div class="designation">Patner</div>
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