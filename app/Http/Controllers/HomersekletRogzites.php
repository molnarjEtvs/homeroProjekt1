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

    public function rogzites(Request $req){
        $req->validate(
        [
            "t_id" => "required|numeric|min:1",
            "homerseklet" => "required|numeric|min:-30|max:50"
        ],
        [
            "t_id.required" => "Válassz termet!",
            "t_id.numeric" => "Csak egész szám lehet",
            "t_id.min" => "Minimum 1-es érték kell",
            "homerseklet.required" => "A mező kitöltése kötelező",
            "homerseklet.numeric" => "Csak szám lehet",
            "homerseklet.min" => "A minimum hőmérséklet: -30",
            "homerseklet.max" => "A maximum hőmérséklet: 50",
            
        ]);

        DB::insert("INSERT INTO  homersekletek (t_id,homerseklet,datum_ido) VALUES (?,?,?)",
        [$req->get('t_id'),
        $req->get('homerseklet'),
        date("Y-m-d H:i:s")]);

        return redirect("/homerseklet-rogzites")->with("kesz","A hőmérséklet rögzítése sikeres!");

        

    }
}
