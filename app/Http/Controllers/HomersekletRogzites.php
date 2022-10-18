<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomersekletRogzites extends Controller
{
    public function getContent(){

        $termek = DB::select("SELECT * FROM termek ORDER BY nev ASC");

        return view("homersekletRogzites",["termek" => $termek]);
    }
}
