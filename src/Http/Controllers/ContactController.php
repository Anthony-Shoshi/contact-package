<?php

namespace AnthonyShoshi\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function create()
    {
        return view('contact::contact');
    }

    public function store(Request $request)
    {
        //$request->all() . '<br>' . 
        return config('contact.send_email_address');
    }
}
