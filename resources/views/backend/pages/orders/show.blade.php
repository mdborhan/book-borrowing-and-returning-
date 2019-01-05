@extends('backend.layouts.master')

@section('content')
  <div class="main-panel">
    <div class="content-wrapper">

      <div class="card">
        <div class="card-header">
           View Order #BG{{$order->id}}
        </div>
        <div class="card-body">
            @include('backend.partials.messages')
            <h3>Order Informations</h3>
            <div class="row">
                <div class="col-md-6  border-right">
                    <p><strong>Orderer Name:</strong>{{$order->name}}</p>
                    <p><strong>Orderer Phone:</strong>{{$order->phone_no}}</p>
                    <p><strong>Orderer Email:</strong>{{$order->email}}</p>
                    <p><strong>Orderer Shipping_address:</strong>{{$order->shipping_address}}</p>
                    
                </div>
                <div class="col-md-6">
                    <p><strong>Order Payment Method : </strong>{{$order->payment->name}}</p>
                    <p><strong>Order Payment Transaction : </strong>{{$order->transaction_id}}</p>
                </div>
            </div>
            <hr>
            
            <h3>Ordered Items: </h3>
            @if($order->carts->count() > 0)
            
  
    <h2>My Cart Item</h2>
   
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
           @foreach($order->carts as $cart)
           
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
           
        </tbody>
    </table>
       @endif
       
       <hr>
       
        <form action="{{route('admin.order.completed',$order->id)}}" class="form-inline" style="display: inline-block!important;" method="post">
                        @csrf
                        @if($order->is_completed)
                        <input type="submit" value="Cancel Order" class="btn btn-danger">
                        @else
                        <input type="submit" value="Complete Order" class="btn btn-success">
                        @endif
                        
                    </form>
                    
                     <form action="{{route('admin.order.paid',$order->id)}}" class="form-inline" style="display: inline-block!important;" method="post">
                        @csrf
                         @if($order->is_paid)
                        <input type="submit" value="Cancel Payment Order" class="btn btn-danger">
                        @else
                        <input type="submit" value="Paid Order" class="btn btn-success">
                        @endif
                        
                    </form>
                    
                <a href="{{route('admin.order.send_email',$order->id)}}"class="btn btn-success">Confirmation mail send</a>
  
  <div style="margin-bottom:100px;"></div>
  
         
        </div>
      </div>

    </div>
  </div>
  <!-- main-panel ends -->
@endsection
