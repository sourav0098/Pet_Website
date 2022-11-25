<?php

namespace App\Http\Controllers;

class AboutController extends Controller
{
    public function get_screen()
    {

        return view('pets.about-us');

    }

}
