<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index($id)
    {
        $user = User::findOrFail($id);

        $announcements = $user->announcements()->paginate(5);

        return view('users.userhome', compact('user','announcements'));
    }
}
