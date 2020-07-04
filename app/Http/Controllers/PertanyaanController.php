<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PertanyaanModel;
use App\Models\JawabanModel;

class PertanyaanController extends Controller
{
    //
    public function index()
    {
        $datas = PertanyaanModel::get_all();
        // dd($datas);
        return view('pertanyaan.index', compact('datas'));
    }
    public function tambah()
    {
        return view('pertanyaan.form');
    }
    public function insert(Request $request)
    {
        $new_data = PertanyaanModel::insert($request->all());
        return redirect('/pertanyaan');
    }
    public function detail($id)
    {
        $datatanya = PertanyaanModel::detail($id)->first();
        $data = JawabanModel::cari($id);
        // return view('pertanyaan.detail', compact('data'));
        return view('pertanyaan.detail', compact('data', 'datatanya'));
    }
    public function edit($id)
    {
        $data = PertanyaanModel::detail($id)->first();
        return view('pertanyaan.edit', compact('data'));
    }
    // public function update(Request $request)
    // {
    //     $new_data = PertanyaanModel::update($request->all());
    //     return redirect('/pertanyaan/' . $request->tanya_id);
    // }
    public function update($id, Request $request)
    {
        $new_data = PertanyaanModel::update($id, $request->all());
        return redirect('/pertanyaan/' . $request->tanya_id)->with('status', 'Profile updated!');
    }
    public function hapus($id)
    {
        $new_data = PertanyaanModel::delete($id);
        return redirect('/pertanyaan');
    }
}
