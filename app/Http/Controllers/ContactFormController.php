<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\RevitaMail;

class ContactFormController extends Controller
{

    private $name;
    private $email;
    private $message;
    private $phone;
    private $subject;

    public function __construct(Request $request)
    {
        $this->name = $request->name;
        $this->email = $request->email;
        $this->message = $request->message;
        $this->phone = $request->fone;
        $this->subject = $request->subject;
    }

    public function sendEmail()
    {
        $details = [
            'title'=> 'E-mail enviado pelo site',
            'name' => $this->name,
            'email'=> $this->email,
            'fone' => $this->phone,
            'message' => $this->message,
            'subject' => $this->subject,
        ];

        Mail::to( config('mail.from.address'))->send( new RevitaMail($details));
    }
}
