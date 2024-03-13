<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function HomeCon()
    {
        $comics = config('comics');
        return view('pages.home', compact('comics'));
    }

    public function AboutCon()
    {
        return view('pages.about');
    }
}
