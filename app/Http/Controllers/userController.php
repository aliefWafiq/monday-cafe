<?php

namespace App\Http\Controllers;

use App\Models\users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
class userController extends Controller
{
    public function daftarPage()
    {
        return view('daftar');
    }

    public function login(){
        if(Auth::check()){
            return redirect('home');
        }else{
            return view('login');
        }
    }

    public function daftar(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'email' => 'required',
            'alamat' => 'required',
            'password' => 'required'
        ]);

        $username = $request->input('username');
        $email = $request->input('email');
        $check = users::where('username', $username)->orWhere('email', $email)->first();

        if ($check) {
            return redirect('/');
        } else {
            $password = Hash::make($request->input('password'));

            $dataUser = $request->all();
            $dataUser['password'] = $password;
            users::create($dataUser);
            return redirect('/home');
        }
    }

    public function masuk(Request $request){
        // $request->validate([
        //     'username' => 'required',
        //     'email' => 'required',
        //     'password' => 'required'
        // ]);

        $data = array(
            'username' => $request->input('username'),
            'email' => $request->input('email'),
            'password' => $request->input('password')
        );

        if(Auth::attempt($data)){
            return redirect('home');
        }else{
            return redirect('/');
        }
    }
}
