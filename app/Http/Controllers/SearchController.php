<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search()
    {
        $search_term = $_GET['search'] ?? null;

        if ($search_term) {
            $results = Animal::query()
                ->where('name', 'like', '%' . $search_term . '%')
                ->orderBy('name', 'asc')
                ->get();
        } else {
            $results = Owner::query()
                ->where('first_name', 'like', '%' . $search_term . '%')
                ->where('surname', 'like', '%' . $search_term . '%')
                ->orderBy('first_name', 'asc')
                ->get();
        }
        return view('search.search', [
            'search_term' => $search_term,
            'results' => $results ?? []
        ]);
    }
}
