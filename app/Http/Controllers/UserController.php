<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Instantiate a new UserController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show a User Profile page.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (Auth::id() != $id) {
            abort(403, 'Unauthorized action.');
        }

        $user = User::find($id);

        return view('profile.edit', compact('user'));
    }
}
