<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pages;

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

    public function pageStatic(Pages $pages)
    {
        return view('main.page_static', compact('pages'));
    }

    public function pageDestination()
    {
        return view('main.page_destination');
    }
}
