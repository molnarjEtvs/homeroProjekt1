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
            (select homerseklet FROM homersekletek WHERE homersekletek.t_id=termek.t_id ORDER BY h_id DESC LIMIT 1) as homerseklet
            FROM 
            termek INNER JOIN homersekletek 
            ON 
            (termek.t_id=homersekletek.t_id) 
           
            GROUP BY termek.t_id 
            ORDER BY homersekletek.h_id DESC 
            
            ");

        

        return view("welcome",["aktualis" => $aktualis]);
    }
}
