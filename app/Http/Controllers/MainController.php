<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class MainController extends Controller
{
    public function index()
    {
        $latestNews = News::latest()->take(5)->get(); // Get the latest 5 news items
        return view('main.index', compact('latestNews'));
    }

    public function payment()
    {
        return view('main.payment');
    }
}
