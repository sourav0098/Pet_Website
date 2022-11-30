<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function edit(Request $request){
        return view('pets.dashboard',[
            'user'=>$request->user()
        ]);
    }
}
