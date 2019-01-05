<style>
    .cart1{
        
       
       
     float:right;
      
        position: -webkit-sticky;
        position:sticky;
     
        top:100px;
        z-index:1;
        
        
    
    }      
       
     .cart2{
        float:left;
        position: -webkit-sticky;
        position:sticky;
       
        top:100px;
        z-index:1;
        
        
    
    }
         .div{

        position: -webkit-sticky;
        position:sticky;
       
        top:100px;
        z-index:1;
        
        
    
    }
    

</style>
 
          <div class="div">         
         <!--cart button start -->
<a class=" cart1 nav-link" href="{{ route('carts') }}">
    <span class="" style="font-size:50px"><i class="fa fa-cart-plus"></i>
            <button class="btn btn-warning" style="border-radius: 50%; margin-bottom:40px; margin-left:-25px; ">
                {{ App\Models\Cart::totalItems() }} 
            </button>
     </span>
<p style="border-radius: 12px; margin-top:-20px;  font-weight: 900;">BUY  CART</p>
</a>
   
<a class=" cart2 nav-link" href="{{ route('cartsrent') }}">
    <span class="" style="font-size:50px"><i class="fa fa-cart-plus"></i>
            <button class="btn btn-warning" style="border-radius: 50%; margin-bottom:40px; margin-left:-25px; ">
                  {{ App\Models\CartRent::totalItems() }}
            </button>
     </span>
<p style="border-radius: 12px; margin-top:-20px;  font-weight: 900;">RENT CART</p>
</a>
        
 </div>          
        <!--cart button End --> 

   
   <!--
   <style>
    .cart{
        
        float:right;
       
        margin-top:-20px;
        margin-right:20px;
        
        height:100px;
        width:100px;
        position: -webkit-sticky;
        position:sticky;
        top:100px;
        z-index:1;
        
        
    
    }
   

</style>
         
         <!--cart button start -->
<!--<a class=" cart nav-link" href="{{ route('carts') }}">

           
              <span class="mt-1" style="font-size:50px"><i class="fa fa-cart-plus"></i></span>
              <span class="badge badge-warning" style="font-size:15px; margin-left:-30px;opacity: .7;">You Add <br>
                {{ App\Models\Cart::totalItems() }} Books In CART 
              </span>
         

          </a>
                   <!--cart button start -->
<!--<a class=" cart nav-link" href="{{ route('cartsrent') }}">

           
              <span class="mt-1" style="font-size:50px"><i class="fa fa-cart-plus"></i></span>
              <span class="badge badge-warning" style="font-size:15px; margin-left:-30px;opacity: .7;">You Add <br>
                {{ App\Models\CartRent::totalItems() }} Books In CART Rent 
              </span>
         

          </a>
          
        <!--cart button End --> 
    