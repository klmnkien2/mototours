<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home()
    {
        return view('main.home');
    }

    public function tourList()
    {
        return view('main.tour_list');
    }

    public function pageStatic()
    {
        return view('main.page_static');
    }

    public function pageDestination()
    {
        return view('main.page_destination');
    }
}
