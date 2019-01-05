@extends('backend.layouts.master')

@section('content')
  <div class="main-panel">
    <div class="content-wrapper">

      <div class="card">
        <div class="card-header">
          Manage Divisions
        </div>
        <div class="card-body">
            @include('backend.partials.messages')
          <table class="table table-hover table-striped">
            <tr>
              <th>#</th>
              <th>District Name</th>
              <th>District Priority</th>
              <th>Action</th>
            </tr>

            @foreach ($divisions as $division)
              <tr>
                <td>#</td>
                <td>{{ $division->name }}</td>
                <td>{{ $division->priority }}</td> 

                <td>
                  <a href="{{ route('admin.division.edit', $division->id) }}" class="btn btn-success">Edit</a>

                  <a href="#deleteModal{{ $division->id }}" data-toggle="modal" class="btn btn-danger">Delete</a>

                  <!-- Delete Modal -->
                  <div class="modal fade" id="deleteModal{{ $division->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header" style="border-bottom:none;">
                        
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body" >
                         
                           <h5 class="modal-title" style="font-size:18px; font-weight:900; text-align:center;" id="exampleModalLabel">Are sure to delete?</h5>
                          

                        </div>
                       
                        <div class="modal-footer" style="border-top:none;">
                          <form action="{!! route('admin.division.delete', $division->id) !!}"  method="post">
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger">YES</button>
                          </form>
                          <button type="button" class="btn btn-success" data-dismiss="modal">NO</button>
                        </div>
                      </div>
                    </div>
                  </div>

                </td>
              </tr>
            @endforeach

          </table>
        </div>
      </div>

    </div>
  </div>
  <!-- main-panel ends -->
@endsection
