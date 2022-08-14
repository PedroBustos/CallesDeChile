<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Provincias;

class ProvinciasMauleController extends Controller
{
     function get_provincia(){
         $data = Provincias::select('item_id', 'name')->where('region_id', [3])->get();
         return $data;
    }
}
