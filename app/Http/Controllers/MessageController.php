<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Mail\AdminContactMessage;
use App\Mail\ContactMessageConfirmation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate_data = $request->validate([
            'full_name' => 'required|max:70',
            'subject' => 'nullable|max:30',
            'email' => 'required|max:70',
            'message' => 'required'
        ]);

        $validate_data['status']= 'Received';
        $message = Message::create($validate_data);

        Mail::to('Admin@boolpress.com')->send(new AdminContactMessage($message));
        Mail::to($message->email)->send(new ContactMessageConfirmation($message));
        
        return redirect()->route('message.confirmed')->with('status','Message Received Contact you ASAP');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function show(Message $message)
    {
        return view('guest.message_confirmed');
    }
}