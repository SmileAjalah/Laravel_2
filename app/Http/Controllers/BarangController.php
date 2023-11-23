<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataBarang =[
            'barang'=> Barang::all(), 
        ];
        return view('Barang/barang',$dataBarang);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Barang/tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $data = $request->validate([
            'kode_barang' => 'required',
            'nama_barang' => 'required',
            'tanggal_pembelian' => 'required',
            'type_barang' => 'required',
            'harga_barang' => 'required',
            'jumlah' => 'required',
            'keterangan' => 'required',
            'kode_investaris' => 'required'
        ]);

        // dd($data);

        Barang::create($request->all());
        return redirect('/barang')->with('success','Data Berhasil Ditambahkan!');
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
        $edit = Barang::findOrFail($id);
        return view('Barang/edit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $barang = Barang::findOrFail($id);

        $barang->update([
            'kode_barang' => $request->kode_barang,
            'nama_barang' => $request->nama_barang,
            'tanggal_pembelian' => $request->tanggal_pembelian,
            'type_barang' => $request->type_barang,
            'harga_barang' => $request->harga_barang,
            'jumlah' => $request->jumlah,
            'keterangan' => $request->keterangan,
            'kode_investaris' => $request->kode_investaris
        ]);

        return redirect()->route('br')->with(['success' => 'Data Berhasil Diubah!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $barang = Barang::findOrFail($id);

        $barang->delete();

        return redirect()->route('br')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
