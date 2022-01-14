<?php

namespace App\Http\Controllers;

use App\Models\ModelBimbingan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class BimbinganController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

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
        $dataBimbingan= ModelBimbingan::latest()->get();
        return view('bimbingan.bimbingan',compact('dataBimbingan'));
    }

    public function insert(Request $request)
    {

        $data = ModelBimbingan::insert([
            'namalengkap' => $request->namalengkap,
            'namafile' => $request->namafile,
        ]);

        $dataBimbingan = ModelBimbingan::all();
        return redirect()->route('bimbingan');
    }
    
    public function detail($id)
    {
        $data = ModelBimbingan::select('*')
            ->where('id', $id)
            ->get();
        return view('bimbingan/detail', ['data' => $data]);
    }
    public function edit($id)
    {
        $data = ModelBimbingan::select('*')
            ->where('id', $id)
            ->get();
        return view('bimbingan/edit', ['data' => $data]);
    }
    public function hapus($nim)
    {
        $delete = DB::table('bimbingan')
            ->where('id', $id)
            ->delete();
        return back()->with('success', 'Data telah terkirim');
    }
    
}
