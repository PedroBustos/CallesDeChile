<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Calles;

class CallesLinaresController extends Controller
{

        function get_calle(){
        $data = Calles::select('item_id', 'name')->where('ciudad_id', [11])->get();
        return $data;
    }
}
