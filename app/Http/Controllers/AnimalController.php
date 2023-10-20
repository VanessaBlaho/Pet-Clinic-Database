<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Animal;
use App\Models\Image;

class AnimalController extends Controller
{

   public function index() {

    
    $animals = Animal::with('image')
    // ->select('animals.*')
    // ->with('image')
    // ->limit('10')
    ->get();

  

   

        return view('animals.animal', compact('animals'));

    }
}
