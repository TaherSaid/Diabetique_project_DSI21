<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\qcms;
use App\User;
use App\compteSuivie;
use App\profile;
use Illuminate\Http\Request;

class passtestController extends Controller
{
    public function index()
    {
        return view('pass_test');
    }
    public function index2()
    {
        $test = qcms::all();
        // dd($test);
        return view('pass_test_qcm', ['test' => $test]);
    }
    public function scoreedit($id,$val)
    {
        $id_profile = DB::select('SELECT id FROM profiles WHERE user_id =', $id);
        $affected = DB::table('compteSuivie')
        ->where('suivieProfile_id =', $id_profile)
        ->update(['valMoyMesure' => $val]);
        return view('profille');
    }


}
