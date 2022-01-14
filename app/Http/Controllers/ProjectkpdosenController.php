<?php

namespace App\Http\Controllers;

use App\Models\ModelProjectkpdosen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class ProjectkpdosenController extends Controller
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

        $dataProjectkpdosen = ModelProjectkpdosen::all();
        return view('projectkpdosen/projectkpdosen', compact('dataProjectkpdosen'));
    }


    public function insert(Request $request)
    {

        $data = ModelProjectkpdosen::insert([
            'namalengkap' => $request->namalengkap,
            'namafile' => $request->namafile,
        ]);

        $dataProjectkpdosen = ModelProjectkpdosen::all();
        return redirect()->route('projectkpdosen');
    }

    public function detail($id)
    {
        $data = ModelProjectkpdosen::select('*')
            ->where('id', $id)
            ->get();
        return view('projectkpdosen/detail', ['data' => $data]);
    }

    public function edit($id)
    {
        $data = ModelProjectkpdosen::select('*')
            ->where('id', $id)
            ->get();
        return view('projectkpdosen/edit', ['data' => $data]);
    }

    public function hapus($id)
    {
        $delete = DB::table('projectkpdosen')
            ->where('id', $id)
            ->delete();
        return back()->with('success', 'Data telah terkirim');
    }

    public function update(Request $request)
    {

        $updateting = DB::table('projectkpdosen')
            ->where('id', $request->input('id'))
            ->update([
                'namalengkap' => $request->input('namalengkap'),
                'namafile' => $request->input('namafile'),
            ]);

        $dataProjectkpdosen = ModelProjectkpdosen::all();
        return redirect()->route('projectkpdosen');
    }
}
