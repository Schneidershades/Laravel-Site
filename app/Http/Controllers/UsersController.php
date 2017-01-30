<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;

class UsersController extends Controller
{
    public function index()
    {
        $users = Users::get();
        return view('users.index', compact('users'));
    }

    public function detail(Users $users)
    {
        return view('users.detail', compact('users'));
    }
}
