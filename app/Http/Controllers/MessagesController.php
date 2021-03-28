<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function store(Request $request)
    {
        request()->validate([
            'name' => 'required'
        ]);

        return 'Datos validados';
    }
}
