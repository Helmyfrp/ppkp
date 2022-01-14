<?php

namespace App\Http\Controllers;

use App\Models\ModelPengumumanppkp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class PengumumanppkpController extends Controller
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

        $dataPengumumanppkp = ModelPengumumanppkp::all();
        return view('pengumumanppkp/pengumumanppkp', compact('dataPengumumanppkp'));
    }


    public function insert(Request $request)
    {

        $data = ModelPengumumanppkp::insert([
            'nim' => $request->nim,
            'name' => $request->name,
            'jeniskelamin' => $request->jeniskelamin,
            'status' => $request->status,
            'email' => $request->email,
            'password' => Hash::make($request->password),

        ]);

        $dataPengumumanppkp = ModelPengumumanppkp::all();
        return redirect()->route('pengumumanppkp');
    }

    public function detail($nim)
    {
        $data = ModelPengumumanppkp::select('*')
            ->where('nim', $nim)
            ->get();
        return view('pengumumanppkp/detail', ['data' => $data]);
    }

    public function edit($nim)
    {
        $data = ModelPengumumanppkp::select('*')
            ->where('nim', $nim)
            ->get();
        return view('pengumumanppkp/edit', ['data' => $data]);
    }

    public function hapus($nim)
    {
        $delete = DB::table('users')
            ->where('nim', $nim)
            ->delete();
        return back()->with('success', 'Data telah terkirim');
    }

    public function update(Request $request)
    {

        $updateting = DB::table('users')
            ->where('id', $request->input('id'))
            ->update([
                'nim' => $request->input('nim'),
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'status' => $request->input('status')
            ]);

        $dataPengumumanppkp = ModelPengumumanppkp::all();
        return redirect()->route('pengumumanppkp');
    }
}
