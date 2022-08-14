<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ciudades;

class CiudadesAraucoController extends Controller
{
    function get_ciudad(){
        $data = Ciudades::select('item_id', 'name')->where('provincia_id', [4])->get();
        return $data;
    }

}
