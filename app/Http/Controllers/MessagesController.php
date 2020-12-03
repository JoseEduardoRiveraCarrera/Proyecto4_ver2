<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function store(Request $request){

        request()->validate([
            'name' => 'required',
            'email' => 'required',
            'tel' => 'required',
            'content' => 'required|min:5'    
        ]);

        return back()->with('status', 'Mensaje enviado');
    }
}
