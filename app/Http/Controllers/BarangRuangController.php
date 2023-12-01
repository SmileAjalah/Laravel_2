<?php

namespace App\Http\Controllers;

use App\Models\BarangRuang;
use Illuminate\Http\Request;

class BarangRuangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataBarangruang =[
            'barangruang'=> BarangRuang::all(), 
        ];
        return view('BarangRuang/barangruang',$dataBarangruang);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('BarangRuang/tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $data = $request->validate([
            'id_barang' => 'required',
            'jumlah' => 'required',
            'baik' => 'required',
            'rusakdiperbaiki' => 'required',
            'rusaktidakdiperbaiki' => 'required',
            'kode_ruang' => 'required',
            'id_pinjam' => 'required',
        ]);

        // dd($data);

        BarangRuang::create($request->all());
        return redirect('/barangruang')->with('success','Data Berhasil Ditambahkan!');
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
        $edit = BarangRuang::findOrFail($id);
        return view('BarangRuang/edit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $barangruang = BarangRuang::findOrFail($id);

        $barangruang->update([
            'id_barang' => $request->id_barang,
            'jumlah' => $request->jumlah,
            'baik' => $request->baik,
            'rusakdiperbaiki' => $request->rusakdiperbaiki,
            'rusaktidakdiperbaiki' => $request->rusaktidakdiperbaiki,
            'kode_ruang' => $request->kode_ruang,
            'id_pinjam' => $request->id_pinjam,
        ]);

        return redirect()->route('bg')->with(['success' => 'Data Berhasil Diubah!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pinjaman = BarangRuang::findOrFail($id);

        $pinjaman->delete();

        return redirect()->route('bg')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
