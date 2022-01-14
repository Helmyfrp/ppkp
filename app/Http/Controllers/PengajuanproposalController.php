<?php

namespace App\Http\Controllers;

use App\Models\ModelPengajuanproposal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class PengajuanproposalController extends Controller
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
        $dataPengajuanproposal= ModelPengajuanproposal::latest()->get();
        return view('pengajuanproposal.pengajuanproposal',compact('dataPengajuanproposal'));
    }

    public function insert(Request $request)
    {

        $data = ModelPengajuanproposal::insert([
            'namalengkap' => $request->namalengkap,
            'namafile' => $request->namafile,
        ]);

        $dataPengajuanproposal = ModelPengajuanproposal::all();
        return redirect()->route('pengajuanproposal');
    }
    
    public function detail($id)
    {
        $data = ModelPengajuanproposal::select('*')
            ->where('id', $id)
            ->get();
        return view('pengajuanproposal/detail', ['data' => $data]);
    }
    public function edit($id)
    {
        $data = ModelPengajuanproposal::select('*')
            ->where('id', $id)
            ->get();
        return view('pengajuanproposal/edit', ['data' => $data]);
    }
    public function hapus($nim)
    {
        $delete = DB::table('pengajuanproposal')
            ->where('id', $id)
            ->delete();
        return back()->with('success', 'Data telah terkirim');
    }
    
}
