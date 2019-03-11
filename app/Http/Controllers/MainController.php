<?php

namespace App\Http\Controllers;

use App\Stages;
use App\Tours;
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

    public function pageDestination(Tours $tours)
    {
        $stages = $tours->stages;
        $itinerarys = $tours->itinerarys;
        $tourPrices = $tours->tourPrices;
        return view('main.page_destination', compact('tours', 'stages', 'itinerarys', 'tourPrices'));
    }
}
