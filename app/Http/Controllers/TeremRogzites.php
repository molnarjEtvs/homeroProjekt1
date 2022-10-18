<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeremRogzites extends Controller
{
    public function getContent(){

        return view("teremRogzites");
    }

    public function rogzites(Request $req){
        $req->validate(

            [
                "nev" => "required|min:3"
            ],
            [
                "nev.required" => "A mező kitöltése kötelező",
                "nev.min" => "Minimum 3 karaktert adj meg!"
            ]

        );
    }
}
