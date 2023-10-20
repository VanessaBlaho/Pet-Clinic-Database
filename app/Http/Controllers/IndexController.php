<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
            'animals.age',
            'animals.weight',
            'images.path',
            'owners.first_name',
            'owners.surname'
        )
        ->take(10) // Retrieve 10 random records
        ->get();

    return view('index.index', ['animals' => $result]);
}

}

