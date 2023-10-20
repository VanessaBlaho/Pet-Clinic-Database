<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class Animal extends Controller
{
   public function animals() {

        return $this->belongsTo(Owner::class);

    }
}
