<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestManager;

class FindPetController extends Controller
{
    public function findDogs()
    {

        $pets = RequestManager::getRequest("?type=dog");

        //$pets = $this->cleanPetsArr($pets);

        return view('pets.filter-pets', ['pets' => $pets['animals']]);

    }

    private function cleanPetsArr($pets)
    {
        $cleanArr = array();
        foreach ($pets as $pet) {
            array_push($cleanArr, $pet);
        }

        return $cleanArr;
    }

}
