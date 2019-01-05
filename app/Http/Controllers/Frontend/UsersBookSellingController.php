<?php

namespace App\Http\Controllers\Frontend;

use App\cr;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\BookSelling;
use Auth;
use File;
use Image;

class UsersBookSellingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function __construct()
  {
    $this->middleware('auth');
  }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function profilebook()
    {
        $user = Auth::User();
        return view('frontend.pages.users.book-selling-request',compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function selling(Request $request,$id)
    {
        
        
        $book_sell= new BookSelling();
        $user= User::find($id); 
            $this->validate($request, [
      'bookName' => 'required|string|max:50',
      'authorName' => 'nullable|string|max:50',
      'bookType' => 'required|max:100|',
      'bookPrice' => 'required|numeric',
      'bookQuantity' => 'required|numeric',
      
      
    ]);
        if($request->bookImage)
        {
            $image = $request->file('bookImage');
        $img = time() . '.'. $image->getClientOriginalExtension();
        $location = public_path('images/products/' .$img);
        Image::make($image)->save($location);
            
        }
        
        
        $book_sell->user_id = $user->id;
        $book_sell->user_name= $user->username;
    $book_sell->book_name = $request->bookName;
    $book_sell->author_name = $request->authorName;
    $book_sell->book_type = $request->bookType;
    $book_sell->price = $request->bookPrice;
    $book_sell->quantity = $request->bookQuantity;
    $book_sell->phone_no = $request->userphone;
    $book_sell->image = $img;
            
        
    $book_sell->save();
        
        session()->flash('success', 'Selling request send succefully, Please wait admin confirmation mail !!');
    return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function show(cr $cr)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function edit(cr $cr)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cr $cr)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function destroy(cr $cr)
    {
        //
    }
}
