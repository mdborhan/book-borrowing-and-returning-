<?php



namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Auth;

class Cart extends Model
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

  public function order()
  {
    return $this->belongsTo(Order::class);
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
      $carts = Cart::where('user_id', Auth::id())
      ->where('order_id', NULL)
      ->get();
    }else {
      $carts = Cart::where('ip_address', request()->ip())->where('order_id', NULL)->get();
    }
    return $carts;
  }

/**
 * total Items in the cart
 * @return integer total item
 */
  public static function totalItems()
  {
    if (Auth::check()) {
      $carts = Cart::where('user_id', Auth::id())
      ->where('order_id', NULL)
      ->get();
    }else {
      $carts = Cart::where('ip_address', request()->ip())->where('order_id', NULL)->get();
    }

    $total_item = 0;

    foreach ($carts as $cart) {
      $total_item += $cart->product_quantity;
    }
    return $total_item;
  }


}








/*
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Auth;

class Cart extends Model
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

  public function order()
  {
    return $this->belongsTo(Order::class);
  }

  public function product()
  {
    return $this->belongsTo(Product::class);
  }

     public static function totalCarts()
  {
    if (Auth::check()) {
      $carts = Cart::where('user_id', Auth::id())->where('order_id', NULL)->get();
    }else {
      $carts = Cart::where('ip_address', request()->ip())->where('order_id', NULL)->get();
    }

    return $carts;
  }

  public static function totalItems()
  {
    if (Auth::check()) {
      $carts = Cart::where('user_id', Auth::id())->where('order_id', NULL)->get();
    }else {
      $carts = Cart::where('ip_address', request()->ip())->where('order_id', NULL)->get();
    }

    $total_item = 0;

    foreach ($carts as $cart) {
      $total_item += $cart->product_quantity;
    }

    return $total_item;
  }
  
  **/
    
  /*   public static function totalPrice()
  {
    if (Auth::check()) {
      $carts = Cart::orWhere('user_id', Auth::id())
      ->orWhere('ip_address', request()->ip())
      ->get();
    }else {
      $carts = Cart::orWhere('ip_address', request()->ip())->get();
    }

//    $total_item = 0;

   // foreach ($carts as $cart) {
   //   $total_item += $cart->product_quantity;
   // }

   // return $total_item;
  
    
    //product er price cart button er modde dakenor jonno
    
      $total_price=0;
foreach ($carts as $cart) {
      $total_price +=$cart->product->price * $cart->product_quantity;
    }

    return $total_price;
  }



}
*/