<?php

namespace App\Http\Controllers;

use Auth;
use Mail;
use App\User;
use App\Http\Requests;
use App\Mail\ContactEmail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{

    public function index()
    {
        $title = "Contact";
        return view('contact.index', compact('title'));
    }

    public function sendMessage(Request $request)
    {
        $rules = [
            'email' => 'required|email',
            'subject' => 'required|min:3|max:60',
            'body' => 'required|min:15|max:1000'
        ];
        $this->validate($request, $rules);

        $subject = $request->input('subject');
        $body = $request->input('body');
        $from = $request->input('email');

        Mail::to(config('mail.from.address'))->send(new ContactEmail($from, $subject, $body));

        return redirect()->back()->withSuccess('Mesajul a fost trimis.');
    }
}
