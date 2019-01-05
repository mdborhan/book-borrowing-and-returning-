
   

   <style>
    #acard{
        font-size: 18px;
        font-weight: 900;
    }
       
 .con {
  position: relative;
  width: 100%;
}

.image {
  display: block;
  width: 100%;
  height: auto;
}

.overlay {
  position: absolute;
  bottom: 100%;

    +left: 0;
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








  <div class="row">

  @foreach ($products as $product)  

    <div class="col-md-2 col-sm-6 col-xs-12" style="margin-top:20px; margin-left:20px;">
      <div class="card con" style="height:350px; width:200px;">
        {{-- <img class="card-img-top feature-img" src="{{ asset('images/products/'. 'galaxy.png') }}" alt="Card image" > --}}
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
    </div>

  @endforeach

</div>


<!--pagination Start-->

<div class="mt-4 pagination">
 {{ $products->links() }}
</div>

<!--pagination End-->
