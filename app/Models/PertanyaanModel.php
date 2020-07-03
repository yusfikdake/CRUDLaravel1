<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

Class PertanyaanModel{

    public static function get_all(){
        $items = DB::table('pertanyaan')->get();
        return $items;
    }

    public static function save($id){
        $new_item = DB::table('pertanyaan')->insert($id);
        return $new_item;
    }


}

