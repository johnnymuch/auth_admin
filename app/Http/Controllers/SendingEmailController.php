<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SendingEmailController extends Controller
{
    //
    public function sendingEmail()
    {
    	// echo "string";
    	return view('sendemail.index');
    }
}
