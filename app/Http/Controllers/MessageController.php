<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;


class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {    
            $messages=Message::get();
            return view('messages.index', compact('messages'));
    }

/**
     * Show the form for creating a new message.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $assignedCats=[];
        return view('messages.create',compact('assignedCats'));

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {                                        
        $message = $this->validate(request(), [
            'email' => 'email|required', 
            'name' => 'required|min:5', 
            'subject' => 'required|min:5', 
            'content'=>'required|min:10'
        ]);

        if(strtoupper($request->my_question) === "DUTCH"){
            Message::create($message);
            return redirect('/')->with('success', 'Message has been sent');  
        }else
        {
            return redirect('/')->with('failure', 'No Message has been sent');  
        }
  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function show(Message $message)
    {
            $message=Message::find($message->id);                         
            return view('messages.show', compact('message'));    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function edit(Message $message)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Message $message)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function destroy(Message $message)
    {
                     
            $message = Message::find($message->id); 
            $message->delete();
            return redirect ('message')->with('Success', 'Message has been deleted');  

    }
}
