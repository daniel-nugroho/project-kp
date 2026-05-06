<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kwitansi;

class KwitansiController extends Controller
{
    public function index()
    {
        $data = Kwitansi::latest()->get();
        return view('kwitansi.index', compact('data'));
    }

    public function create()
    {
        return view('kwitansi.create');
    }

    public function store(Request $request)
    {
        $user = auth()->user();

        // nomor otomatis
        $last = Kwitansi::latest()->first();
        $no = $last ? $last->id + 1 : 1;

        $nomor = 'KW-' . date('Y') . '-' . str_pad($no, 4, '0', STR_PAD_LEFT);

        Kwitansi::create([
            'admin_id' => $user->id,
            'nomor_kwitansi' => $nomor,
            'tanggal' => $request->tanggal,
            'jumlah' => $request->jumlah,
        ]);

        return redirect('/kwitansi');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        Kwitansi::find($id)->delete();
        return redirect('/kwitansi');
    }
}