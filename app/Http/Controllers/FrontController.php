<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function Home()
    {
        return view('client.pages.index');
    }
    public function About()
    {
        return view('client.pages.about');
    }
}
