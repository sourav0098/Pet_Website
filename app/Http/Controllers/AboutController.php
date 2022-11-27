<?php

namespace App\Http\Controllers;

use App\Models\About;

class AboutController extends Controller
{
    public function get_screen()
    {

        $team = About::all();
        return view('pets.about-us', ['team' => $team]);

    }

}
