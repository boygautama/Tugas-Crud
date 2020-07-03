<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JawabanModel;
use App\Models\PertanyaanModel;

class JawabanController extends Controller
{
    //
    public function index($id){
         $datatanya = PertanyaanModel::where($id)->first();
         $data = JawabanModel::cari($id);
        //    dd($data);
  return view('jawaban.index', compact('data','datatanya'));
    }
        public function store(Request $request){
        $new_data = JawabanModel::save($request->all());
        // dd($request);
        // return redirect('/jawaban');
         return redirect('/jawaban/'.$request->tanyaid);
    }
}
