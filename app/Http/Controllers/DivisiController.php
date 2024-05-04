<?php

namespace App\Http\Controllers;

use App\Models\Divisi;
use Illuminate\Http\Request;

class DivisiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('master.divisi.index',
            [
                'title' => 'Divisi',
                'divisi' => Divisi::all(),
            ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'nama_divisi' => 'required|unique:divisis,nama_divisi',
            ],
            [
                'nama_divisi.required' => 'Nama Divisi harus diisi',
                'nama_divisi.unique' => 'Nama Divisi sudah ada',
            ]
        );

        Divisi::create(
            [
                'nama_divisi' => $request->nama_divisi,
                'divisi_ket' => $request->divisi_ket,
            ]
        );

        return redirect()->route('divisi.index')->with('success', 'Data Divisi berhasil ditambahkan');

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
        $divisi = Divisi::find($id);
        return view('master.divisi.edit',
            [
                'title' => 'Edit Data Divisi',
            ], compact('divisi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(
            [
                'nama_divisi' => 'required|unique:divisis,nama_divisi,' . $id,
            ],
            [
                'nama_divisi.required' => 'Nama Divisi harus diisi',
                'nama_divisi.unique' => 'Nama Divisi sudah ada',
            ]
        );

        Divisi::where('id', $id)->update(
            [
                'nama_divisi' => $request->nama_divisi,
                'divisi_ket' => $request->divisi_ket,
            ]
        );

        return redirect()->route('divisi.index')->with('success', 'Data Divisi berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Divisi::destroy($id);
        return redirect()->route('divisi.index')->with('success', 'Data Divisi berhasil dihapus');
    }
}
