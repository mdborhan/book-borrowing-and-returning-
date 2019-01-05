@extends('frontend.layouts.master')

@section('content')

  <!-- Start Sidebar + Content -->
   
   <div class="row" style="margin-top:50px;">
       <div class="col-md-2"></div>
       <div class="col-md-8">
           <button class="btn btn-primary btn-lg btn-block"> <h3> Searched Products For:- {{ $search }}</h3></button>
       </div>
       <div class="col-md-2"></div>
   </div>
   
  <div class="" style="margin-top:50px;">
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
@endsection
