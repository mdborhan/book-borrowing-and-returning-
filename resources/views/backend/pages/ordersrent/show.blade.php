@extends('backend.layouts.master')

@section('content')
  <div class="main-panel">
    <div class="content-wrapper">

      <div class="card">
        <div class="card-header">
           View Rent Order #BG{{$order->id}}
        </div>
        <div class="card-body">
            @include('backend.partials.messages')
            <h3>Order Rent Informations</h3>
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
            
           
       
       <hr>
       
        <form action="{{route('admin.orderrent.completed',$order->id)}}" class="form-inline" style="display: inline-block!important;" method="post">
                        @csrf
                        @if($order->is_completed)
                        <input type="submit" value="Cancel Rent Order" class="btn btn-danger">
                        @else
                        <input type="submit" value="Complete Rent Order" class="btn btn-success">
                        @endif
                        
                    </form>
                    
                     <form action="{{route('admin.orderrent.paid',$order->id)}}" class="form-inline" style="display: inline-block!important;" method="post">
                        @csrf
                         @if($order->is_paid)
                        <input type="submit" value="Cancel Rent Payment Order" class="btn btn-danger">
                        @else
                        <input type="submit" value="Paid Rent Order" class="btn btn-success">
                        @endif
                        
                    </form>
                    <a href="{{route('admin.orderrent.send_email',$order->id)}}"class="btn btn-success">Confirmation mail send</a>
                      
                 
                   
             
  
         
        </div>
      </div>

    </div>
  </div>
  <!-- main-panel ends -->
@endsection
