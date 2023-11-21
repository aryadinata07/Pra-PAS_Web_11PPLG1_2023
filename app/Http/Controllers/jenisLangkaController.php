<?php

namespace App\Http\Controllers;
use App\Models\JenisLangka;

use Illuminate\Http\Request;

class jenisLangkaController extends Controller
{
    //
    public function index(){
        return view('langka/all', [
            'title' => 'Daftar Hewan',
            'jenis' => JenisLangka::all()
        ]);
    }
    
    public function show($jenis){
        return view('langka.detail',[
            "title" => "hewan.detail",
            "jenis" => JenisLangka::find($jenis)
        ]);
    }
}
