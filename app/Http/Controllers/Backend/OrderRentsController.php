<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\OrderRent;

class OrderRentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index()
    {
        $orders=OrderRent::orderBy('id','desc')->get();
        return view('backend.pages.ordersrent.index', compact('orders'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order=OrderRent::find($id);
         $order->is_seen_by_admin=1;
         $order->save();
        return view('backend.pages.ordersrent.show', compact('order'));
    }
    
    
         public function completed($id)
    {
         $order=OrderRent::find($id);
         if($order->is_completed)
         {
             $order->is_completed=0;
         }
         else
         {
             $order->is_completed=1;
         }
         $order->save();
         session()->flash('success','order rent completed status changed..!');
        return back();
    }
     public function paid($id)
    {
         $order=OrderRent::find($id);
         if($order->is_paid)
         {
             $order->is_paid=0;
         }
         else
         {
             $order->is_paid=1;
         }
         $order->save();
         session()->flash('success','order rent paid status changed..!');
        return back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
       $order=OrderRent::find($id);
         $order->delete();
         
         session()->flash('success','delete successful..!');
        return back();
    }
}
