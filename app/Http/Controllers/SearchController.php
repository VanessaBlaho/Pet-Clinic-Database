<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search()
    {
        // $search_term = $_GET['search'] ?? null;
        $search_term = 'pooh';

        if ($search_term) {
            $results = Animal::query()
                ->where('name', 'like', '%' . $search_term . '%')
                ->orderBy('name', 'asc')
                ->get();

            dump($search_term);
            dump($results);

            return view('search.search', [
                'search_term' => $search_term,
                'results' => $results ?? []
            ]);
        }
    }
}
