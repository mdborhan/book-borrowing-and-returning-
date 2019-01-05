<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\BookSelling;
use App\Models\User;
use App\Notifications\sendEmail;

class BookSellingsController extends Controller
{
   public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
     public function index()
    {
        $orders=BookSelling::orderBy('id','desc')->get();
         
        return view('backend.pages.sellingrequest.index', compact('orders'));
    }
    
     public function send_email($id)
    {
         
        $users=User::find($id);   
         $users->notify(new sendEmail());
          session()->flash('success','Email send successful..!');
         return back();
    }
    
     public function delete($id)
    {
         
        $order=BookSelling::find($id);
         $order->delete();
         
         session()->flash('success','delete successful..!');
        return back();
    }
    
    
   
}
