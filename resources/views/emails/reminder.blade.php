<center>
    <div class="custom_mail" style="background: #dff0d8; padding:10px">
      
        <h2 style="padding:20px">Welcome {{$user->name}} </h2>
        <p>we've receiving your confirmation of a order</p>
        <hr>
        <h3>You've giving following things - </h3>
        <address>
            <p>Shipping Address - {{$user->shipping_address}}</p>
            <p>Phone Number - {{$user->phone_no}}</p>
            <p>Transaction Id - {{$user->transaction_id}}</p>
            <p>Order Id - #BG{{$user->id}}</p>
        </address>
    
    </div>
</center>
