@extends('frontend.layouts.master')

@section('content')

  
  <div class="row" style="margin-top:50px;"> 
      <div class="col-md-3"></div>
      <div class="col-md-6" style="background:#00ffdd; padding:10px;">
          <center>
              <h3> All Products in <span class="badge badge-info">{{ $category->name }} Category</span></h3>
          </center>
      </div>
      <div class="col-md-3"></div>
  </div>
   
   
  
  
  
  
  
  
  
  
  
  

    <div class="row " style="margin-top:50px; z-index:-1;">
      <div class="col-md-3">

        @include('frontend.partials.product-sidebar')

      </div>

      <div class="col-md-9">
        
          
          
          @php
          $products = $category->products()->paginate(4);
          @endphp

          @if ($products->count() > 0)
            @include('frontend.pages.product.partials.all_products')
            
          @else
            <div class="alert alert-warning">
              No Products has added yet in this category !!
            </div>
            
          @endif

        </div>
       
      </div>


  @include('frontend.partials.clint_testemonial')
  @include('frontend.partials.our_team')

  

  <!-- End Sidebar + Content -->
@endsection


