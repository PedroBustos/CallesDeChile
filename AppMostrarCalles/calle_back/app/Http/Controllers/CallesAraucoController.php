<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Calles;

class CallesAraucoController extends Controller
{

        function get_calle(){
        $data = Calles::select('item_id', 'name')->where('ciudad_id', [7])->get();
        return $data;
    }
}
