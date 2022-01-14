<?php

namespace App\Http\Controllers;

use App\Models\ModelUploadkp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UploadkpController extends Controller
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
        $dataUploadkp= ModelUploadkp::latest()->get();
        return view('uploadkp.uploadkp',compact('dataUploadkp'));
    }

    public function insert(Request $request)
    {

        $data = ModelUploadkp::insert([
            'namalengkap' => $request->namalengkap,
            'namafile' => $request->namafile,
        ]);

        $dataUploadkp = ModelUploadkp::all();
        return redirect()->route('uploadkp');
    }
    
    public function detail($id)
    {
        $data = ModelUploadkp::select('*')
            ->where('id', $id)
            ->get();
        return view('uploadkp/detail', ['data' => $data]);
    }
    public function edit($id)
    {
        $data = ModelUploadkp::select('*')
            ->where('id', $id)
            ->get();
        return view('uploadkp/edit', ['data' => $data]);
    }
    public function hapus($nim)
    {
        $delete = DB::table('uploadkp')
            ->where('id', $id)
            ->delete();
        return back()->with('success', 'Data telah terkirim');
    }
    
}
