@extends('frontend.layouts.master')

@section('content')
<style>
</style>

				<!-- contactus start -->
				<div class="div13" style=" backgorund:#00ffdd;"></div>
				<div class="contact"style="background:#00ffdd;">
				
				<div class="container" style="margin-top:0px;">
				    <div class="center">
				        <div class="row" style="padding-top:100px;">
				            <div class="col-md-2"></div>
				            <div class="col-md-8"  id="pointer" style="">
				                <center><h1 style="font-weight:900;">Don't hesitate to contact <br> with us anytime</h1></center>
				                <hr style="height:5px; width:150px; color:green;">
				            </div>
				            
				            <div class="col-md-2"></div>
				        </div>
				    </div>
				</div>
<div class="container" style="margin-top:20px;"> 
	<div class="row"> 
		<div class="col-md-8" style=""> 
		
			<div class="map card" style="  box-shadow: -6px -6px 6px -6px black;"> 
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3653.0440426911605!2d90.43218551494792!3d23.71012119623083!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6e6e1bf4bc23daec!2sGrameenphone+Center+Jatrabari!5e0!3m2!1sen!2sbd!4v1538962859303"
				width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
		</div>
		<div class="col-md-4"> 
		<div class="card" style="   -moz-box-shadow: inset 0 0 10px #000000;
   -webkit-box-shadow: inset 0 0 10px #000000;
   box-shadow: inset 0 0 10px #000000;">
		
			<div class="contactinfo" style="margin-left:30px;margin-top:30px;">
			<h3> Contact Information:</h3>
			<hr style="width:100px; margin-left:0px;">
			<p style="font-weight:900; font-size:18px;"><i class="fa fa-globe"></i>&nbsp; BoiGhor.com</p>
			
			<p><p2 style="font-weight:800; font-size:16px;"><i class="fa fa-phone"></i>  &nbsp; PHONE:</p2> &nbsp;&nbsp;<p3  style="font-size:14px;">01917497927</p3></p>
			
			<p><p2 style="font-weight:800; font-size:16px;"><i class="fa fa-envelope"></i>  &nbsp; EMAIL:</p2> &nbsp;&nbsp;<p3  style="font-size:14px;">boighordotcom@gmail.com</p3></p>
			
			<p><p2 style="font-weight:800; font-size:16px;"><i class="fa fa-location-arrow"></i> &nbsp; ADDRESS:</p2> &nbsp;&nbsp;<p3  style="font-size:14px;">Level:5, Shaid Faruk Road Jatrabari, Dhaka-1204.</p3></p>
			
			
			</div>
			<hr style="width:100px; margin-left:30px;">
			<div class="socialnetworking" style="margin-top:10px; margin-left:30px; margin-bottom:30px;"> 
			
				<a href="#" style="font-size:10px; margin-left:30px; margin-top:30px;"> 
					<i class="fa fa-2x fa-facebook"></i>
				</a>
				<a href="#" style="font-size:10px; margin-left:30px; margin-top:30px;"> 
					<i class="fa fa-2x fa-youtube"></i>
				</a>
				<a href="#" style="font-size:10px; margin-left:30px; margin-top:30px;"> 
					<i class="fa fa-2x fa-twitter"></i>
				</a>
			</div>
			</div>
		</div>
	</div>
</div>
				<!-- contactus end -->

			
 @include('frontend.partials.clint_testemonial')	
 @include('frontend.partials.our_team')		
 
	
@endsection