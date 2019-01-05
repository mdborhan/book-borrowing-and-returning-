@extends('frontend.layouts.master')

@section('content')
 @if(App\Models\Cart::totalitems()>0)
 <center>
  <div class='container '  style=" margin-left:70px; margin-top:-80px;">
    <h2>My Cart Buy Item</h2>
   
        <table class="table table-bordered table-stripe" width="100%"> 
        <thead>
            <tr>
                <th>No.</th>
                <th>Product Title</th>
                <th>Product Image</th>
                <th>Product Quantaty</th>
                <th>Unit Price</th>
                <th>Total Price</th>
                <th>
                   Delete
                </th>
            </tr>
        </thead>
        <tbody> 
          @php 
              $total_price=0;
          @endphp
           @foreach(App\Models\Cart::totalCarts() as $cart)
           
            <tr>
                <td>{{$loop->index + 1}}</td>
                <td><a href="{{route('products.show',$cart->product->slug)}}">{{$cart->product->title}}</a></td>
                <td>
                    @if($cart->product->images->count()>0)
                    <img src="{{asset('images/products/'.$cart->product->images->first()->image)}}" style="height:50px;width:100px;"alt="">
                    @endif
                </td>
                <td>
                     <form action="{{route('carts.update',$cart->id)}}" class="form-inline" method="post">
                        @csrf
                        <input type="number" name="product_quantity" class="form-control" value="{{$cart->product_quantity}}">
                        <button type="submit" class="btn btn-success"> Update</button>
                    </form>
                </td>
                <td>{{$cart->product->price}}Taka</td>
                <td>
                @php
                $total_price +=$cart->product->price * $cart->product_quantity;
                @endphp
                {{$cart->product->price * $cart->product_quantity}}Taka
                </td>
                <td>
                     <form action="{{route('carts.delete',$cart->id)}}" class="form-inline" method="post">
                        @csrf
                        <input type="hidden" name="cart_id">
                        <button type="submit" class="btn btn-danger"> Delete</button>
                    </form>
                </td>
            </tr>
           @endforeach
           <tr>
               <td colspan="4"></td>
               <td>Total Amount:</td>
               <td colspan="2"><strong>{{$total_price}}Taka</strong></td>
           </tr>
        </tbody>
    </table>
        <div class="float-right">
            <a href="{{route('products')}}" class="btn btn-info btn-lg">Continue Shopping ....</a>
            <a href="{{route('checkouts')}}" class="btn btn-warning btn-lg">Checkout</a>
        </div>
  </div>
  <div style="margin-bottom:100px;"></div>
  </center>
    @else
     <center>
  <div class='container'  style="margin-left:70px; margin-top:80px;">
      <h2>My Cart Item</h2>
    <div class="alart alart-warning" style="margin-top:50px;">
        <strong>There is no item in your Cart.</strong>
        <br>
        <a href="{{route('products')}}" style="margin-top:20px;" class="btn btn-info btn-lg">Continue Shopping</a>
    </div>
     </div>
  <div style="margin-bottom:100px;"></div>
  </center>
    @endif
 
@endsection
