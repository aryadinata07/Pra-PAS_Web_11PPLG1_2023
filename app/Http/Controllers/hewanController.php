<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hewan;

class hewanController extends Controller
{
    public function index(){
        return view('hewan/all', [
            'title' => 'Daftar Hewan',
            'hewan' => Hewan::all()
        ]);
    }
    
    public function show($hewan){
        return view('hewan.detail',[
            "title" => "hewan.detail",
            "hewan" => Hewan::find($hewan)
        ]);
    }
}
