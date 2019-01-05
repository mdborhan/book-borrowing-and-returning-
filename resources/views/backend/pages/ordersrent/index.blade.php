@extends('backend.layouts.master')

@section('content')
  <div class="main-panel">
    <div class="content-wrapper">

      <div class="card">
        <div class="card-header">
           Manage Rent Order
        </div>
        <div class="card-body">
            @include('backend.partials.messages')
          <table class="table table-hover table-striped" id="datatable">
             <thead>
                <tr>
                     <th>#</th>
                     <th>Order ID</th>
                     <th>Orderer Name</th>
                      <th>Orderer Phone No</th>
                     <th>Orderer Status</th>  
                      <th>Action</th>
                 </tr>
                        
            </thead>
                        
             <tbody>
             @foreach ($orders as $order)
                <tr>
                   <td>{{$loop->index+1}}</td>
                    <td>#LE{{$order->id}}</td>
                     <td>{{$order->name}}</td>
                     <td>{{$order->phone_no}}</td>
                            
                     <td>
                        <p>
                        @if($order->is_seen_by_admin)
                         <button type="button" class="btn btn-success btn-sm">Seen</button>
                        @else
                                
                         <button type="button" class="btn btn-warning btn-sm">Unseen</button>
                                
                         @endif
                                </p>
                                
                                <p>
                                    @if($order->is_completed)
                                   <button type="button" class="btn btn-success btn-sm">Completed</button>
                                @else
                                
                                <button type="button" class="btn btn-warning btn-sm">Not Completed</button>
                                
                                @endif
                                </p>
                                
                                <p>
                                    @if($order->is_paid)
                                   <button type="button" class="btn btn-success btn-sm">Paid</button>
                                @else
                                
                                <button type="button" class="btn btn-danger btn-sm">Unpaid</button>
                                
                                @endif
                                </p>
                                </td>
                            
                           
                            
                            <td>
                                <a href="{{route('admin.orderrent.show',$order->id)}}" class="btn btn-info">View</a>
                                <a href="#deleteModal{{$order->id}}" data-toggle="modal" class="btn btn-danger">Delete</a>
                                
                                                            <!-- Delete Modal -->
                            <div class="modal fade" id="deleteModal{{$order->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header" style="border-bottom:none;">
                                   
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                      <h5 class="modal-title" style="font-size:18px; font-weight:900; text-align:center;" id="exampleModalLongTitle">Are you sure to delete?</h5>
                                      
                                  
                                  </div>
                                  <div class="modal-footer" style="border-top:none;">
                                    <form action="{!!route('admin.orderrent.delete',$order->id)!!}" method="post">
                                          {{csrf_field()}}
                                          <button type="subnit" class="btn btn-danger">Yes</button>
                                      
                                      </form>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
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
                            <th>Order ID</th>
                            <th>Orderer Name</th>
                            <th>Orderer Phone No</th>
                            <th>Orderer Status</th>
                            
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
