<?php

namespace App\Http\Controllers\Form;

use App\Http\Controllers\Controller;
use App\User;

class TestController extends Controller
{
    public function listAllUsers()
    {
        $users = User::all();

        return view('listAllUsers', [
            'users' => $users
        ]);
    }

    public function listUser(User $user)
    {
        return view('listUser', [
            'user' => $user
        ]);
    }

    public function formAddUser(User $user)
    {
        return view('addUser');
    }
}
