@extends('frontend.pages.users.master')

@section('sub-content')
  <div class='container'>
    <div class="card-body mb-5">
      <form method="POST" action="{{ route('user.book.selling.request',$user->id) }}"  enctype="multipart/form-data">
        @csrf

        <div class="form-group row">
          <label for="first_name" class="col-md-4 col-form-label text-md-right">Book Name</label>
          <input type="text" name="bookName" placeholder="Book Name.." required>

          
        </div>

        <div class="form-group row">
          <label for="last_name" class="col-md-4 col-form-label text-md-right">Author Name</label>

           <input type="text" name="authorName" placeholder="Author Name.." required>
        </div>

       

        <div class="form-group row">
          <label for="email" class="col-md-4 col-form-label text-md-right">Book type</label>

           <input type="text" name="bookType" placeholder="Old or New" required>
        </div>
        
        
        <div class="form-group row">
          <label for="email" class="col-md-4 col-form-label text-md-right">Price</label>

           <input type="number" name="bookPrice" placeholder="Book Price.." required>
        </div>
        
        <div class="form-group row">
          <label for="email" class="col-md-4 col-form-label text-md-right">Quantity</label>

           <input type="number" name="bookQuantity" placeholder="Book Quantity.." required>
        </div>

        <div class="form-group row">
          <label for="phone_no" class="col-md-4 col-form-label text-md-right">Phone No</label>
            <input type="text" name="userphone" placeholder="Phone number" required>
          
        </div>

        <div class="form-group row">
          <label for="phone_no" class="col-md-4 col-form-label text-md-right">Book Image</label>
            <input type="file" name="bookImage" required>
          
        </div>

          
        

        

       

        <div class="form-group row mb-0">
          <div class="col-md-6 offset-md-4">
            <button type="submit" class="btn btn-primary">
              Selling Request
            </button>
          </div>
        </div>
      </form>
    
  </div>
@endsection
