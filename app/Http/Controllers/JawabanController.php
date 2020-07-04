<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JawabanModel;
use App\Models\PertanyaanModel;

class JawabanController extends Controller
{
    //
    public function index($id)
    {
        $datatanya = PertanyaanModel::detail($id)->first();
        $data = JawabanModel::cari($id);
        return view('jawaban.index', compact('data', 'datatanya'));
    }
    public function store(Request $request)
    {
        $new_data = JawabanModel::save($request->all());
        return redirect('/pertanyaan/' . $request->tanyaid);
    }
}
