<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Pet;
use App\Models\Characteristic;
use Carbon\Carbon;

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
            'petnameEdit' => 'required|string',
            'ageEdit' => 'required',
            'genderEdit' => 'required|string',
            'animalTypeEdit' => 'required|string',
            'colorEdit' => 'required|string',
            'characteristic' => 'required',
            'coatEdit' => 'required|string',
            'statusEdit'=>'required|string',
            'descriptionEdit' => 'required|string'
        ]);
        
        $pet=Pet::find($request->get('idEdit'));
        $pet->pet_name=$request->get('petnameEdit');
        $pet->age=$request->get('ageEdit');
        $pet->gender=$request->get('genderEdit');
        $pet->animal_type=$request->get('animalTypeEdit');
        $pet->color=$request->get('colorEdit');
        $pet->coat_length=$request->get('coatEdit');
        $pet->is_adopted=$request->get('statusEdit');
        $pet->description=$request->get('descriptionEdit');
        $pet->save();
        
        // First delete all the characteristics for that pet_id then insert new records
        Characteristic::where('pet_id',$request->get('idEdit'))->delete();
        $data = [];
        foreach ($request->characteristic as $c) {
            $data[] = [
                'pet_id' => $request->get('idEdit'),
                'characteristic' => $c,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ];
        }
        DB::table('characteristics')->insert($data);
        return redirect()->route('pets.edit')->with('status', 'pet-updated');
    }

    public function destroy(Request $request){
        Characteristic::where('pet_id',$request->get('pet_id'))->delete();
        Pet::find($request->get('pet_id'))->delete();
        return redirect()->route('pets.edit')->with('status', 'pet-deleted');
    }
}