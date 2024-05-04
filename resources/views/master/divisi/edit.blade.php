@extends('layouts.app')

@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb iq-bg-primary">
       <li class="breadcrumb-item"><a href="{{ url('dashboard') }}"><i class="ri-home-4-line mr-1 float-left"></i>Dashboard</a></li>
       <li class="breadcrumb-item"><a href="{{ url('divisi') }}"></i>Divisi</a></li>
       <li class="breadcrumb-item active" aria-current="page">Edit Data</li>
    </ol>
 </nav>
 <div class="card">
    <div class="card-body">
       <form action="{{ url('divisi/'. $divisi->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-row">
            <div class="col-md-12 mb-3">
                <label for="nama_divisi" class="form-label">Divisi<span class="text-danger">*</span></label>
                <input type="text" name="nama_divisi" id="nama_divisi" class="form-control" placeholder="" value="{{ $divisi->nama_divisi }}">
            </div>
            <div class="col-md-12 mb-3">
                <label for="divisi_ket" class="form-label">Keterangan<span class="text-danger"></span></label>
                <textarea class="form-control -bottom-3" name="divisi_ket" id="divisi_ket" class="form-control" rows="4">{{ $divisi->divisi_ket }}</textarea>
            </div>
        </div>
        <div class="modal-footer">
            <button class="btn btn-primary">Simpan</button>
            <a href="{{ url('divisi') }}" class="btn btn-secondary">Batal</a>
        </div>
       </form>
    </div>
 </div>
@endsection


