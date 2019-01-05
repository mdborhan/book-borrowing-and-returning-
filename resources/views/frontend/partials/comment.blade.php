
   

   <div class="comment-list">
    @foreach($product->comments as $comment)
    
    <h5>Review: <strong>{{$comment->body}}</strong> </h5>
   <h6> <mark>Given by: <strong>{{$comment->user->first_name}} {{$comment->user->last_name}}</strong></mark></h6>
    
    <div class="actions">
       <div class="row">
           <div class="col-md-1" width="100%">
               
            <a href="#{{$comment->id}}" class="btn btn-primary btn-xs" data-toggle="modal"> Edit</a>
      <div class="modal fade" id="{{$comment->id}}">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title"> </h4>
                  </div>
                  <div class="modal-body">
 
<div class="comment-form">
    <form action="{{route('comment.update',$comment->id)}}" method="post" role="form">
    @csrf
    {{method_field('put')}}
    <legend>Edit Review</legend>
    <div class="form-group">
        <input type="text" class="form-control" name="body" id="" placeholder="Input....." value="{{$comment->body}}">
    </div>
    <button type="submit" class="btn btn-primary">Review</button>
    </form>
</div>                    
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                     
                  </div>
              </div>
          </div>
      </div> 
         
           </div>
           <div class="col-md-1" width="100%" style="margin-left:-30px;">
                      <!--Comment Delete Form -->
        <form action="{{route('comment.destroy',$comment->id)}}" method="post" class="inline-it">
            @csrf
            {{method_field('DELETE')}}
            <input class="btn btn-xs btn-danger" type="submit" value="Delete">
        </form>
           </div>
           <div class="col-md-10"></div>
       </div>
    
 
        
    </div>
    @endforeach
</div> 


<div class="comment-form" style="margin-bottom:100px;">
    <form action="{{route('productcomment.store',$product->id)}}" method="post" role="form">
    @csrf
    <legend>Add Review</legend>
    <div class="form-group">
        <input type="text" class="form-control" name="body" id="" placeholder="Add Review....." style="height:100px; width:300px;">
    </div>
    <button type="submit" class="btn btn-primary">Review</button>
    </form>
</div>

