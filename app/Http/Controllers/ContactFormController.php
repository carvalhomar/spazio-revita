<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Mail;
use App\Mail\RevitaMail;

class ContactFormController extends Controller
{

    private $name;
    private $email;
    private $mesage;

    public function __construct(Request $request)
    {
        $this->name = $request->name;
        $this->email = $request->email;
        $this->mesage = $request->mesage;
    }

    public function sendEmail()
    {
        $details = [
            'title'=> 'E-mail enviado pelo site',
            'name' => $this->name,
            'email'=> $this->email,
            'mesage' => $this->mesage,
        ];

        Mail::to( config('mail.from.address'))
            ->send( new RevitaMail($details));
    }
}
