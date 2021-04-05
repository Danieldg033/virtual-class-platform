<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceived;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MessagesController extends Controller
{
    public function store(Request $request)
    {
        request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'content' => 'required'
        ]);

        Mail::to('daniel@gmail.com')->send(new MessageReceived);
        
        return 'Mensaje enviado';
    }
}
