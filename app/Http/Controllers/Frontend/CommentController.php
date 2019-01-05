<?php

namespace App\Http\Controllers\Frontend;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Comment;
use App\Models\User;
use Auth;

class CommentController extends Controller
{
  public function addProductComment(Request $request, Product $product) {
      $this->validate($request,[
          'body'=>'required'
      ]);
      $comment = new Comment();
      $comment->body = $request->body;
      if (Auth::guest()) {
    $comment = $request->get('comment');
    return redirect('login')->with('comment', $comment);
}
      $comment->user_id = auth()->user()->id;
      $product->comments()->save($comment);
      return back();
  }

 


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comment $comment)
    {
        $this->validate($request,[
          'body'=>'required'
          ],
            [
      'body.required' => 'Please write commnet'
    ]);
        
         if (Auth::guest()) {
    $comment = $request->get('comment');
    return redirect('login');
}
    
            $comment->update($request->all());
       
       
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        if (Auth::guest()) {
    
    return redirect('login');
}
      $comment->delete();
        return back();
    }
}
