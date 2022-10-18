<?php

namespace App\Http\Controllers;

use App\Http\Controllers\ContactFormController;
use Exception;
use Illuminate\Http\Request;
use Mail;


class MailController extends Controller
{

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email'=> 'required|email',
            'message' => 'required'
        ]);

        $contact = new ContactFormController($request);

        try {

            $contact->sendEmail();
            return back()
                ->with('success','Obrigado por nos contactar');
        }catch (Exception $error){
            return back()->with("error", "Ocorreu um erro inesperado: {$error->getMessage()}");
        }
    }
}
