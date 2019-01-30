<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\Contact;
use App\Page;
use App\Post;

class EmailController extends DataController
{

	public function sendEmail(Request $request)
	{

		$data = array(

			'name' => $request->name,
			'email' => $request->email,
			'msg' => $request->message

		);

		Mail::send('emails.contact', $data, function($message) use ($data)
		{
		    $message
		    ->to('amlok@home.nl')
		    ->from($data['email'], $data['email'])
		    ->replyTo($data['email'], $data['name'])
		    ->subject('Contactbericht website');
		});

		// Flash succes message
        session()->flash('formSend', 'Bericht succesvol verstuurd!');

		return redirect()->route('index');

	}

}
