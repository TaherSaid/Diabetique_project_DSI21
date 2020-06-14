<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Collection;

class actualiter extends Controller
{
    public function index()
    {
        $json_actualiter=Http::get("https://api.covid19api.com/country/tunisia");
        // $json_actualiter=file_get_contents("https://api.covid19api.com/country/tunisia");
        $actualiter = json_decode($json_actualiter,true);
        // $size=count($actualiter);
        dd($actualiter);
        return view('actualite', ['actualiter' => $actualiter]);
    }

}
