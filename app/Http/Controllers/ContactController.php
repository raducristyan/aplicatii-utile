<?php

namespace App\Http\Controllers;

use Auth;
use Mail;
use App\User;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{

    public function index()
    {
        $title = "Contact";
        return view('contact.contact', compact('title'));
    }

    public function sendMessage(Request $request)
    {
        $rules = [
            'email' => 'required|email',
            'subject' => 'required|min:5|max:60',
            'body' => 'required|min:15|max:1000'
        ];
        $this->validate($request, $rules);

        $user = Auth::user();

        Mail::send('contact.email', ['body' => $request->body], function ($m) use ($user, $request) {
            $m->from($request->email, $user->firstName." ".$user->lastName);

            $m->to('raducristyan@gmail.com')->subject($request->subject);
        });
    }
}
