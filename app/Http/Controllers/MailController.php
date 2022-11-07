<?php

namespace App\Http\Controllers;

use App\Http\Controllers\ContactFormController;
use Exception;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use Mail;


class MailController extends Controller
{

    public function store(Request $request)
    {
        // var_dump($request->all());
        $request->validate([
            'name' => 'required',
            'email'=> 'required|email',
            'fone' => 'required',
            'message' => 'required'
        ]);

        $contact = new ContactFormController($request);

        try {

            $contact->sendEmail();
            return response()->json(['status'=> 'success', 'msg'=>'Obrigado por nos contactar!']);
        }catch (Exception $error){
            return back()->with("error", "Ocorreu um erro inesperado: {$error->getMessage()}");
        }
    }
}
