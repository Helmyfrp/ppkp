<?php

namespace App\Http\Controllers;

use App\Models\ModelProposal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class ProposalController extends Controller
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
        $dataProposal= ModelProposal::latest()->get();
        return view('proposal.proposal',compact('dataProposal'));
    }

    public function insert(Request $request)
    {

        $data = ModelProposal::insert([
            'namalengkap' => $request->namalengkap,
            'namafile' => $request->namafile,
        ]);

        $dataProposal = ModelProposal::all();
        return redirect()->route('proposal');
    }
    
    public function detail($id)
    {
        $data = ModelProposal::select('*')
            ->where('id', $id)
            ->get();
        return view('proposal/detail', ['data' => $data]);
    }
    public function edit($id)
    {
        $data = ModelProposal::select('*')
            ->where('id', $id)
            ->get();
        return view('proposal/edit', ['data' => $data]);
    }
    public function hapus($nim)
    {
        $delete = DB::table('proposal')
            ->where('id', $id)
            ->delete();
        return back()->with('success', 'Data telah terkirim');
    }
    
}
