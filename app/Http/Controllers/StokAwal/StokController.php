<?php

namespace App\Http\Controllers\StokAwal;

use App\Models\Kategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Stok;

class StokController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $stok = Stok::query();
        //filter
        $stok->when($request->kategory, function ($query) use ($request) {
            $query->where('kategory', $request->kategory);
        });

        $stok = $stok->get();

        return view('stok_awal.index',
            [
                'title' => 'Data Barang',
                'kategory' => Kategory::all(),
                'stok' => $stok,
            ]);

    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $kd = Kategory::where('id', $request->kategory)->first();
        $kode_brg = $kd->kategory;
        $kode =date('Ymd-').rand();


        // $stok = Stok::latest()->first();
        // $kode_brg = $request->kategory;
        // if($stok == null){
        //     $kode ='-0002';
        // }else{
        //     $kode = (int) substr($stok->kode_barang, 5, 4) + 1;
        //     $kode = str_pad($kode, 4, '0', STR_PAD_LEFT);
        // }

        $kode_barang = $kode_brg.'-'.$kode;

        $request->merge([
            'kode_barang' => $kode_barang,
        ]);

        Stok::create([
            'kode_barang' => $request->kode_barang,
            'nama_barang' => $request->nama_barang,
            'kategory' => $request->kategory,
            'satuan' => $request->satuan,
            'jumlah' => $request->jumlah,
            'keterangan' => $request->keterangan,
        ]);

        return redirect()->back()->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
        return view('stok_awal.edit',
            [
                'title' => 'Edit Data Barang',
                'kategory' => Kategory::all(),
                'stok' => Stok::findOrFail($id),
            ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $stok = Stok::find($id);
        $stok->update([
            'nama_barang' => $request->nama_barang,
            'kategory' => $request->kategory,
            'satuan' => $request->satuan,
            'jumlah' => $request->jumlah,
            'keterangan' => $request->keterangan,
        ]);

        return redirect()->route('databarang.index')->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $stok = Stok::find($id);
        $stok->delete();
        return redirect()->back()->with('success', 'Data berhasil dihapus');
    }

    // public function filter(Request $request)
    // {
    //     dd($request->all());
    //     $kategory = Kategory::find($request->kategory);
    //     return view('stok_awal.data_barang.index',
    //         [
    //             'title' => 'Data Barang',
    //             'stok' => Stok::where('kategory', $kategory->id)->get(),
    //         ]);
    // }

    public function search(Request $request){
        if($request->has('search')){
            $stok = Stok::where('nama_barang', 'like', '%'.$request->search.'%')->get();
        }else{
            $stok = Stok::all();
        }
        return view('stok_awal.index',
            [
                'title' => 'Data Barang',
                'stok' => $stok,
            ]);
    }
}
