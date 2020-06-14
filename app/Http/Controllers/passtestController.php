<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\qcms;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\compteSuivie;
use App\profile;
use Illuminate\Http\Request;

class passtestController extends Controller
{
    public function index()
    {
        $test = qcms::all();
        $size=qcms::all()->count();
        // dd($test//, ['test' => $test]);
        return view('qcm_test')
        ->with('test', $test)->with('count',$size);
    }
    public function scoreedit(Request $req)
    {
        // dd($req->etreDiabetique);
        $profile=new profile();
        $profile=DB::table('profiles')->where('user_id','=',Auth::user()->id)->update(['etreDiabetique' => $req->etreDiabetique]);
        return redirect('/home');
    }
    public function indexDashboard()
    {
        if( Auth::user()->role=='admin'){
        $qcm = qcms::all();
        // dd($test);
        return view('admin.modifierQcm', ['qcm' => $qcm]);}
        else {return redirect('/');}
    }
    public function updateQcm(Request $request)
    {
        if( Auth::user()->role=='admin'){
        $size=qcms::all()->count();
       for ($i=0; $i < $size; $i++) {
        qcms::where('id',$request->{"qid".$i})
        ->update(['question' => $request->{"question".$i}
        ,"score" =>$request->{"score".$i}]);
       }}else{return redirect('/');}

        return redirect('/updateqcm');
    }
    public function allqcm()
    {
        if( Auth::user()->role=='admin'){
        $qcm = qcms::all();
        return view('admin.allqcm', ['question' => $qcm]);}
        else{ redirect('/');}
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\qcms  $feedback
     * @return \Illuminate\Http\Response
     */
    public function deletequestion($id){
        if( Auth::user()->role=='admin'){
        qcms::where('id',$id)->delete();
        return back();}
        else{return redirect('/');}
    }
    public function addNewQuestion(request $request){
        if( Auth::user()->role=='admin'){
        // dd($request);
        $qcm=new qcms();
        $qcm->question=$request->question;
        $qcm->score=$request->score;
        $qcm->save();
        return redirect('/allqcm');}
        else{return redirect('/');}
    }

}
