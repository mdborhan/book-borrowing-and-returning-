<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Notifications\OrderSendEmail;

class OrdersController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth:admin');
    }
     public function index()
    {
        $orders=Order::orderBy('id','desc')->get();
        return view('backend.pages.orders.index', compact('orders'));
    }
    
     public function show($id)
    {
         
        $order=Order::find($id);
         $order->is_seen_by_admin=1;
         $order->save();
        return view('backend.pages.orders.show', compact('order'));
    }
    
     public function delete($id)
    {
         
        $order=Order::find($id);
         $order->delete();
         
         session()->flash('success','delete successful..!');
        return back();
    }
    
     public function completed($id)
    {
         $order=Order::find($id);
         if($order->is_completed)
         {
             $order->is_completed=0;
         }
         else
         {
             $order->is_completed=1;
         }
         $order->save();
         session()->flash('success','order completed status changed..!');
        return back();
    }
     public function paid($id)
    {
         $order=Order::find($id);
         if($order->is_paid)
         {
             $order->is_paid=0;
         }
         else
         {
             $order->is_paid=1;
         }
         $order->save();
         session()->flash('success','order paid status changed..!');
        return back();
    }
     public function send_email($id)
    {
         
        $user=Order::find($id);  
         $user->notify(new OrderSendEmail());
          session()->flash('success','Email send successful..!');
         return back();
    }
}
