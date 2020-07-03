<?php
namespace App\Models;
use Illuminate\Support\Facades\DB;

class JawabanModel
{

    public  static  function cari($id)
    {
        $data = DB::table('jawaban')->where('tanyaid', '=', $id)->get();
        // dd($data);
        return $data;
    }
        public static function save($data){
            //  dd($data);
        unset($data["_token"]);
        $new_data = DB::table('jawaban')->insert($data);
        return $new_data;
    }
}