<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;



class UserController extends Controller
{
    //

    public function index()
    {
        $users = User::all();
        return view(
            'users.index',
            ['users' => $users]
        );
    }

    public function create()
    {

        return view('users.create');
    }

    public function store(Request $request)
    {
        /*$requestData = $request->all();
        User::create($requestData);*/

        //Simples
        User::create($request->all());
        return redirect()->route('users.index');
    }
}
