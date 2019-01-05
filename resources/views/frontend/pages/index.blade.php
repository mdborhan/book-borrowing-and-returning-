@extends('frontend.layouts.master')


@section('content')
 
 
  <!--Top side bar Start-->
  
 @include('frontend.partials.topslidebar')
 
  <!--Top side bar End-->
  
  <!-- Start Sidebar + Content -->
  

  <div class="container">
<div class="div" style="height:20px; width:100%;"></div>
 <div class=" row " style="margin-top:30px; ">
 
    
      <div class="col-md-12" style="">
       
          
        @include('frontend.pages.product.partials.frontend_product')
       
      </div>
       

    </div>
      <center>
    <style>
    
    </style>
  <a href=" {{route('products')}}" style=" margin-top:20px;" class="morebooks">
    <img class="morebooks"src="{{asset('images/logo/morebook1.jpg')}}" alt="" style="height:60px; width:250px; border-radius:50%;">
</a>

</center>
</div>
  <!-- End Sidebar + Content -->
  
  

@include('frontend.partials.clint_testemonial')

@endsection
