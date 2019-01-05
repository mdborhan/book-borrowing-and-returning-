

<!--Make productslide-->

<style>
    .wrapper{width:100%; height:auto; }
    
    .item{background: blue; height: 300px;}
    
    .owl-dots{ display:none;}
  
    .owl-carousel .owl-nav button.owl-next, .owl-carousel .owl-nav button.owl-prev, .owl-carousel button.owl-dot {

    background:blue;
    color: white;
    border: none;
    padding: 10 !important;
    font: inherit;
    font-size:20px;
    width: 50px;
    height: 30px;
}
     .owl-carousel .owl-nav button.owl-next, .owl-carousel .owl-nav button.owl-prev, .owl-carousel button.owl-dot:hover{
         color:aqua;
      
    }
    
    .con {
  position: relative;
  width: 50%;
}

.image {
  display: block;
  width: 100%;
  height: auto;
}

.overlay {
  position: absolute;
  bottom: 100%;
  left: 0;
  right: 0;
  
  overflow: hidden;
  width: 100%;
  height:0;
  transition: .5s ease;

}

.con:hover .overlay {
  bottom: 0;
  height: 100%;
}

.text {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}
    
</style>

<div class="wrapper">

    <div class="owl-carousel owl-theme">
    
        
  @foreach ($products as $product)

    
      <div class="card con" style="height:350px; width:202px; margih-left:20px;">
       
       
        @php $i = 1; @endphp

        @foreach ($product->images as $image)
          @if ($i > 0)
             
              <a href="{!! route('products.show', $product->slug) !!}" style="height:200px; width:200px;">
                <img class="card-img-top feature-img image" style="height:200px; width:200px; " src="{{ asset('images/products/'. $image->image) }}" alt="{{ $product->title }}" >
              </a>
              
          @endif

          @php $i--; @endphp
        @endforeach

        <div class="card-body" style=" height:200px; width:200px; background:#00ffdd;">
          <center>
          <p style="font-size:16px; font-weight:900; line-height:20px;  ">{{ $product->title }}</p>
          <p class="card-text" style="font-size:18px; line-height:10px;">Price:<p1 style="font-weight:900;font-size:16px;"> {{ $product->price }} </p1><p1 style="font-weight:900;">Taka</p1></p>
              <p class="card-text" style="font-size:16px; line-height:5px;">Condition:<p1 style="font-weight:900;font-size:16px;"> {{ $product->book_condition }}</p1> </p>
          </center>
          
        </div>
        
        <div class="overlay">
<a class="text" style="margin-top:-100px;" href="{!! route('products.show', $product->slug) !!}"><button class=" btn btn-info">VIEW MORE</button></a>
    <div class="text" style="">@include('frontend.pages.product.partials.cart-button')</div>
    <div class="text" style="margin-top:150px;">@include('frontend.pages.product.partials.cart-rent-button')</div>
  </div>
      </div>
    

  @endforeach
   </div>
     </div>
   


<style>

</style>




@section('owlcarouselscript')
<script>
    $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    autoplay:true,
    autoplayTimeout:1500,
    autoplayHoverPause:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})
</script>
@endsection