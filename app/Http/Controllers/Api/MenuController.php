<?php

namespace App\Http\Controllers\Api;

use App\Models\Menu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\MenuResource;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class MenuController extends Controller
{
    public function index()
    {
        //get posts
        $menus = Menu::latest()->paginate(5);

        //return collection of posts as a resource
        return new MenuResource(true, 'List Data Menu', $menus);
    }

    // CREATE DATA
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
        $picture = $request->file('picture');
        $picture->storeAs('public/menus', $picture->hashName());
        
        //create post
        $menus = Menu::create([
            'picture'     => $picture->hashName(),
            'code_menu'     => $request->code_menu,
            'nama_item'   => $request->nama_item,
            'category'   => $request->category,
            'price'   => $request->price,
        ]);
        
        //return response
        // return $request;
        return new MenuResource(true, 'Data Menu Berhasil Ditambahkan!', $menus);
    }

    // READ DATA
    public function show(Menu $menu)
    {
        //return single menu as a resource
        return new MenuResource(true, 'Data Menu Ditemukan!', $menu);
    }

    // UPDATE DATA
    public function update(Request $request, Menu $menu)
    {
        //define validation rules
        $validator = Validator::make($request->all(), [
            'code_menu'   => 'required', 
            'nama_item'   => 'required',
            'category'   => 'required',
            'price'   => 'required',
        ]);

        //check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        //check if image is not empty
        if ($request->hasFile('picture')) {

            //upload image
            $picture = $request->file('picture');
            $picture->storeAs('public/menus', $picture->hashName());

            //delete old image
            Storage::delete('public/menus/'.$menu->image);

            //update post with new image
            $menu->update([
                'picture'     => $picture->hashName(),
                'code_menu'   => $request->code_menu,
                'nama_item'   => $request->nama_item,
                'category'    => $request->category,
                'price'       => $request->price,
            ]);

        } else {

            //update post without image
            $menu->update([
                'code_menu'   => $request->code_menu,
                'nama_item'   => $request->nama_item,
                'category'    => $request->category,
                'price'       => $request->price,
            ]);
        }

        //return response
        return new MenuResource(true, 'Data Menu Berhasil Diubah!', $menu);
    }

    // DELETE DATA
    public function destroy(Menu $menu)
    {
        //delete image
        Storage::delete('public/menus/'.$menu->image);

        //delete post
        $menu->delete();

        //return response
        return new MenuResource(true, 'Data Menu Berhasil Dihapus!', null);
    }
}
