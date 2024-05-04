<?php

namespace App\Http\Controllers;


use Session;
use App\Models\Stok;
use App\Models\Kategory;
use Barryvdh\DomPDF\PDF;
use App\Models\BarangMasuk;
use Illuminate\Http\Request;
use App\Models\BarangMasuk_line;
use Illuminate\Support\Facades\App;

class BarangMasukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barang_masuk = BarangMasuk::orderBy('created_at', 'DESC')->get();
        return view('barang_masuk.index',
        [
            'title' => 'Barang Masuk',
            'barang_masuk' => $barang_masuk,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kode_barang_masuk ='BM-'.date('Ymd-').rand();
        $kategory = Kategory::orderBy('kategory', 'ASC')->get();
        return view('barang_masuk.add',
        [
            'kategory' => $kategory,
            'kode_barang_masuk' => $kode_barang_masuk,
            'title' => 'Barang Masuk',
        ]);
    }

    public function getStok($id_kategory)
    {
        $kode_barang_masuk ='BM-'.date('Ymd-').rand();
        $kategory = Kategory::orderBy('kategory', 'ASC')->get();
        $stok = Stok::where('kategory', $id_kategory)->get();

        return view('barang_masuk.add',
        [
            'kategory' => $kategory,
            'kode_barang_masuk' => $kode_barang_masuk,
            'stok' => $stok,
            'title' => 'Barang Masuk',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $stok = $request->stok;
        $kbm = BarangMasuk::insertGetId([
            'kode_barang_masuk' => $request->kode_barang_masuk,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        foreach ($stok as $e=>$sm){
            if($request->stok_masuk[$e] == 0){
                continue;
            }
            $dt_stok = Stok::where('id', $stok[$e])->first();
            $stok_awal = $dt_stok->jumlah;
            $total_stok = $stok_awal + $request->stok_masuk[$e];

            BarangMasuk_line::insert([
                'kode_barang_masuk' => $kbm,
                'kode_barang' => $stok[$e],
                'stok_awal' => $stok_awal,
                'stok_masuk' => $request->stok_masuk[$e],
                'total_stok' => $total_stok,
            ]);

            Stok::where('id', $stok[$e])->update([
                'jumlah' => $total_stok,
            ]);
        }
        return redirect()->route('barangmasuk.index')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $detail = BarangMasuk_line::where('kode_barang_masuk', $id)->get();
        return view('barang_masuk.detail',
        [
            'title' => 'Barang Masuk',
            'detail' => $detail,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $stok = Stok::findOrFail($id);
        return view('barang_masuk.add',
        [
            'stok' => $stok,
            'title' => 'Barang Masuk',
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // $barang_masuk = Stok::findOrFail($id);
        // $barang_masuk->update($request->all());
        // return redirect()->route('barangmasuk.index')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function filter(Request $request)
    {
        dd($request->all());
        // $tgl_awal = $request->tanggal_awal;
        // $tgl_akhir = $request->tanggal_akhir;
        // $barang_masuk = BarangMasuk::whereDate('created_at', '>=', $tgl_awal)->whereDate('created_at', '<=', $tgl_akhir)->get();

        // return view('barang_masuk.index',
        // [
        //     'barang_masuk' => $barang_masuk,
        //     'title' => 'Barang Masuk',
        // ]);
    }

    public function printpdf()
    {

        // $detail = BarangMasuk_line::limit(10)->get();
        // return view('barang_masuk.pdf',[
        //     'detail' => $detail,
        //     'title' => 'Barang Masuk',
        // ]);
        // $barang_masuk = BarangMasuk::orderBy('created_at', 'DESC')->get();
        // $detail = BarangMasuk_line::limit(10)->get();
        // $pdf = App::make('dompdf.wrapper');
        // $pdf->loadView('barang_masuk.pdf', compact('detail'));
        // return $pdf->stream('laporan.pdf');
    }
}
