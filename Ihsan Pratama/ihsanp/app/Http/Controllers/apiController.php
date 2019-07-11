<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\artikel;
class apiController extends Controller
{
    public function getArtikels(){
        return artikel::all();
    }
}
