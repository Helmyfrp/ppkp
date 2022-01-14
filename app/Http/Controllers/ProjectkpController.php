<?php

namespace App\Http\Controllers;

use App\Models\ModelProjectkp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class ProjectkpController extends Controller
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

        $dataProjectkp = ModelProjectkp::all();
        return view('projectkp/projectkp', compact('dataProjectkp'));
    }


    public function insert(Request $request)
    {

        $data = ModelProjectkp::insert([
            'namalengkap' => $request->namalengkap,
            'namafile' => $request->namafile,
        ]);

        $dataProjectkp = ModelProjectkp::all();
        return redirect()->route('projectkp');
    }

    public function detail($id)
    {
        $data = ModelProjectkp::select('*')
            ->where('id', $id)
            ->get();
        return view('projectkp/detail', ['data' => $data]);
    }

    public function edit($id)
    {
        $data = ModelProjectkp::select('*')
            ->where('id', $id)
            ->get();
        return view('projectkp/edit', ['data' => $data]);
    }

    public function hapus($id)
    {
        $delete = DB::table('projectkp')
            ->where('id', $id)
            ->delete();
        return back()->with('success', 'Data telah terkirim');
    }

    public function update(Request $request)
    {

        $updateting = DB::table('projectkp')
            ->where('id', $request->input('id'))
            ->update([
                'namalengkap' => $request->input('namalengkap'),
                'namafile' => $request->input('namafile'),
            ]);

        $dataProjectkp = ModelProjectkp::all();
        return redirect()->route('projectkp');
    }
}
