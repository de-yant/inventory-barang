@extends('layouts.app')

@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb iq-bg-primary">
       <li class="breadcrumb-item"><a href="{{ url('dashboard') }}"><i class="ri-home-4-line mr-1 float-left"></i>Dashboard</a></li>
       <li class="breadcrumb-item"><a href="{{ url('databarang') }}"></i>Data Barang</a></li>
       <li class="breadcrumb-item active" aria-current="page">Edit Data</li>
    </ol>
 </nav>
 <div class="card">
    <div class="card-body">
         <form method="POST" action="{{ url('databarang/'.$stok->id) }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="kode_barang" class="form-label">Kode Barang <span class="text-danger">*</span></label>
                <input type="text" name="kode_barang" id="kode_barang" class="form-control" readonly placeholder="" value="{{ $stok->kode_barang }}">
            </div>
                <div class="form-group">
                    <label for="nama_barang" class="form-label">Nama Barang <span class="text-danger">*</span></label>
                    <input type="text" name="nama_barang" id="nama_barang" class="form-control" placeholder="" value="{{ $stok->nama_barang }}">
                </div>
                <div class="form-group">
                    <label for="kategory" class="form-label">Kategori</label>
                    <select name='kategory' id='kategory' class="form-control">
                        @foreach ($kategory as $kty )
                        <option value="{{ $kty->id }}">{{ $kty->kategory }}</option>
                        @endforeach
                    </select>
                <div class="form-group">
                    <label for="satuan" class="form-label">Satuan</label>
                    <select name='satuan' id='satuan' class="form-control">
                        <option value="Pcs">Pcs</option>
                        <option value="Kg">Kg</option>
                        <option value="Meter">Meter</option>
                        <option value="Liter">Liter</option>
                        <option value="Unit">Unit</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="jumlah" class="form-label">Jumlah</label>
                    <input type="number" name="jumlah" id="jumlah" class="form-control" placeholder="" value="{{ $stok->jumlah }}">
                </div>
                <div class="form-group">
                    <label for="keterangan" class="form-label">Keterangan</label>
                    <textarea name="keterangan" id="keterangan" class="form-control" placeholder="">{{ $stok->keterangan }}</textarea>
                </div>
            <div class="modal-footer">
                <button class="btn btn-primary">Simpan</button>
                <button type="reset" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
            </div>
            </form>
    </div>
 </div>
@endsection

