<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function menu(){
        $data = Menu::all();
        return view('menu', compact('data'), ["title" => "Menu"]);
    }

    

    public function store(Request $request){
        // dd($request->all());
    
        $data = Menu::create($request->all());
        if ($request->hasFile('picture')) {
            $request->file('picture')->move('picture', $request->file('picture')->getClientOriginalName());
            $data->foto = $request->file('picture')->getClientOriginalName();
            $data->save();
        }

        return redirect()->route('menu');
    }
}
