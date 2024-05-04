<?php

namespace App\Http\Controllers;

use line;
use App\Models\Stok;
use App\Models\BarangMasuk;
use App\Models\BarangKeluar;
use Illuminate\Http\Request;
use App\Models\BarangMasuk_line;
use App\Models\BarangKeluar_line;
use App\Models\Divisi;
use App\Models\User;
use App\Models\Kategory;


class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stok = Stok::count();
        $bm = BarangMasuk::count();
        $bk = BarangKeluar::count();
        $jbm = BarangMasuk_line::count();
        $jbk = BarangKeluar_line::count();
        $divisi = Divisi::count();
        $user = User::count();
        $kategory = Kategory::count();
        return view('dashboard.index', [
            'title' => 'Dashboard',
            'stok' => $stok,
            'bm' => $bm,
            'bk' => $bk,
            'jbm' => $jbm,
            'jbk' => $jbk,
            'divisi' => $divisi,
            'user' => $user,
            'kategory' => $kategory,
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
        //
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
}
