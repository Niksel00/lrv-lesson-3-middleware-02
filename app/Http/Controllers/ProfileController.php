<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    /**
     * Show the profile inf
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function __invoke()
    {
        return view('profile', ['name' => Auth::user()->name, 'email' => Auth::user()->email, 'id' => Auth::user()->id]);
    }
}
