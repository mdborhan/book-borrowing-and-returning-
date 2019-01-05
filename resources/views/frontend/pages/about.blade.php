@extends('frontend.layouts.master')

@section('content')

<!-- About Us Start -->
<section id="aboutus"> 
 <div class="div2">
     @include('frontend.partials.our_work')
 </div>
 <div class="div2" style="margin-top:-100px; width:100%;">
      @include('frontend.partials.clint_testemonial')
 </div>
 @include('frontend.partials.our_team')
  
 
</section>
			
			<!-- About Us End -->
			

@endsection