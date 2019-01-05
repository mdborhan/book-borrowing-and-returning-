@extends('frontend.layouts.master')

@section('content')
<div class="menu bg-light">
<div class="container"> 
	<div class="row bg-light navbar-expand-md"> 
		<div class="col-lg-2 d-none d-md-block"> </div>
		<div class="col-md-9 col-lg-7 d-none d-md-block">
			<nav class="navbar navbar-expand-lg navbar-light ">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
					</li>
						
					<li class="nav-item">
						<a class="nav-link" href="index.php">Blog</a>
					</li>
						
					<li class="nav-item">
						<a class="nav-link" href="aboutus.php">About Us</a>
					</li>
						
					<li class="nav-item">
						<a class="nav-link" href="contactus.php">Contact Us</a>
					</li>
				</ul>
			</nav>
		</div>
		
		<div class="col-md-3 col-lg-3 d-none d-md-block"> 
			<ul class="navbar-nav"> 
				<li class="nav-item"> 
					<a href="#" class="nav-link"><i class="fa fa-headphones"> </i>01917497927</a>
				</li>
			</ul>
		</div>
	</div>
</div>
			<!-- Top Menu Bar End -->
			<!-- Search Menu Bar Start -->
<div class="container sticky-top" > 
	<div class="row bg-light">
	
		<div class="col-lg-1 d-none d-md-block"> 
			
		</div>
		
		<div class="col-md-2 col-sm-8 col-xs-12 col-lg-2 " style="margin-left:0px;">
			<a href="#"class="d-md-none" >
				<img style="margin-right:30px" src="image/toggle.png">
			</a>

			<a href="#" >
				<img style="" src="image/boighorlogo2.png">
			</a>	
		
		</div>
		<div class="col-md-6 col-lg-6  d-none d-md-block "style=" margin-left:25px;"> 
			<div class="input-group mb-2">
				
  <input type="text" class="form-control" aria-label="Text input with dropdown button">
  
  <button class="btn "style="background-color:#2471A3; color:white;" type="button">Search</button>
</div>
	</div>
	
	
	
	<div class="col-md-3 col-lg-2 col-sm-3 col-xs-2  d-none d-sm-block" style="margin-top: 15px;">
      <a href=" #"> 
		<img src="image/signinup.png" alt="" />
	  </a>
    </div>
</div>

	
</div>
			<!-- Search Menu Bar End -->
			<!-- Third Menu Bar Start -->
			<div class="container">
			
					
<nav class="navbar row navbar-expand-sm navbar-light bg-light" id="semenu"style="">
<div class="col-lg-3  d-none d-md-block"> </div>
	<div class="col-sm-12 col-md-12 col-lg-8   d-none d-md-block" id="navbarNavDropdown">
		<ul class="navbar-nav">
            <li class="nav-item dropdown" id="smenu">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" 
				role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">CATEGORIES
				</a>
				
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
	        <li class="nav-item dropdown" id="smenu">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" 
		role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          AUTHORS
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item dropdown" id="smenu">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" 
		role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          PUBLISHERS
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">BOIMAELA 2018</a>
      </li>
	  
    </ul>
  </div>
  <div class="col-lg-1  d-none d-md-block"> </div>
  
</nav>

</div>
</div>	
			<!-- Third Menu Bar End -->

				<!-- contactus start -->
<div class="container" style="margin-top:20px;"> 
	<div class="row"> 
		<div class="col-md-8"> 
			<div class="map"> 
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3653.0440426911605!2d90.43218551494792!3d23.71012119623083!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6e6e1bf4bc23daec!2sGrameenphone+Center+Jatrabari!5e0!3m2!1sen!2sbd!4v1538962859303"
				width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
		</div>
		<div class="col-md-4"> 
			<div class="contactinfo">
			<h2> Contact Info:</h2>
			<p>BoiGhor.com</p>
			<p>Mobile:01917497927</p>
			<p>Email:boighordotcom@gmail.com</p>
			<p>Address:Level:5, Shaid Faruk Road Jatrabari, Dhaka-1204.</p>
			</div>
			<div class="socialnetworking"> 
				<h3> Social Networking</h3>
				<a href="#" style="font-size:10px; margin-left:20px; margin-top:30px;"> 
					<i class="fa fa-3x fa-facebook"></i>
				</a>
				<a href="#" style="font-size:10px; margin-left:20px; margin-top:30px;"> 
					<i class="fa fa-3x fa-youtube"></i>
				</a>
				<a href="#" style="font-size:10px; margin-left:20px; margin-top:30px;"> 
					<i class="fa fa-3x fa-twitter"></i>
				</a>
			</div>
		</div>
	</div>
</div>
				<!-- contactus end -->
			
			
					<!-- Footer Start -->
					<hr />
<div class="container"> 
	<div class="row"> 
		<div class="col-md-3 col-sm-3"> 
			<a href="index.php">
				<img src="image/boighorlogo.png" style="margin-left:-25px; margin-top:-70px;"height="200px;" width="200px;">
			</a>
			<a href="#" style="margin-top:-80px;"class="nav-link"><i class="fa fa-headphones"> </i>01917497927</a>
			<a href="#" class="nav-link"><i class="fa fa-phone"> </i>01917497927</a>
			<a href="#" class="nav-link"><i class="fa fa-envelope"> </i>info@boighor.com</a>
			<a href="#" class="nav-link"><i class="fa fa-address-card"> </i>Level:14, Sattara Center 30/A VIP Road, Naya Paltan, Dhaka</a>
			
		</div>
		<div class="col-md-2 col-xs-6 col-sm-6 col-lg-2"> 
			<h5 style="margin-top:15px; font-size:18px;">Explore By</h5>
				<div style="margin-left:-15px;margin-top:20px;">
			<h6><a href="#" style="line-height:.1;" class="nav-link"><i class="fa"> </i>Category</a></h6>
			<h6><a href="#" style="line-height:.1;" class="nav-link"><i class="fa"> </i>Author</a></h6>
			<h6><a href="#" style="line-height:.1;" class="nav-link"><i class="fa"> </i>Publisher</a></h6>
				</div>
		</div>
		<div class="col-md-2 col-xs-6 col-sm-6 col-lg-2"> 
			<h5 style="margin-top:15px;font-size:18px;">Get To Know Us</h5>
				<div style="margin-left:-15px; margin-top:10px;">
			<h6><a href="contactus.php" style="line-height:.8;" class="nav-link"><i class="fa"> </i>Contact Us</a></h6>
			<h6><a href="aboutus.php" style="line-height:.5;" class="nav-link"><i class="fa"> </i>About Us</a></h6>
			<h6><a href="index.php" style="line-height:.1;" class="nav-link"><i class="fa"> </i>Blog</a></h6>
				</div>
		</div>
		<div class="col-md-2 col-xs-12 col-sm-12 col-lg-2"> 
			<h5 style="margin-top:15px;font-size:18px;">Policy</h5>
				<div style="margin-left:-15px;">
			<h6><a href="#" style="line-height:1.2;" class="nav-link"><i class="fa"> </i>Terms & Conditions</a></h6>
			<h6><a href="#" style="line-height:1.2;" class="nav-link"><i class="fa"> </i>Private Policy</a></h6>
			
				</div>
		</div>
		<div class="col-md-3 col-sm-3"> 
			<h5 style="margin-top:15px; font-size:18px;">Stay Connected With Us</h5>
				
			<a href="#"class="btn  btn-facebook" style="margin-top:20px;">
				<i class="fa fa-3x fa-facebook"></i>
			</a>
			
			<a href="#"class="btn btn-social-icon btn-youtube" style="margin-top:20px;">
				<i class="fa fa-3x fa-youtube"></i>
			</a>
			
			<a href="#"class="btn btn-social-icon btn-twitter" style="margin-top:20px;">
				<i class="fa fa-3x fa-twitter"></i>
			</a>
				
		</div>
	</div>
</div>			

<hr />		
		<div class="copyrights"> 
			<center> 
				<h4 class="text-center text-muted" style="font-size: 14px">Copyrights © 2018 BoiBazar.com</h4>
			</center>
		</div>
		
	
@endsection