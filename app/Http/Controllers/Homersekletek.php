<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Homersekletek extends Controller
{
    public function getContent(){

        return view("homersekletek");
    }
}
