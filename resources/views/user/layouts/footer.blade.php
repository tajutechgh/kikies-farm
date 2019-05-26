<!--Widgets Section-->
<div class="widgets-section">
  <div class="auto-container">
    <div class="row clearfix">
      <!--Big Column-->
      <div class="big-column col-md-6 col-sm-12 col-xs-12">
        <div class="row clearfix">

          <!--Footer Column-->
          <div class="footer-column col-md-6 col-sm-6 col-xs-12">
            <!--About Widget-->
            <div class="footer-widget about-widget">
              <h2>About Us</h2>
              <div class="text">
                Kikies Farm is a fast growing company in Ghana whose head office is situated at Tsito in the Volta Region of Ghana. The Chief 	Executive Director of Kikies Farm is known as Mr. Richmond Tetteh who has a deep love for farming. 
                <a href="{{ route('about') }}">Read more......</a>
              </div>
              {{-- <div class="cards"><img src="{{ asset('user/images/resource/cards.png') }}" alt="" /></div> --}}
            </div>
          </div>

          <!--Footer Column-->
          <div class="footer-column col-md-6 col-sm-6 col-xs-12">
            <!--Info Widget-->
            <div class="footer-widget info-widget">
              <h2>Contact</h2>
              <ul class="info-list">
                <li>Address<span>Tsito,Volta Region</span></li>
                <li>Phone<span>0304568798</span></li>
                <li>Email<span>kikiesfarm@gmail.com</span></li>
              </ul>
            </div>
          </div>

        </div>
      </div>


      <!--Big Column-->
      <div class="big-column col-md-6 col-sm-12 col-xs-12">
        <div class="row clearfix">

          <!--Footer Column-->
          <div class="footer-column col-md-6 col-sm-6 col-xs-12">
            <!--Gallery Widget-->
            <div class="footer-widget gallery-widget">
              <h2>Our Gallery</h2>

              <div class="widget-content">
                <div class="images-outer clearfix">
                  <!--Image Box-->
                  <figure class="image-box"><a style="width:150px; height:150px;" href="{{ asset('user/images/gallery/ban.jpg') }}" class="lightbox-image"
                      title="Banana" data-fancybox-group="footer-gallery"><img style="width:150px; height:100px;" src="{{ asset('user/images/gallery/ban.jpg') }}"
                        alt=""></a></figure>
                  <!--Image Box-->
                  <figure class="image-box"><a style="width:150px; height:150px;" href="{{ asset('user/images/gallery/pine.jpeg') }}" class="lightbox-image"
                      title="Pineapple" data-fancybox-group="footer-gallery"><img style="width:150px; height:100px;" src="{{ asset('user/images/gallery/pine.jpeg') }}"
                        alt=""></a></figure>
                  <!--Image Box-->
                  <figure class="image-box"><a style="width:150px; height:150px;" href="{{ asset('user/images/gallery/man1.jpg') }}" class="lightbox-image"
                      title="Mango" data-fancybox-group="footer-gallery"><img style="width:150px; height:100px;" src="{{ asset('user/images/gallery/man1.jpg') }}"
                        alt=""></a></figure>
                  <!--Image Box-->
                  <figure class="image-box"><a style="width:150px; height:150px;" href="{{ asset('user/images/gallery/m1.jpeg') }}" class="lightbox-image"
                      title="Maize" data-fancybox-group="footer-gallery"><img style="width:150px; height:100px;" src="{{ asset('user/images/gallery/m1.jpeg') }}"
                        alt=""></a></figure>
                  <!--Image Box-->
                  <figure class="image-box"><a style="width:150px; height:150px;" href="{{ asset('user/images/gallery/f7.jpg') }}" class="lightbox-image"
                      title="Pawpaw" data-fancybox-group="footer-gallery"><img style="width:150px; height:100px;" src="{{ asset('user/images/gallery/f7.jpg') }}"
                        alt=""></a></figure>
                  <!--Image Box-->
                  <figure class="image-box"><a style="width:150px; height:150px;" href="{{ asset('user/images/gallery/wat.jpeg') }}" class="lightbox-image"
                      title="Water Melon" data-fancybox-group="footer-gallery"><img style="width:150px; height:100px;" src="{{ asset('user/images/gallery/wat.jpeg') }}"
                        alt=""></a></figure>
                </div>
              </div>

            </div>
          </div>

          <!--Footer Column-->
          <div class="footer-column col-md-6 col-sm-6 col-xs-12">
            <div class="footer-widget subscribe-widget">
              <h2>News letter</h2>
              <div class="widget-content">
                <div class="newsletter-form">
                  <form method="post" action="contact.html">
                    <div class="form-group">
                      <input type="text" name="name" value="" placeholder="Name" required="">
                    </div>
                    <div class="form-group">
                      <input type="email" name="email" value="" placeholder="Email Id" required="">
                    </div>
                    <div class="form-group">
                      <button type="submit" class="theme-btn btn-style-one">SUBSCRIBE</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>

<!--Footer Bottom-->
<div class="footer-bottom">
  <div class="auto-container">
    <div class="logo">
      <a href="{{ route('index') }}"><img src="{{ asset('user/images/kikies.jpg') }}" alt="" title="Company Logo" style="width:100px;"/></a>
    </div>
    <ul class="social-icon-one">
      <li><a href="#"><span class="fa fa-facebook"></span></a></li>
      <li><a href="#"><span class="fa fa-twitter"></span></a></li>
      <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
      <li><a href="#"><span class="fa fa-instagram"></span></a></li>
      <li><a href="#"><span class="fa fa-dribbble"></span></a></li>
      <li><a href="#"><span class="fa fa-skype"></span></a></li>
      <li><a href="#"><span class="fa fa-pinterest"></span></a></li>
    </ul>
    <div class="copyright">Copyright &copy; 2019-{{Carbon\carbon::now()->year}} Kikies Farm. All rights reserved.</div>
  </div>
</div>