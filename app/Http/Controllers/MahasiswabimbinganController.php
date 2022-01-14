<?php

namespace App\Http\Controllers;

use App\Models\ModelMahasiswabimbingan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class MahasiswabimbinganController extends Controller
{
 
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $dataMahasiswabimbingan = ModelMahasiswabimbingan::all();
        return view('mahasiswabimbingan.mahasiswabimbingan', compact('dataMahasiswabimbingan'));
    }


    public function insert(Request $request)
    {

        $data = ModelMahasiswabimbingan::insert([
            'namalengkap' => $request->namalengkap,
            'namafile' => $request->namafile,
        ]);

        $dataMahasiswabimbingan = ModelMahasiswabimbingan::all();
        return redirect()->route('mahasiswabimbingan');
    }

    public function detail($id)
    {
        $data = ModelMahasiswabimbingan::select('*')
            ->where('id', $id)
            ->get();
        return view('mahasiswabimbingan/detail', ['data' => $data]);
    }

    public function edit($id)
    {
        $data = ModelMahasiswabimbingan::select('*')
            ->where('id', $id)
            ->get();
        return view('mahasiswabimbingan/edit', ['data' => $data]);
    }

    public function hapus($id)
    {
        $delete = DB::table('mahasiswabimbingan')
            ->where('id', $id)
            ->delete();
        return back()->with('success', 'Data telah terkirim');
    }

    public function update(Request $request)
    {

        $updateting = DB::table('mahasiswabimbingan')
            ->where('id', $request->input('id'))
            ->update([
                'namalengkap' => $request->input('namalengkap'),
                'namafile' => $request->input('namafile'),
            ]);

        $dataMahasiswabimbingan = ModelMahasiswabimbingan::all();
        return redirect()->route('mahasiswabimbingan');
    }
}
