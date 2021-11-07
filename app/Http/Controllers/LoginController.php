<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Access\Response;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{

    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $user = $request->post('user');
        $pass = $request->post('password');

        $hash = (new User())->where('user', $user)->value('password');

        if(!$hash || !Hash::check($pass, $hash)){
            return response()->json('error');
        }

        $name = (new User())->where('user', $user)->value('name');
        $id = (new User())->where('user', $user)->value('id');

        //Create any sessions
        Session::put([
            'user'=> $user,
            'name'=> $name,
            'user_id'=> $id,
        ]);

        return response()->json('success');
    }

    public function logout(Request $request)
    {
        $request->session()->flush();

        return redirect()->route('login');
    }

}
