
 <style>
     #btn1{
       font-weight:900;  
         color: white;
         
     }
     #btn1:hover{
       border: 2px solid blue;
        color:white;
         background-color: blue;
     }
</style>

 
 
 <form class="form-inline" action="{{ route('cartsrent.store') }}" method="post">
  @csrf
  <input type="hidden" name="product_id" value="{{ $product->id }}">
  <button id="btn1" type="submit" class="btn btn-warning" ><i class="fa fa-plus"></i>ADD TO RENT</button>
</form>
 

 <!--
 <form class="form-inline" action="{{ route('cartsrent.store') }}" method="post">
  @csrf
  <input type="hidden" name="product_id" value="{{ $product->id }}">
  <button type="submit" class="btn btn-warning"><i class="fa fa-plus"></i> Add to rent cart</button>
</form>
-->