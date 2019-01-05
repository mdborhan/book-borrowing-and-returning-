@extends('frontend.layouts.master')

@section('title')
  {{ $product->title }} | BoiGhor.com
@endsection

@section('content')

  <!-- Start Sidebar + Content -->
  <div class="row" style="margin-top:50px; margin-bottom:50px;">
      <div class="col-md-2"></div>
      <div class="col-md-8">
          <button class="btn btn-success btn-lg btn-block">Details About >> {{ $product->title }}</button>
      </div>
      <div class="col-md-2"></div>
  </div>
  <div class='container margin-top-20'>
    <div class="row">
      <div class="col-md-4">

        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="height:350px; width:250px;">
          <div class="carousel-inner">
            @php $i = 1; @endphp
            @foreach ($product->images as $image)
              <div class="product-item carousel-item {{ $i == 1 ? 'active':'' }}" style="height:350px; width:250px;">
               <center> <img class="d-block w-100" src="{!! asset('images/products/'.$image->image) !!}" alt="First slide" style="height:350px; width:200px;">
               
               </center>
              </div>
                <div class="lookinside"style="margin-top:0px;">
                 <style>
                     .ah:hover{
                         background:#00ffdd;
                         color:white;
                     }    
                </style>
                  <a href="#" class="btn ah" style="display:block;margin-bottom:10px;text-decoration:none; border:5px solid #00ffdd;padding:5px;font-size:22px;font-weight:900;" data-toggle="modal" data-target="#exampleModal">Look Inside</a> 
                

<!-- Modal -->
<div class="modal fade"style=""id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog modal-lg" role="document" style="background:#00ffdd;">
    <div class="modal-content" style="background:#00ffdd;">
      <div class="modal-header">
        <center><h5 class="modal-title" id="exampleModalLabel" style="color:black;font-weight:900; margin-left:50px;">{{ $product->title }}</h5></center>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <embed src="{!! asset('images/products/'.$image->pdf) !!}" frameborder="0" width="100%" height="400px">
      </div>
      <div class="modal-footer">
       
        <style>
            .abtn1:hover{
                background:red;
                color:white;
            }  
        </style>
        <a href="#"data-dismiss="modal" class="btn abtn1" style="border:5px solid red; color:black; font-weight:900; fotn-size:18px;">Close</a>
       
      </div>
    </div>
  </div>
</div>                
                         
                          
                           
                            
                             
                              
                                
                </div>
                 
              @php $i++; @endphp
            @endforeach
          </div>
          <a class="carousel-control-prev" style="background:black; height:30px; margin-top:175px;" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" style="background:black; height:30px; margin-top:175px; " href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

       
      </div>

      <div class="col-md-8">
        <div class="widget">
          <h3>Book Name: <strong> {{ $product->title }}</strong></h3>
          <h3>Author Name: <strong> {{ $product->brand->name }}</strong></h3>
          <h3>Category: <strong>{{ $product->category->name }} </strong></h3>
          <h3>Price Per Unit: <strong>{{ $product->price }}</strong> <mark>Taka</mark>
          <h3>Rent Charge: <strong>{{ $product->rent_charge }}</strong> <mark>Taka</mark>
            <span class="badge badge-primary">
              {{ $product->quantity  < 1 ? 'No Item is Available' : $product->quantity.' Items in stock' }}
              
            </span>
          </h3>
      

          <div class="product-description">
            {!! $product->description !!}
          </div>
        </div>
        <div class="widget">

        </div>
      </div>
   


    </div>
      <div class="row" style="margin-top:50px;">
          <div class="col-md-4"></div>
          <div class="col-md-8">
              <div class="row">
                  <div class="col-md-6">
                     
 <style>
  
</style>

 
 <form class="form-inline" action="{{ route('carts.store') }}" method="post">
  @csrf
  <input type="hidden" name="product_id" value="{{ $product->id }}">
  <button id="" type="submit" class="btn btn-outline-success btn-lg btn-block" styel="font-weight:900;-webkit-border-radius: 6px;
-moz-border-radius: 6px;
border-radius: 6px; ">ADD TO BUY <i class="fa fa-cart-plus"></i></button>
</form>

                  </div>
                  <div class="col-md-6">


 
 
 <form class="form-inline" action="{{ route('cartsrent.store') }}" method="post">
  @csrf
  <input type="hidden" name="product_id" value="{{ $product->id }}">
  <button id="" type="submit" class="btn btn-outline-success btn-lg btn-block" styel="font-weight:900;border-radius:50%; " >ADD TO RENT <i class="fa fa-cart-plus"></i></button>
</form>
 
                  </div>
              </div>
          </div>
         
      </div>
      
      <hr>
<!--coment section here -->      
      

   
       @include('frontend.partials.comment')
  </div>

  <!-- End Sidebar + Content -->
@endsection
