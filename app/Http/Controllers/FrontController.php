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
    public function Service()
    {
        return view('client.pages.service');
    }
    public function Contact()
    {
        return view('client.pages.support');
    }
    public function TrackShipment()
    {
        return view('client.pages.track-shipment');
    }
}
