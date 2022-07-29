<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\Models\Menu;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function transaksi(){
        $datas = Transaksi::all();
        $data = Menu::all();
        return view('transaksi', compact('data', 'datas'), ["title" => "Transaksi"]);
    }

    public function store(Request $request){
        // dd($request->all());
    
        Transaksi::create($request->all());
        
    }
}
