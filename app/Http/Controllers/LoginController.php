<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('users.login');
    }

    public function store(Request $request)
    {
        if (!Auth::attempt($request->only('email', 'password'))) {
            return redirect()->back()
                ->withErrors('Usuário ou senha inválidos!');
        }
        return to_route('main.index');
    }

    public function logout()
    {
        Auth::logout();
        return to_route('main.index');
    }
}
