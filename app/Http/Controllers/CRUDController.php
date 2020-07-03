<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JawabanModel;

class CRUDController extends Controller
{
    public function index(){
        $data = JawabanModel::get_all();
        return view('pertanyaan.index', compact('data'));
    }
}
