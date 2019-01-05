@extends('backend.layouts.master')

@section('content')
  <div class="main-panel">
    <div class="content-wrapper">

      <div class="card">
        <div class="card-header">
           Manage Selling Order
        </div>
        <div class="card-body">
            @include('backend.partials.messages')
          <table class="table table-hover table-striped" id="datatable">
             <thead>
                <tr>
                     <th>#</th>
                     <th>User Name</th>
                     <th>Book Name</th>
                     <th>Author</th>
                     <th>Type</th>
                     <th>price</th>
                      <th>Phone No</th>
                     <th>Quantity</th>  
                     <th>Image</th>  
                      <th>Action</th>
                 </tr>
                        
            </thead>
                        
             <tbody>
             @foreach ($orders as $order)
                <tr>
                   <td>{{$loop->index+1}}</td>
                    <td>{{$order->user_name}}</td>
                     <td>{{$order->book_name}}</td>
                     <td>{{$order->author_name}}</td>
                     <td>{{$order->book_type}}</td>
                     <td>{{$order->price}}</td>
                     <td>{{$order->phone_no}}</td>
                     <td>{{$order->quantity}}</td>
                     <td>
                      <img src="{!! asset('images/products/'.$order->image) !!}" width="200" height="100">
                      </td>                          
                           
                            
                            <td>
                              
                                <a href="{{route('admin.selling.send_email',$order->user_id)}}" class="btn btn-info">Confirm</a>
                                <a href="#deleteModal{{$order->id}}" data-toggle="modal" class="btn btn-danger">Delete</a>
                                
                                                            <!-- Delete Modal -->
                            <div class="modal fade" id="deleteModal{{$order->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Are you sure to delete?</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                      <form action="{!!route('admin.selling.delete',$order->id)!!}" method="post">
                                          {{csrf_field()}}
                                          <button type="subnit" class="btn btn-danger">Permanent Delete</button>
                                      
                                      </form>
                                  
                                  </div>
                                  <div class="modal-footer">
                                    
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            </td>
                        </tr>
                        @endforeach                                    
                        </tbody>
                         <tfoot>
                           <tr>
                            <th>#</th>
                             <th>User Name</th>
                             <th>Book Name</th>
                             <th>Author</th>
                             <th>Type</th>
                             <th>price</th>
                              <th>Phone No</th>
                             <th>Quantity</th>  
                             <th>Image</th>  
                              <th>Action</th>
                        </tr>
                        
                        </tfoot>
                      
                    </table>
        </div>
      </div>

    </div>
  </div>
  <!-- main-panel ends -->
@endsection
