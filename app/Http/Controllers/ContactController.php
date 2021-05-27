<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContact;
use Illuminate\Http\Request;
use App\Mail\ContactMailable;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact.index');
    }

    public function store(StoreContact $request)
    {
        $correo = new ContactMailable($request->all());

        Mail::to('michaelrojasmorales1@gmail.com')->send($correo);

        return redirect()->route('contact.index')->with('info', 'Mensaje enviado');
    }
}
