@extends('frontend.pages.users.master')

@section('sub-content')
  <div class='container' style="padding-top:100px; margin-bottom:100px;">
    <h2>Welcome {{ $user->first_name . ' '. $user->last_name }}</h2>
    <p>You can change your profile and every informations here also can request for selling or give rent your new or old books.</p>
    <hr>

    <div class="row">
      <div class="col-md-4">
        <div class="card card-body mt-2 pointer" onclick="location.href='{{ route('user.profile') }}'">
          <h3>Update Profile</h3>
        </div>
      </div>
      
      <div class="col-md-4">
        <div class="card card-body mt-2 pointer" onclick="location.href='{{ route('user.book.selling.page') }}'">
          <h3> Book Selling Request</h3>
        </div>
      </div>
    </div>
  </div>
@endsection
