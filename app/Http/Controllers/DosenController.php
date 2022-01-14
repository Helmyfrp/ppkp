<?php

namespace App\Http\Controllers;

use App\Models\ModelDosen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class DosenController extends Controller
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

        $dataDosen = ModelDosen::all();
        return view('dosen/dosen', ['data' => $dataDosen]);
    }


    public function insert(Request $request)
    {

        $data = ModelDosen::insert([
            'nidn' => $request->nidn,
            'name' => $request->name,
            'jeniskelamin' => $request->jeniskelamin,
            'status' => $request->status,
            'email' => $request->email,
            'password' => Hash::make($request->password),

        ]);

        $dataDosen = ModelDosen::all();
        return redirect()->route('dosen');
    }

    public function detail($nidn)
    {
        $data = ModelDosen::select('*')
            ->where('nidn', $nidn)
            ->get();
        return view('dosen/detail', ['data' => $data]);
    }

    public function edit($nidn)
    {
        $data = ModelDosen::select('*')
            ->where('nidn', $nidn)
            ->get();
        return view('dosen/edit', ['data' => $data]);
    }

    public function hapus($nidn)
    {
        $delete = DB::table('dosen')
            ->where('nidn', $nidn)
            ->delete();
        return back()->with('success', 'Data telah terkirim');
    }

    public function update(Request $request)
    {

        $updateting = DB::table('dosen')
            ->where('id', $request->input('id'))
            ->update([
                'nidn' => $request->input('nidn'),
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'status' => $request->input('status')
            ]);

        $dataDosen = ModelDosen::all();
        return redirect()->route('dosen');
    }
}
