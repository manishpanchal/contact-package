<?php

namespace manishpanchal\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use manishpanchal\Contact\Mail\ContactMailable;
use manishpanchal\Contact\Models\Contact;

class ContactController extends Controller 
{
    //
    public function index()
    {
        return view('contact::contact');
    }

    public function send(Request $request){
        //return $request->all();
        Mail::to( config('contact.send_to_email'))->send(new ContactMailable($request->name,$request->message));
        Contact::create($request->all());
        return redirect()->route('contact')->with('success','Contact Created Successfully...');
    }
    
}
