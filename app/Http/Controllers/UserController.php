<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;



class UserController extends Controller
{
    //

    public function create(){

        return view('users.create');

    }

    public function index(){
        return view('users.index');
    }

    public function store(Request $request){
        $requestData = $request->all();
        User::create($requestData);

    }
}
