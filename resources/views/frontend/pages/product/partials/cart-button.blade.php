
 <style>
     #btn1{
       font-weight:900;  
         color: white;
         
     }
     #btn1:hover{
 
        color: white;
         background-color: #227e6b;
     }
</style>

 
 <form class="form-inline" action="{{ route('carts.store') }}" method="post">
  @csrf
  <input type="hidden" name="product_id" value="{{ $product->id }}">
  <button id="btn1" type="submit" class="btn btn-success " ><i class="fa fa-plus"></i>ADD TO BUY</button>
</form>
