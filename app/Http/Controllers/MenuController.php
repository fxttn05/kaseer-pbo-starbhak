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
}
