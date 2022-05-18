<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataScraping extends Controller
{
    public function marcas($vehicle_type_id){
        if($vehicle_type_id == 2020){
            $data = json_decode(file_get_contents(public_path('2020.json')));

            // dd($data);
        }
        return 'tst';
    }
}
