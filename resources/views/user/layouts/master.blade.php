<!DOCTYPE html>
<html>

<head>

  @include('user.layouts.head')

</head>

<body>
  <div class="page-wrapper">

    <!-- Preloader -->
    <div class="preloader"></div>

    <!-- Main Header-->
    <header class="main-header">

      @include('user.layouts.header')

    </header>
    <!--End Main Header -->

    @section('main-content')
        
    @show

    <!--Main Footer-->
    <footer class="main-footer">

      @include('user.layouts.footer')

    </footer>

  </div>
  <!--End pagewrapper-->

  <!--Scroll to top-->
  <div class="scroll-to-top scroll-to-target" data-target="html"><span class="icon fa fa-long-arrow-up"></span></div>


  @include('user.layouts.foot')
</body>

</html>