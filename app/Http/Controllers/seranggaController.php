<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Serangga;

class seranggaController extends Controller
{
    public function index(){
        return view('serangga/all', [
            'title' => 'Daftar Serangga',
            'serangga' => Serangga::all()
        ]);
    }

    public function show($serangga){
        return view('serangga.detail',[
            "title" => "serangga.detail",
            "serangga" => Serangga::find($serangga)
        ]);
    }
}
