<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Regiones;

class RegionesController extends Controller
{
    //
    // function get_region(){
    //     $data = Regiones::all();
    //     return response()->json([
    //         'regiones'=>$data,
    //     ]);
    // }
    public function get_region() {
        $region = Regiones::select('item_id', 'name')->get();
        return $region;
    }
}
