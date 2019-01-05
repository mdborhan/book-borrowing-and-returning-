<?php

namespace App\Http\Controllers\Backend;
use Mail;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SemdMailController extends Controller
{
    public function send_email(Request $request, $id)
    {
        $user = Order::findOrFail($id);

        Mail::send('emails.reminder', ['user' => $user], function ($m) use ($user) {
            $m->from('nazrulislam94bd@gmail.com', 'BoiGhor');

            $m->to($user->email, $user->name)->subject('Book Order!');
        });
        session()->flash('success','Email send successful..!');
         return back();
    }
}
