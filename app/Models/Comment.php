<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
class Comment extends Model
{
    protected $fillable =['body','user_id','product_id'];
    
  public function commentable(){
      return $this->morphTo();
  }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    
    
     public static function totalcomment()
  {
    if (Auth::check()) {
      $comment = Comment::where('user_id', Auth::id())
     
      ->get();
    }else {
       session()->flash('error','You need to login first!!');
    }
    return back;
  }
}












