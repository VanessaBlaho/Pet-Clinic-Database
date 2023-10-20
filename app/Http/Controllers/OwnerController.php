<?php

namespace App\Http\Controllers;
use App\Models\Owner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OwnerController extends Controller
{
    public function index ()
    {
      
            $owners = Owner::all(); 
           
            return view('owners.index', compact('owners'));
      
    }
}
