<?php

namespace App\Http\Controllers;

use App\Models\Stok;
use App\Models\Kategory;
use Illuminate\Http\Request;

class KategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('master.kategori.index',
        [
            'title' => 'Data Kategori',
            'kategory' => Kategory::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'kategory' => 'required|unique:kategories,kategory',
            ],
            [
                'kategory.required' => 'Nama Kategori harus diisi',
                'kategory.unique' => 'Nama Kategori sudah ada',
            ]
        );

        Kategory::create(
            [
                'kategory' => $request->kategory,
                'kategory_ket' => $request->kategory_ket,
            ]
        );

        return redirect()->route('kategory.index')->with('success', 'Data Kategori berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $kategory = Kategory::find($id);
        return view('stok_awal.data_barang.detail',
            [
                'title' => 'Data Kategori',
                'stok' => Stok::where('kategory', $kategory->id)->get(),
            ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $kategory = Kategory::find($id);
        return view('master.kategori.edit',
            [
                'title' => 'Edit Data Kategori Barang',
                // 'kategory' => $kategory,
            ], compact('kategory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $kategory = Kategory::find($id);

        $request->validate(
            [
                'kategory' => 'required|unique:kategories,kategory,' . $kategory->id,
            ],
            [
                'kategory.required' => 'Nama Kategori harus diisi',
                'kategory.unique' => 'Nama Kategori sudah ada',
            ]
        );

        $kategory->update(
            [
                'kategory' => $request->kategory,
                'kategory_ket' => $request->kategory_ket,
            ]
        );

        return redirect()->route('kategory.index')->with('success', 'Data Kategori berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kategory = Kategory::find($id);
        $kategory->delete();

        return redirect()->route('kategory.index')->with('success', 'Data Kategori berhasil dihapus');
    }
}
