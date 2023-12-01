<?php

namespace App\Http\Controllers;

use App\Models\Pinjaman;
use Illuminate\Http\Request;

class PinjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataPinjaman =[
            'pinjaman'=> Pinjaman::all(), 
        ];
        return view('Pinjaman/pinjaman',$dataPinjaman);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Pinjaman/tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $data = $request->validate([
            'tanggalPinjam' => 'required',
            'barang_id' => 'required',
            'jumlah' => 'required',
            'user_id' => 'required',
            'keterangan' => 'required',
            'tanggalKembali' => 'required',
        ]);

        // dd($data);

        Pinjaman::create($request->all());
        return redirect('/pinjaman')->with('success','Data Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $edit = Pinjaman::findOrFail($id);
        return view('Pinjaman/edit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pinjaman = Pinjaman::findOrFail($id);

        $pinjaman->update([
            'tanggalPinjam' => $request->tanggalPinjam,
            'barang_id' => $request->barang_id,
            'jumlah' => $request->jumlah,
            'user_id' => $request->user_id,
            'keterangan' => $request->keterangan,
            'tanggalKembali' => $request->tanggalKembali,
        ]);

        return redirect()->route('pn')->with(['success' => 'Data Berhasil Diubah!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pinjaman = Pinjaman::findOrFail($id);

        $pinjaman->delete();

        return redirect()->route('pn')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
