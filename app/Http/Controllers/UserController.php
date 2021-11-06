<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{

    public function __construct()
    {
        if (!Session::has('user')) {
            return redirect()->route('login');
        }
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //load all data from the users table
        $users = User::select(['user.name', 'user.user', 'user.email', 'user.id', 'usertype.type'])->join('usertype', 'user.usertype_id', '=', 'usertype.id')->get();
        return view('dashboard.user')->with('users', $users);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.user.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        User::updateOrCreate(
            ['id' => $request->post('userId')],
            [
                'name'=>$request->post('name'),
                'user'=>$request->post('user'),
                'email'=>$request->post('email'),
                'password'=> password_hash($request->post('password'),PASSWORD_DEFAULT),
                'usertype_id'=>$request->post('usertype')
            ]
        );

        return response()->json(['status'=> 'success', 'msg'=>'Usuário salvo com sucesso!']);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response()->json(User::find($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['id'] = $id;
        return view('dashboard.user.form', $data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        return true;
    }
}
