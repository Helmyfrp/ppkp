<?php

namespace App\Http\Controllers;

use App\Models\ModelDosenpembimbing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class DosenpembimbingController extends Controller
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
        $dataDosenpembimbing = ModelDosenpembimbing::all();
        return view('dosenpembimbing/dosenpembimbing', ['data' => $dataDosenpembimbing]);
    }


    public function insert(Request $request)
    {

        $data = ModelDosenpembimbing::insert([
            'nidn' => $request->nidn,
            'name' => $request->name,
            'jeniskelamin' => $request->jeniskelamin,
            'status' => $request->status,
            'email' => $request->email,
            'password' => Hash::make($request->password),

        ]);

        $dataDosenpembimbing = ModelDosenpembimbing::all();
        return redirect()->route('dosenpembimbing');
    }

    public function detail($nidn)
    {
        $data = ModelDosen::select('*')
            ->where('nidn', $nidn)
            ->get();
        return view('dosenpembimbing/detail', ['data' => $data]);
    }

    public function edit($nidn)
    {
        $data = ModelDosenpembimbing::select('*')
            ->where('nidn', $nidn)
            ->get();
        return view('dosenpembimbing/edit', ['data' => $data]);
    }

    public function hapus($nidn)
    {
        $delete = DB::table('dosenpembimbing')
            ->where('nidn', $nidn)
            ->delete();
        return back()->with('success', 'Data telah terkirim');
    }

    public function update(Request $request)
    {

        $updateting = DB::table('dosenpembimbing')
            ->where('id', $request->input('id'))
            ->update([
                'nidn' => $request->input('nidn'),
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'status' => $request->input('status')
            ]);

        $dataDosenpembimbing = ModelDosenpembimbing::all();
        return redirect()->route('dosenpembimbing');
    }
}
