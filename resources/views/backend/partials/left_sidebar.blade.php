<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar" >
  <ul class="nav">
    <li class="nav-item nav-profile">
      <div class="nav-link">
        <div class="profile-image"> <img src="{{asset('images/faces/mam.png')}}" alt="image"/> <span class="online-status online"></span> </div>
        <div class="profile-name">
          <p class="name">Aysha Siddika</p>
          <p class="designation">Admin</p>
          <div class="badge badge-teal mx-auto mt-3">Online</div>
        </div>
      </div>
    </li>
    <li class=" btn btn-success btn-lg btn-block" style="height:50px;"><a class="nav-link" style="height:50px; color:white; font-siize:22px; font-weight:900; padding-bottom:10px;" href="{{ route('admin.index') }}"><span class="menu-title">Dashboard</span></a></li>
    
    
   
      <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages">  <span class="menu-title">PRODUCTS</span></a>
      <div class="collapse" id="general-pages">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="{{ route('admin.products') }}">All Products</a></li>
          <li class="nav-item"> <a class="nav-link" href="{{ route('admin.product.create') }}">Add Product</a></li>
          </ul>
      </div>
    </li>
    
     <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#order-pages" aria-expanded="false" aria-controls="order-pages">  <span class="menu-title">USER BUY ORDERS</span></a>
      <div class="collapse" id="order-pages">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="{{ route('admin.orders') }}">All Buy Orders</a></li>
          </ul>
      </div>
    </li>
    
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#orderrent-pages" aria-expanded="false" aria-controls="order-pages">  <span class="menu-title">USER RENT ORDERS</span></a>
      <div class="collapse" id="orderrent-pages">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="{{ route('admin.orderrent') }}">All Rent Orders</a></li>
          </ul>
      </div>
    </li>
    
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#sell-pages" aria-expanded="false" aria-controls="order-pages">  <span class="menu-title">USER SELLING REQUEST</span></a>
      <div class="collapse" id="sell-pages">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="{{ route('admin.selling') }}">All Sell Request</a></li>
          </ul>
      </div>
    </li>
    
    
          
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#category-pages" aria-expanded="false" aria-controls="general-pages">  <span class="menu-title">CATEGORIES</span></a>
      <div class="collapse" id="category-pages">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="{{ route('admin.categories') }}">All Category</a></li>
          <li class="nav-item"> <a class="nav-link" href="{{ route('admin.category.create') }}">Add Category</a></li>
          </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#brand-pages" aria-expanded="false" aria-controls="general-pages">  <span class="menu-title">
        AUTHOR</span></a>
      <div class="collapse" id="brand-pages">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="{{ route('admin.brands') }}">All Author</a></li>
          <li class="nav-item"> <a class="nav-link" href="{{ route('admin.brand.create') }}">Add Author</a></li>
          </ul>
      </div>
    </li>

    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#division-pages" aria-expanded="false" aria-controls="general-pages"> <span class="menu-title">
        DISTRICTS</span></a>
      <div class="collapse" id="division-pages">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="{{ route('admin.divisions') }}">All Districts</a></li>
          <li class="nav-item"> <a class="nav-link" href="{{ route('admin.division.create') }}">Add District</a></li>
          </ul>
      </div>
    </li>


    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#district-pages" aria-expanded="false" aria-controls="general-pages">  <span class="menu-title">
       AREA</span></a>
      <div class="collapse" id="district-pages">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="{{ route('admin.districts') }}">All Area</a></li>
          <li class="nav-item"> <a class="nav-link" href="{{ route('admin.district.create') }}">Add Area</a></li>
          </ul>
      </div>
    </li>
    
 
<li class="nav-item">
      <a class="nav-link"  href="#district-pages">
          <form class="form-inline"action="{{route('admin.logout')}}" method="post">
              @csrf
              <input type="submit" value="Logout Now" class="btn btn-danger">
          </form>
      </a>
      
    </li>

  </ul>
</nav>
<!-- partial -->
