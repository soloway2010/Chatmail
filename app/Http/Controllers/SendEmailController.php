<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class SendEmailController extends Controller
{
    function index()
    {
    	return view('send_email');
    }

    function send(Request $request)
    {
     	$this->validate($request, [
      		'to'  =>  'required|email',
      		'subject' =>  'required',
      		'text' =>  'required',
     	]);

        $data = array(
            'subject'      =>  $request->subject,
            'text'   =>   $request->text,
        );

     	Mail::to($request->to)->send(new SendMail($data));
     	return back()->with('success', 'Mail has been sent!');
    }
}
