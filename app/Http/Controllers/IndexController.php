<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\AnimalController;
use App\Models\Animal;


class IndexController extends Controller
{
    public function index()
{
    $result = Animal::inRandomOrder()
        ->leftJoin('images', 'animals.image_id', '=', 'images.id')
        ->leftJoin('owners', 'animals.owner_id', '=', 'owners.id')
        ->select(
            'animals.id',
            'animals.name',
            'animals.breed',
            'animals.species',
            'animals.age',
            'animals.weight',
            'images.path',
            'owners.first_name',
            'owners.surname'
        )
        ->take(12) // Retrieve 12 random records
        ->get();

    return view('index.index', ['animals' => $result]);
}

}

