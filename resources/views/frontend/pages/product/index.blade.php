@extends('frontend.layouts.master')

@section('content')


 <div class="row" style="margin-top:50px;"> 
     <div class="col-md-3"> </div>
     <div class="col-md-6">
         <center>
             
         <img src="{{asset('images/logo/allbook1.jpg')}}" alt="All BOOKS" style="height:50px; width:100%;border-radius:25px;"> 
         
         </center>
     </div>
     <div class="col-md-3"> </div>
 </div>
  <!-- Start Sidebar + Content -->
  <div class='' style="margin-top:30px;">
    <div class="row">
      <div class="col-md-2">

        @include('frontend.partials.product-sidebar')

      </div>

      <div class="col-md-10">
        <div class="widget">
         
          @include('frontend.pages.product.partials.all_products')
          
        </div>
        <div class="widget">

        </div>
      </div>


    </div>
  </div>

  <!-- End Sidebar + Content -->
  @include('frontend.partials.clint_testemonial')

        @include('frontend.partials.our_team')


@endsection


