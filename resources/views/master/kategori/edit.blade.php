@extends('layouts.app')

@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb iq-bg-primary">
       <li class="breadcrumb-item"><a href="{{ url('dashboard') }}"><i class="ri-home-4-line mr-1 float-left"></i>Dashboard</a></li>
       <li class="breadcrumb-item"><a href="{{ url('kategory') }}"></i>Kategori Barang</a></li>
       <li class="breadcrumb-item active" aria-current="page">Edit Data</li>
    </ol>
 </nav>
 <div class="card">
    <div class="card-body">
       <form action="{{ url('kategory/'. $kategory->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-row">
            <div class="col-md-12 mb-3">
                <label for="kategory" class="form-label">Kategori Barang <span class="text-danger">*</span></label>
                <input type="text" name="kategory" id="kategory" class="form-control" placeholder="" value="{{ $kategory->kategory }}">
            </div>
            <div class="col-md-12 mb-3">
                <label for="kategory_ket" class="form-label">Keterangan<span class="text-danger"></span></label>
                <textarea class="form-control -bottom-3" name="kategory_ket" id="kategory_ket" class="form-control" rows="4">{{ $kategory->kategory_ket }}</textarea>
            </div>
        </div>
        <div class="modal-footer">
            <button class="btn btn-primary">Simpan</button>
            <a href="{{ url('kategory') }}" class="btn btn-secondary">Batal</a>
        </div>
       </form>
    </div>
 </div>
@endsection

