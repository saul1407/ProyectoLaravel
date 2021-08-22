<?php

namespace App\Http\Controllers;

use App\Entry;
use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
    function show(User $user){

        $entries = Entry::where('user_id', $user->id)->get();
        return view('users.show', compact('user', 'entries'));
    }
}
