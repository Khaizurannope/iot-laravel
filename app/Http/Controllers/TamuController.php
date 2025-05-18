<?php

namespace App\Http\Controllers;

use App\Models\modeltes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TamuController extends Controller
{
    public function index() {
        $tamu = modeltes::get();
        return view("tamu.index", compact('tamu'));
    }

    public function create() {
        return view("tamu.create");
    }

    public function store(Request $request) {
        $request->validate([
            'nama_tamu' => 'required|string|max:255',
            'instansi' => 'required|string|max:255',
            'tujuan_kunjungan' => 'required|string|max:255',
            'waktu_kunjungan' => 'required|date',
            'kontak' => 'nullable|string|max:255',
            'status' => 'string|max:255',
        ]);

        modeltes::create([
            "nama_tamu" => $request->nama_tamu,
            "instansi" => $request->instansi,
            "tujuan_kunjungan" => $request->tujuan_kunjungan,
            "waktu_kunjungan" => $request->waktu_kunjungan,
            "kontak" => $request->kontak,
            "status" => $request->status,
            "created_at" => now(),
            "updated_at" => now(),
        ]);

        return redirect()->route('tamu.index')->with('success', 'Data tamu berhasil ditambahkan');
    }

    public function edit($id) {
    $tamu = DB::table('tamus')->where('id', $id)->first();
    return view('tamu.edit', compact('tamu'));
}

public function update(Request $request, $id) {
    DB::table('tamus')->where('id', $id)->update([
        'nama_tamu' => $request->nama_tamu,
        'instansi' => $request->instansi,
        'tujuan_kunjungan' => $request->tujuan_kunjungan,
        'waktu_kunjungan' => $request->waktu_kunjungan,
        'kontak' => $request->kontak,
        'status' => $request->status,
        'updated_at' => now()
    ]);

    return redirect()->route('tamu.index')->with('success', 'Data berhasil diperbarui.');
}

public function destroy($id) {
    DB::table('tamus')->where('id', $id)->delete();
    return redirect()->route('tamu.index')->with('success', 'Data berhasil dihapus.');
}

}
