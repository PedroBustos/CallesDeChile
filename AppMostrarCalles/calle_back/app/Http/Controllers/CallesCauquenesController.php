<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Calles;

class CallesCauquenesController extends Controller
{

        function get_calle(){
        $data = Calles::select('item_id', 'name')->where('ciudad_id', [9])->get();
        return $data;
    }
}
