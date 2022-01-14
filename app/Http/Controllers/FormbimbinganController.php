<?php

namespace App\Http\Controllers;

use App\Models\ModelFormbimbingan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class FormbimbinganController extends Controller
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

        $dataFormbimbingan = ModelFormbimbingan::all();
        return view('formbimbingan/formbimbingan', compact('dataFormbimbingan'));
    }


    public function insert(Request $request)
    {

        $data = ModelFormbimbingan::insert([
            'namalengkap' => $request->namalengkap,
            'namafile' => $request->namafile,
        ]);

        $dataFormbimbingan = ModelFormbimbingan::all();
        return redirect()->route('formbimbingan');
    }

    public function detail($id)
    {
        $data = ModelFormbimbingan::select('*')
            ->where('id', $id)
            ->get();
        return view('formbimbingan/detail', ['data' => $data]);
    }

    public function edit($id)
    {
        $data = ModelFormbimbingan::select('*')
            ->where('id', $id)
            ->get();
        return view('formbimbingan/edit', ['data' => $data]);
    }

    public function hapus($id)
    {
        $delete = DB::table('formbimbingan')
            ->where('id', $id)
            ->delete();
        return back()->with('success', 'Data telah terkirim');
    }

    public function update(Request $request)
    {

        $updateting = DB::table('formbimbingan')
            ->where('id', $request->input('id'))
            ->update([
                'namalengkap' => $request->input('namalengkap'),
                'namafile' => $request->input('namafile'),
            ]);

        $dataFormbimbingan = ModelFormbimbingan::all();
        return redirect()->route('formbimbingan');
    }
}
