<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>
    @yield('title', 'BoiGhor.com')
  </title>

  @include('frontend.partials.styles')
</head>
<body>
 
 
  <div class="wrapper" >

   
    @include('frontend.partials.nav')
     
    @include('frontend.partials.cart')
    @include('frontend.partials.scrollbutton')
   
    @include('frontend.partials.messages')
   
        @yield('content')
   

    @include('frontend.partials.footer')

  </div>


  @include('frontend.partials.scripts')
    @yield('scripts')
    @yield('owlcarouselscript')
    @yield('owlcarouselscript1')
  </body>
</html>
