<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $token = Auth::user()->getRememberToken();

    }
}
