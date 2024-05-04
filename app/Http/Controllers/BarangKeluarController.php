<?php

namespace App\Http\Controllers;

use App\Models\Stok;
use App\Models\Divisi;
use App\Models\Kategory;
use App\Models\BarangKeluar;
use Illuminate\Http\Request;
use App\Models\BarangKeluar_line;
use Illuminate\Support\Facades\App;

class BarangKeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barang_keluar = BarangKeluar::orderBy('created_at', 'DESC')->get();
        return view('barang_keluar.index',
        [
            'title' => 'Barang Keluar',
            'barang_keluar' => $barang_keluar,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kode_barang_keluar ='BK-'.date('Ymd-').rand();
        $kategory = Kategory::orderBy('kategory', 'ASC')->get();
        $divisi = Divisi::all();
        return view('barang_keluar.add',
        [
            'kategory' => $kategory,
            'kode_barang_keluar' => $kode_barang_keluar,
            'title' => 'Barang Keluar',
            'divisi' => $divisi,
        ]);
    }
    public function getStok($id_kategory)
    {
        $kode_barang_keluar ='BK-'.date('Ymd-').rand();
        $kategory = Kategory::orderBy('kategory', 'ASC')->get();
        $stok = Stok::where('kategory', $id_kategory)->get();
        $divisi = Divisi::all();

        return view('barang_keluar.add',
        [
            'kategory' => $kategory,
            'kode_barang_keluar' => $kode_barang_keluar,
            'stok' => $stok,
            'title' => 'Barang Keluar',
            'divisi' => $divisi,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $stok = $request->stok;
        $kbk = BarangKeluar::insertGetId([
            'kode_barang_keluar' => $request->kode_barang_keluar,
            'divisi_id' => $request->divisi,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        foreach ($stok as $e=>$sk){
            if($request->stok_keluar[$e] == 0){
                continue;
            }
            $dt_stok = Stok::where('id', $stok[$e])->first();
            $stok_awal = $dt_stok->jumlah;
            if($request->stok_keluar[$e] > $stok_awal){
                return redirect()->back()->with('warning', 'Stok tidak mencukupi');
            }else{
                $total_stok = $stok_awal - $request->stok_keluar[$e];
                BarangKeluar_line::insert([
                    'kode_barang_keluar' => $kbk,
                    'kode_barang' => $stok[$e],
                    'stok_awal' => $stok_awal,
                    'stok_keluar' => $request->stok_keluar[$e],
                    'total_stok' => $total_stok,
                ]);

                Stok::where('id', $stok[$e])->update([
                    'jumlah' => $total_stok,
                ]);
            }
        }
        return redirect()->route('barangkeluar.index')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $detail = BarangKeluar_line::where('kode_barang_keluar', $id)->get();
        return view('barang_keluar.detail',
        [
            'title' => 'Barang Keluar',
            'detail' => $detail,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function pdf()
    {
        // $detail = BarangMasuk_line::limit(10)->get();
        // return view('barang_masuk.pdf',[
        //     'detail' => $detail,
        //     'title' => 'Barang Masuk',
        // ]);
        $barang_keluar = BarangKeluar::orderBy('created_at', 'DESC')->get();
        $detail = BarangKeluar_line::limit(10)->get();
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('barang_keluar.pdf', compact('detail'));
        return $pdf->stream('laporan.pdf');
    }
}
