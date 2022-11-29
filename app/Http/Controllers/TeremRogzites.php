<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TeremRogzites extends Controller
{
    public function getContent(){

        return view("teremRogzites");
    }

    public function rogzites(Request $req){
        $req->validate(

            [
                "nev" => "required|min:3",
                "szel_cm" => "required|numeric|min:100|max:5000",
                "hosz_cm" => "required|numeric|min:100|max:5000",
                "mag_cm" => "required|numeric|min:100|max:400"
            ],
            [
                "nev.required" => "A mező kitöltése kötelező",
                "nev.min" => "Minimum 3 karaktert adj meg!",
                "szel_cm.required" => "A mező kitöltése kötelező",
                "szel_cm.numeric" => "Csak szám lehet",
                "szel_cm.min" => "Minimum: 100",
                "szel_cm.max" => "Maximum: 5000",

                "hosz_cm.required" => "A mező kitöltése kötelező",
                "hosz_cm.numeric" => "Csak szám lehet",
                "hosz_cm.min" => "Minimum: 100",
                "hosz_cm.max" => "Maximum: 5000",

                "mag_cm.required" => "A mező kitöltése kötelező",
                "mag_cm.numeric" => "Csak szám lehet",
                "mag_cm.min" => "Minimum: 100",
                "mag_cm.max" => "Maximum: 400",
            ]

        );

        DB::insert("INSERT INTO termek (nev, szel_cm, hossz_cm, mag_cm) VALUES 
        (?,?,?,?)",[$req->get("nev"),$req->get("szel_cm"),$req->get("hosz_cm"),$req->get("mag_cm")]);
        return redirect("/terem-rogzites")->with("success","A terem rögzítés sikeres");

    }

    public function teremLista(){
        $termek = DB::select("SELECT * FROM termek WHERE 1");
        return view("teremLista",["termek" => $termek]);
    }


    public function teremTorles(Request $req){
        DB::delete("DELETE FROM termek WHERE t_id=?",[$req->id]);
        $data['error'] = false;
        return response()->json($data);
    }

}
