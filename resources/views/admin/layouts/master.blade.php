<!doctype html>
<html class="no-js" lang="">

<head>
  @include('admin.layouts.head')
</head>

<body>
  <div class="header-top-area">
    @include('admin.layouts.header')
  </div>
  <!-- End Header Top Area -->
  @include('admin.layouts.menu')

  @section('content')
      
    @show

  @include('admin.layouts.footer')
</body>

</html>