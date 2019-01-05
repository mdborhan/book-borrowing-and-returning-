<?php

namespace App\Http\Controllers\Backend;
use Mail;
use App\Models\OrderRent;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SemdRentMailController extends Controller
{
    public function send_email(Request $request, $id)
    {
        $user = OrderRent::findOrFail($id);

        Mail::send('emails.reminder2', ['user' => $user], function ($m) use ($user) {
            $m->from('nazrulislam94bd@gmail.com', 'BoiGhor');

            $m->to($user->email, $user->name)->subject('Book Rent Order!');
        });
        session()->flash('success','Email send successful..!');
         return back();
    }
}
