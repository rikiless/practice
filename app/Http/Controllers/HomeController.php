<?php

namespace App\Http\Controllers;

use App\Show;

class HomeController extends Controller
{
    public function debounce()
    {
        return view('home.debounce');
    }

    public function form()
    {
        return view('home.form');
    }

    public function tooltips()
    {
        return view('home.tooltip');
    }

    public function resource()
    {
        return [
            new Show('Breaking Bad', 'Ended', 'AMC', 'tt0903747'),
            new Show('The Big Bang Theory', 'Continuing', 'CBS', 'tt0898266'),
            new Show('Homeland', 'Continuing', 'Showtime', 'tt1796960'),
            new Show('Game of Thrones', 'Continuing', 'HBO', 'tt0944947'),
        ];
    }
}
