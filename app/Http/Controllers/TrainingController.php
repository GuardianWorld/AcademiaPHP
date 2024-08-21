<?php

namespace App\Http\Controllers;

use App\Models\Training;
use Illuminate\Http\Request;
use App\Http\Requests\TrainingUserRequest;
use Illuminate\Support\Facades\Auth;

class TrainingController extends Controller
{
    public function create()
    {
        return view('trainings.create');
    }

    public function store(TrainingUserRequest $request)
    {
        $data = $request->validated();
        $data = $request->except('_token');
        $data['date'] = now();
        $data['user_id'] = Auth::user()->id;
        $training = Training::create($data);
        return redirect()->route('trainings.create')->with('success', 'Training added successfully!');
    }

}
