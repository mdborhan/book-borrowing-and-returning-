<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Auth;

class CartRent extends Model
{
    public $fillable = [
    'user_id',
    'ip_address',
    'product_id',
    'product_quantity',
    'order_id'
  ];
    
     public function user()
  {
    return $this->belongsTo(User::class);
  }

  public function orderRent()
  {
    return $this->belongsTo(OrderRent::class);
  }

  public function product()
  {
    return $this->belongsTo(Product::class);
  }
    
    /**
 * total carts
 * @return integer total cart model
 */
  public static function totalCarts()
  {
    if (Auth::check()) {
      $carts = CartRent::where('user_id', Auth::id())
      ->where('order_id', NULL)
      ->get();
    }else {
      $carts = CartRent::where('ip_address', request()->ip())->where('order_id', NULL)->get();
    }
    return $carts;
  }

/**
 * total  rent Items in the cart
 * @return integer total item
 */
  public static function totalItems()
  {
    if (Auth::check()) {
      $carts = CartRent::where('user_id', Auth::id())
      ->where('order_id', NULL)
      ->get();
    }else {
      $carts = CartRent::where('ip_address', request()->ip())->where('order_id', NULL)->get();
    }

    $total_item = 0;

    foreach ($carts as $cart) {
      $total_item += $cart->product_quantity;
    }
    return $total_item;
  }
}