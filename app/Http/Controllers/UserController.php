<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUserRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function create()
    {
        return view('users.create');
    }

    public function store(StoreUserRequest $request)
    {
        $data = $request->validated();
        $data = $request->except('_token');
        $data['password'] = Hash::make($data['password']);
        
        $user = User::create($data);
        Auth::login($user);
        return to_route('main.index')->with('success', 'Registration successful!');
    }

    public function showProfile()
    {
        $user = Auth::user();
        return view('users.profile', compact('user'));
    }

    public function showTraining(){
        $user = Auth::user();
        $trainings = $user->trainings;
        return view('users.training', compact('user'));
    }

    public function logout(){
        Auth::logout();
        return to_route('main.index');
    }

    public function showNotifications(){
        $user = Auth::user();
        $notifications = $user->notifications;
        return view('users.notifications', compact('user'));
    }
}
