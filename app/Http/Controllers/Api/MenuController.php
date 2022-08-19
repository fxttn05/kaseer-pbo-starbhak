<?php

namespace App\Http\Controllers\Api;

use App\Models\Menu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\MenuResource;
use Illuminate\Support\Facades\Validator;

class MenuController extends Controller
{
    public function index()
    {
        //get posts
        $menus = Menu::latest()->paginate(5);

        //return collection of posts as a resource
        return new MenuResource(true, 'List Data Menu', $menus);
    }

    public function store(Request $request)
    {
        //define validation rules
        $validator = Validator::make($request->all(), [
            'code_menu'   => 'required', 
            'nama_item'   => 'required',
            'picture'     => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'category'   => 'required',
            'price'   => 'required',  
            
            
        ]);

        //check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        //upload image
        $image = $request->file('picture');
        $image->storeAs('public/menus', $image->hashName());

        //create post
        $menu = Menu::create([
            'picture'     => $image->hashName(),
            'code_menu'     => $request->code_menu,
            'nama_item'   => $request->nama_item,
            'category'   => $request->category,
            'price'   => $request->price,
        ]);

        //return response
        return new MenuResource(true, 'Data Menu Berhasil Ditambahkan!', $menu);
    }
}
