<?php
namespace App\Models;
use Illuminate\Support\Facades\DB;

class PertanyaanModel
{
    public static function get_all(){
        $data = DB::table('pertanyaan')->get();
        return $data;
    }
    public static function save($data){
        unset($data["_token"]);
        $new_data = DB::table('pertanyaan')->insert($data);
        return $new_data;
    }
       public static function where($id){
        $data = DB::table('pertanyaan')->where('tanya_id', '=', $id)->get();
        return $data;
    }
}