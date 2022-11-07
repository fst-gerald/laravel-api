<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function usersView()
    {
        return view('users.index');
    }
    
    public function addUsers(Request $request)
    {
        $numOfUsers = $request->input('numOfUsers');
        User::factory()->count($numOfUsers)->create();

        return redirect()->back();
    }

    public function resetUsers()
    {
        User::truncate();
        return redirect()->back();
    }
}
