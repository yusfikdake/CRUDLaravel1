<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PertanyaanModel;

class PertanyaanController extends Controller
{
    public function index(){
        $items = PertanyaanModel::get_all();
        return view('pertanyaan.index', compact('items'));
    }
    
    public function create(){
        return view ('pertanyaan.form');
    }

    public function store(Request $request){
        $data = $request->all();
        unset($data["_token"]);
        $data = PertanyaanModel::save($data);
        return redirect ('/pertanyaan');
    }

}
