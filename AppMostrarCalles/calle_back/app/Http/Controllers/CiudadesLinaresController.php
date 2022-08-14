<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ciudades;

class CiudadesLinaresController extends Controller
{
    function get_ciudad(){
        $data = Ciudades::select('item_id', 'name')->where('provincia_id', [6])->get();
        return $data;
    }

}
