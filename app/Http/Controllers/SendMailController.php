<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\OrderShipped;
use Mail;
use App\User;

class SendMailController extends Controller
{
    //
    public function sendMail(Request $request)
    {
    	

	// $receiverAddress = 'johnny@2ntkh.com';
       $user = User::where('email',$request->email)->first();

       $content = [
       'token' => $user->token,
        'title'=> 'Welcome Mr.'.$user->name, 
        'body'=> 'The body of your message.',
        'button' => 'Click Here'
        ];
      

        $receiverAddress = $user->email;  
    	Mail::to($receiverAddress)->send(new OrderShipped($content));

    	dd('mail send successfully');
    }


    //
    public function editSending($id)
    {    
         User::whereToken($id)->update(['verified'=> 1]);
    }
}






















