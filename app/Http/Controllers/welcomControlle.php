<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class welcomControlle extends Controller
{
    public function index()
    {
        $json = file_get_contents('json/home_info.json');
        $json_data = json_decode($json,true);
        return view('welcome', [
            'json' => $json_data
        ]);
    }
}
