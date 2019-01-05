<!-- partial:partials/_navbar.html -->
<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
  <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
    <a class="navbar-brand brand-logo" href="{{ route('admin.index') }}"><img src="{{ asset('images/boighorlogo.png') }}" alt="logo" style="height:100px; width:200px";/></a>
    
  </div>
  <div class="navbar-menu-wrapper d-flex align-items-center">
    <ul class="navbar-nav navbar-nav-left header-links d-none d-md-flex">
      
      <li class="nav-item active">
        <a href="#" class="nav-link"><i class="mdi mdi-email-outline"></i>Inbox</a>
      </li>
      
    </ul>
   
    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
      <span class="icon-menu"></span>
    </button>
  </div>
</nav>
