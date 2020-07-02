<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PertanyaanModel;

class PertanyaanController extends Controller
{
    //
    public function index(){
        $datas = PertanyaanModel::get_all();
        // dd($datas);
        return view('pertanyaan.index',compact('datas'));
    }
}
