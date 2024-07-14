<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreMenuReq;
use App\Models\produks;
use App\Models\keranjangs;
use Illuminate\Support\Facades\Auth;

class produkController extends Controller
{

    public function keranjang(keranjangs $keranjang, produks $produk)
    {
        $produks = keranjangs::with('produks')->get();
        return view('cart', compact('produks'));
    }

    public function addKeranjang($id, keranjangs $keranjang)
    {
        $produks = produks::findOrFail($id);
        $keranjang->id_produk = $produks->id;
        $keranjang->jumlah = 1;
        $keranjang->save();

        return redirect('home');
    }

    public function home()
    {
        $data = produks::all();
        return view('mainHome', compact('data'));
    }

    public function listMenu()
    {
        $data = produks::all();
        return view('listMenu', compact('data'));
    }

    public function createMenu()
    {
        return view('menu/createMenu');
    }

    public function editMenu(produks $produks)
    {
        return view('/menu/editMenu', compact('produks'));
    }

    public function add(StoreMenuReq $request)
    {
        $imgName = time() . '.' . $request->foto->extension();
        $imgUp = $request->foto->move(public_path('img/foto-menu'), $imgName);
        $imagePath = 'img/foto-menu/' . $imgName;

        $params = $request->validated();

        if ($menu = produks::create($params)) {
            $menu->foto = $imagePath;
            $menu->save();

            return redirect('menu');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/');
    }

    public function delete($id)
    {
        $produks = produks::findOrFail($id);

        unlink(public_path($produks->foto));
        $produks->delete();
        
        return redirect('menu');
    }

    public function update(Request $request, produks $produks)
    {
        $new = $request->all();

        if ($request->hasFile('foto')) {
            if (file_exists(public_path($produks->foto))) {
                unlink(public_path($produks->foto));
            }

            $imgName = time() . '.' . $request->foto->extension();
            $request->foto->move(public_path('img/foto-menu/'), $imgName);
            $new['foto'] = 'img/foto-menu/' . $imgName;
        }

        $produks->update($new);

        return redirect('/menu');
    }
}
