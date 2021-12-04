<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Rules\GoogleRecaptcha;


class ContactController extends Controller
{
    public function contactForm()
    {
        return view('contactForm');
    }

    public function storeContactForm(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'msg' => 'required',
            'g-recaptcha-response' => ['required', new GoogleRecaptcha]
        ]);

        $input = $request->all();
                
         
        //  Send mail to admin
            \Mail::send('home.contactMail', array(
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'msg' => $request->get('msg'),
            ), function($message) use ($request){
                $message->from($request->email);
                $message->to('info@novaboosting.com', 'Admin')->subject('New website message from ' . $request->get('name'));
            });   
        
        

        return redirect()->back()->with(['success' => 'Message Sent Successfully']);
    }
}
