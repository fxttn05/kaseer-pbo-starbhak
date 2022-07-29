<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function user(){
        $data = User::all();
        return view('user', compact('data'), ["title" => "Transaksi"]);
    }
}
