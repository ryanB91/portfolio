<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use App\Http\Requests;

class ContactController extends Controller
{
    public function create()
    {

        return view('contact.create');
    }

    public function store(ContactFormRequest $request)
    {
        $data = [
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'phoneNumber' => $request->get('phoneNumber'),
            'msg' => $request->get('msg')
        ];

        Mail::send('contact.store', $data, function($message){

            $message->to('ryanbelandres123@gmail.com', 'ryan belandres')->subject('mark1');

        });

        $message = 'Thank you for contacting us!';

        return view('contact.create')->with('message', $message);

    }

}
