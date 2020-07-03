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
    public function create(){
        return view('pertanyaan.form');
    }
    public function store(Request $request){
        $new_data = PertanyaanModel::save($request->all());
        return redirect('/pertanyaan');
    }
    public function detail($id) {
  $data = PertanyaanModel::where($id)->first();
  return view('pertanyaan.detail', compact('data'));

}
}
