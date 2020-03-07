<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function show()
    {

        return view('contact');
    }

    public function store()
    {
        request()->validate(['email' => 'required|email']);

//        $email = request('email');
//
//        dd($email);
        Mail::raw('It works', function ($message){
            $message->to(request('email'))->subject('Hello There');
        });

        return redirect('/contact')
            ->with('message', 'Email sent !');
    }
}
