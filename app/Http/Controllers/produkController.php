<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreMenuReq;
use App\Models\produks;
use App\Models\users;

class produkController extends Controller
{

    protected $userController;

    public function __construct(userController $userController){
        $this->userController = $userController;
    }

    public function home(){
        // $userController = $this->userController->daftar();
        $data = produks::all();
        return view('mainHome', compact('data'));
    }

    public function listMenu(){
        $data = produks::all();
        return view('listMenu', compact('data'));
    }

    public function createMenu(){
        return view('menu/createMenu');
    }

    public function editMenu(produks $produks){
        return view('/menu/editMenu', compact('produks'));
    }

    public function add(StoreMenuReq $request){
        $imgName = time().'.'.$request->foto->extension();
        $imgUp = $request->foto->move(public_path('img/foto-menu'), $imgName);
        $imagePath = 'img/foto-menu/' . $imgName;

        $params = $request->validated();

        if ($menu = produks::create($params)) {
            $menu->foto = $imagePath;
            $menu->save();

            return redirect('menu');
        }
    }

    public function delete(produks $produks){
        produks::destroy($produks->id);
        if(file_exists(public_path($produks->foto))){
            unlink(public_path($produks->foto));
        }
        return redirect('menu');
    }

    public function update(Request $request, produks $produks){
        $new = $request->all();

        if($request->hasFile('foto')){
            if(file_exists(public_path($produks->foto))){
                unlink(public_path($produks->foto));
            }

            $imgName = time().'.'.$request->foto->extension();
            $request->foto->move(public_path('img/foto-menu/'), $imgName);
            $new['foto'] = 'img/foto-menu/' . $imgName;
        }
        
        $produks->update($new);
        
        return redirect('/menu');
    }
}
