<?php

namespace App\Http\Controllers;

use App\Models\ruang;
use Illuminate\Http\Request;

class RuangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataRuang =[
            'ruang'=> ruang::all(), 
        ];
        return view('Ruang/ruang',$dataRuang);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Ruang/tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $data = $request->validate([
            'nama_ruang' => 'required',
            'tanggal' => 'required',
        ]);

        // dd($data);

        ruang::create($request->all());
        return redirect('/ruang')->with('success','Data Berhasil Ditambahkan!');
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
        $edit = ruang::findOrFail($id);
        return view('Ruang/edit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $ruang = ruang::findOrFail($id);

        $ruang->update([
            'nama_ruang' => $request->nama_ruang,
            'tanggal' => $request->tanggal,
        ]);

        return redirect()->route('rg')->with(['success' => 'Data Berhasil Diubah!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $ruang = ruang::findOrFail($id);

        $ruang->delete();

        return redirect()->route('rg')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
