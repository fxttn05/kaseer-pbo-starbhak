<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function transaksi(){
        $data = Transaksi::all();
        return view('transaksi', compact('data'), ["title" => "Transaksi"]);
    }

    public function store(Request $request){
        // dd($request->all());
    
        $data = Transaksi::create($request->all());
        if ($request->hasFile('picture')) {
            $request->file('picture')->move('picture', $request->file('picture')->getClientOriginalName());
            $data->foto = $request->file('picture')->getClientOriginalName();
            $data->save();
        }

        return redirect()->route('transaksi');
    }
}
