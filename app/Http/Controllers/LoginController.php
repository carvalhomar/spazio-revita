<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Access\Response;

class LoginController extends Controller
{
    public function __construct()
    {
        session_start();
    }
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

        $_SESSION['name'] = $name;
        $_SESSION['user'] = $user;
        $_SESSION['user_id'] = $id;

        return response()->json('success');
    }

    public function logout()
    {
        session_destroy();
        return redirect()->route('login');
    }

}
