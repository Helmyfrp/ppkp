<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Session\Session;

class LoginController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function signin(Request $request)
    {
        $username = $request->username;
        $password = $request->password;

        if ($username == 'rt1927' && $password == 'rt1927') {
            try {
                $request->session()->put('data', $request->input());
                return view('Pengurus.index');
            } catch (\Throwable $th) {
                return redirect('/login')->with('alert', 'Terjadi Kesalahan Silahkan Cek Kembali!');
            }
        } elseif ($username == 'rw1927' && $password == 'rw1927') {
            try {
                $request->session()->put('data', $request->input());
                return view('Pengurus.index');
            } catch (\Throwable $th) {
                return redirect('/login')->with('alert', 'Terjadi Kesalahan Silahkan Cek Kembali!');
            }
        } elseif ($username == 'keamanan1927' && $password == 'keamanan1927') {
            try {
                $request->session()->put('data', $request->input());
                return view('Pengurus.index');
            } catch (\Throwable $th) {
                return redirect('/login')->with('alert', 'Terjadi Kesalahan Silahkan Cek Kembali!');
            }
        } elseif ($username == 'wargasejahtera' && $password == 'wargasejahtera') {
            try {
                $request->session()->put('data', $request->input());
                return view('Warga.index');
            } catch (\Throwable $th) {
                return redirect('/login')->with('alert', 'Terjadi Kesalahan Silahkan Cek Kembali!');
            }
        } else {
            return back()->with('errorr', 'Password dan Username anda salah !');
        }
    }
  
}
