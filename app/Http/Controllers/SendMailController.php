<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\OrderShipped;
use Mail;

class SendMailController extends Controller
{
    //
    public function sendMail()
    {
    	$content = [
    		'title'=> 'Welcome to sending Email', 
    		'body'=> 'The body of your message.',
    		'button' => 'Click Here'
    		];

    	$receiverAddress = 'johnny@2ntkh.com';

    	Mail::to($receiverAddress)->send(new OrderShipped($content));

    	dd('mail send successfully');
    }
}
