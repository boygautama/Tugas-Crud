<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class PertanyaanModel
{
    public static function get_all()
    {
        $data = DB::table('pertanyaan')->get();
        return $data;
    }
    public static function insert($data)
    {
        unset($data["_token"]);
        $new_data = DB::table('pertanyaan')->insert($data);
        return $new_data;
    }
    public static function detail($id)
    {
        $data = DB::table('pertanyaan')->where('tanya_id', '=', $id)->get();
        return $data;
    }

    // public static function update($data)
    // {
    //     unset($data["_token"]);
    //     $new_data = DB::table('pertanyaan')->where('tanya_id', $data['tanya_id'])->update($data);
    //     return $new_data;
    // }
    public static function update($id, $data)
    {
        $new_data = DB::table('pertanyaan')
            ->where('tanya_id', $id)
            ->update([
                'tanya_nama' => $data['tanya_nama'],
                'tanya_judul' => $data['tanya_judul'],
                'tanya_isi' => $data['tanya_isi'],
                'tanya_update' => now()
            ]);
        return $new_data;
    }
    public static function delete($id)
    {
        $new_data = DB::table('pertanyaan')->where('tanya_id', $id)->delete();
        return $new_data;
    }
}
