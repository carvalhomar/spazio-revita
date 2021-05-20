<?php

namespace App\Http\Controllers;

use App\Http\Controllers\ContactFormController;
use Illuminate\Http\Request;
use Mail;


class MailController extends Controller
{

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email'=> 'required|email',
            'mesage' => 'required'
        ]);

        $contact = new ContactFormController($request);

        try {

            $contact->sendEmail();
            return back()
                ->with('success','Obrigado por nos contactar');

        }catch (Exceptions $error){

            return back()->with("error", "Ocorreu um erro inesperado: {$error->getMessage()}");

        }



    }
}
