<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Animal;



class AnimalController extends Controller
{

   public function index() {

    
   $result = Animal::all()
        ->leftJoin('images', 'animals.image_id', '=', 'images.id')
        ->leftJoin('owners', 'animals.owner_id', '=', 'owners.id')
        ->select(
            'animals.id',
            'animals.name',
            'animals.breed',
            'animals.age',
            'animals.weight',
            'images.path',
            'owners.first_name',
            'owners.surname'
        )
        ->get();

        return view('animals.animal', compact('animals'));

    }
}
