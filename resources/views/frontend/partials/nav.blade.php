<!-- Top Menu Bar Start -->	
<div class=""style="background-color:#a93226 ;">	
<div class="container" > 
	<div class="row  navbar-expand-md" > 
		<div class="col-lg-2 d-none d-md-block"> </div>
		<div class="col-md-9 col-lg-7 d-none d-md-block">
		<div class="container">	
           <ul class="navbar-nav"> 
				<li class="nav-item"> 
					<a href="#" class="nav-link" style="color:#fff;">
					<i class="fa fa-envelope-square"></i> boighordotcom@gmail.com</a>
				</li>
			</ul>
		</div>
		</div>
		
		<div class="col-md-3 col-lg-3 d-none d-md-block"> 
			<ul class="navbar-nav"> 
				<li class="nav-item"> 
					<a href="#" class="nav-link" style="color:#fff;"><i class="fa fa-headphones"> </i>01682180100</a>
				</li>
			</ul>
		</div>
	</div>
</div>
</div>
			<!-- Top Menu Bar End -->
			<!-- second Top Menu Bar Start -->
 

 <nav class="navbar navbar-expand-lg navbar-light bg-light " style="position:sticky;
    top:0px; z-index:2;">
  <div class="container">


    <a class="navbar-brand" href="{{ route('index') }}"><img style="" src="{{asset('images/boighorlogo2.png')}}"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-5">
      
      <li class="nav-item" >
						<a class="nav-link" href="{{ route('index') }}" style=" font-size:20;"><i class="fa fa-home"></i>HOME <span class="sr-only">(current)</span></a>
					</li>
						
						
					 <li class="nav-item" >
						<a class="nav-link" href="{{ route('about') }}" style=" font-size:20;"><i class="fa fa-address-card"></i>ABOUT US</a>
					</li>
						
					<li class="nav-item" >
						<a class="nav-link" href="{{ route('contact') }}"style=" font-size:20;"><i class="fa fa-building"></i>CONTACT US</a>
					</li>
   
      <li class="nav-item ">
          <form class="form-inline my-2 my-lg-0" action="{!! route('search') !!}" method="get">
            {{-- <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> --}}
            <div class="input-group mb-3">
              <input type="text" class="form-control" name="search" placeholder="Search by Books, Authors, Price and Category......" aria-label="Recipient's username" aria-describedby="basic-addon2" style="width:350px; font-size:14px;">
              <div class="input-group-append">
                <button class="btn btn-outline-secondary" name="submit" value="submit"  type="button"><i class="fa fa-search"></i></button>
              </div>
            </div>

          </form>
      
        </li> 
        
       

      </ul>

      <ul class="navbar-nav ml-auto">
          
           
  <!--         
          <li>
            
             <!-- Trigger the modal with a button -->
  <!--       <a data-toggle="modal" href="#searchModal1"class="btn">
           <span class="mt-1">
            <i class="fa fa-search"></i>Search
            </span>
        </a>
        <!-- Modal -->

    <!--     <div id="searchModal1" style="border-radius:5px;" class="modal fade" role="dialog" aria-hidden="true" aria-labelledby="exampleModalLabel" >
<form class="modal-dialog modal-lg" action="{!! route('search') !!}" method="get">		
           
                <!-- Modal content-->
    <!--          <div class="modal-content bg-light" style="margin-left:0px">
<div class="modal-header" style="border-bottom:0px;">
           
   <p id="rcorners1" class="close " data-dismiss="modal" aria-label="close">&times; </p>
                        </div>`
<div class="input-group mb-3" style="padding-left:20px; padding-right:25px;padding-bottom:25px; margin-top:-35px;">
  <input type="text" style="padding:15px; box-shadow:none; border-right:none; font-size:20px;" 
  class="form-control"name="search" placeholder="Search Products" aria-label="Recipient's username" aria-describedby="basic-addon2">
  <div class="input-group-append" style="width:50px; font-size:20px;">
    <button class="search-button" type="button"><i class="fa fa-search"></i></button>
  </div>
</div>
                </div>
          
</form>
        </div>
        </li>-->
   
    
        
     <!--   <li>
          <a class="nav-link" href="{{ route('carts') }}">

            
              <span class="mt-1"><i class="fa fa-cart-plus"></i>Cart</span>
              <span class="badge badge-warning">
                {{ App\Models\Cart::totalItems() }}
              </span>
         

          </a>
        </li>-->
        
        @guest
          <li><a class="nav-link" href="{{ route('login') }}"><i class="fa fa-sign-in-alt"></i>Login</a></li>
          <li><a class="nav-link" href="{{ route('register') }}">Register</a></li>
        @else
          <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <img src="{{ App\Helpers\ImageHelper::getUserImage(Auth::user()->id) }}" class="img rounded-circle" style="width:40px">
              {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}
              <span class="caret"></span>
            </a>

            <div class="dropdown-menu" aria-labelledby="navbarDropdown">

              <a class="dropdown-item" href="{{ route('user.dashboard') }}">
                My dashboard
              </a>

              <a class="dropdown-item" href="{{ route('logout') }}"
              onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
              Logout
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
            </form>
          </div>
        </li>
      @endguest
    </ul>

  </div>
</div>
</nav>
         <!-- second Top Menu Bar End -->
         <!-- Third Top Menu Bar Start -->
         
         
<div class="bg-light" style="width:99%;">
			
					
<nav class="navbar row navbar-expand-sm navbar-light bg-light" id="semenu"style="">
<div class="container">
<div class="col-lg-3  d-none d-md-block"> </div>
	<div class="col-sm-12 col-md-12 col-lg-8   d-none d-md-block" id="navbarNavDropdown">
		<ul class="navbar-nav">
           <!--
            <li class="nav-item dropdown" id="smenu">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" 
				role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">CATEGORIES
				</a>
				
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>-->
        <li class="nav-item">
        <a class="nav-link" href=" {{route('products')}}">MORE BOOKS</a>
      </li>
	    <!--    <li class="nav-item dropdown" id="smenu">
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
      </li>-->
      <li class="nav-item">
        <a class="nav-link" href="#">AUTHORS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">PUBLISHERS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">BOIMAELA</a>
      </li>
	  
    </ul>
  </div>
  <div class="col-lg-1  d-none d-md-block"> </div>
    </div>
</nav>

</div>
     <!--   Third Top Menu Bar End -->
