<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Pet;

class PetsController extends Controller
{
    public function edit(Request $request){
        $pets=Pet::with('characteristics')->get();
        return view('pets.pets',[
            'user' => $request->user(),
            'pets'=>$pets,
        ]);
    }

    public function update(Request $request){
        // Validation
        $this->validate($request,[
            'pet_name' => 'required|string',
            'age' => 'required',
            'gender' => 'required|string',
            'characteristic' => 'required',
            'animalType' => 'required|string',
            'coat' => 'required|string',
            'color' => 'required|string',
            'description' => 'required|string'
        ]);

        $pet=Pet::find($request->get('id'));
        

    }
}