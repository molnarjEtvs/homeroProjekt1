<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Homersekletek extends Controller
{
    public function getContent(){

        $lista = DB::select("SELECT 
        homersekletek.h_id,
        homersekletek.homerseklet,
        homersekletek.datum_ido,
        termek.nev as teremnev
        FROM 
            homersekletek LEFT JOIN termek 
        ON 
            (homersekletek.t_id=termek.t_id) 
        ORDER BY homersekletek.h_id DESC");

        return view("homersekletek",["lista" => $lista]);
    }
}
