<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UsersRequest;
use App\Models\User;
class UsersController extends Controller
{
    public function submit(UsersRequest $req)
    {

        $user = new User();
        $user->login = $req->input('login');
        $user->telephone = $req->input('telephone');
        $user->country = $req->input('country');
        $user->password = $req->input('password');

        $user->save();

        return redirect('/ourplayers');
    }
    public function login(){
        return "Okey 1";
    }

    public function create(){
        return "Okey";
    }

}
