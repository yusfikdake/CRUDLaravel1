<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JawabanModel;

class JawabanController extends Controller
{
    public function index(){
        $data = DB::table('jawaban')
        ->join('pertanyaan', 'jawaban.pertanyaan_id', '=', 'pertanyaan.id')
        ->select('jawaban.pertanyaan_id', 'jawaban.isi')
        ->get();
        return view ('jawaban.index',compact('data'));
    }
}
