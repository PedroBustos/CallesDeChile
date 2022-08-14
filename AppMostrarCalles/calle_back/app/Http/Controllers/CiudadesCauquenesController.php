<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ciudades;

class CiudadesCauquenesController extends Controller
{
    function get_ciudad(){
        $data = Ciudades::select('item_id', 'name')->where('provincia_id', [5])->get();
        return $data;
    }

}
