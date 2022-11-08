<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Aktualis extends Controller
{
    public function getContent(){

        $aktualis = DB::select("SELECT 
            termek.nev,
            homersekletek.datum_ido,
            homersekletek.homerseklet 
            FROM 
            termek INNER JOIN homersekletek 
            ON 
            (termek.t_id=homersekletek.t_id) 
           
            GROUP BY termek.t_id 
            ORDER BY homersekletek.datum_ido DESC 
            
            ");

        return view("welcome");
    }
}
