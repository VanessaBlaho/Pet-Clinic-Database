<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use App\Models\Owner;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search()
    {
        $search_term = $_GET['search'] ?? null;


        if ($search_term) {
            $results_animal = Animal::query()
                ->where('name', 'like', '%' . $search_term . '%')
                ->orderBy('name', 'asc')
                ->get();
        }

        if ($search_term) {
            $results_owner = Owner::query()
                ->where('first_name', 'like', '%' . $search_term . '%')
                ->orWhere('surname', 'like', '%' . $search_term . '%')
                ->orderBy('first_name', 'asc')
                ->get();
        }

        dump($search_term);
        return view('search.search', [
            'search_term' => $search_term,
            'results_animal' => $results_animal ?? [],
            'results_owner' => $results_owner ?? []
        ]);
    }
}
