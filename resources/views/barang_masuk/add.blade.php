@extends('layouts.app')

@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb iq-bg-primary">
       <li class="breadcrumb-item"><a href="{{ url('dashboard') }}"><i class="ri-home-4-line mr-1 float-left"></i>Dashboard</a></li>
       <li class="breadcrumb-item active" aria-current="page">Barang Masuk</li>
    </ol>
 </nav>
 <div class="card">
    <form action="{{ route('barangmasuk.store') }}" method="POST">
        @csrf
    <div class="card-body">
        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label for="kode_barang_masuk" class="form-label">Kode Barang Masuk</label>
                <input type="text" name="kode_barang_masuk" id="kode_barang_masuk" class="form-control" placeholder="" value="{{ $kode_barang_masuk }}" readonly>
            </div>
            @if(isset($id_stok))
            <div class="col-md-6 mb-3">
                <label for="kategory" class="form-label">Kategori Barang</label>
                <select name='kategory' id='kategory' class="form-control">
                    <option selected disabled value="">Pilih Kategori Barang</option>
                    @foreach ($kategory as $ktg)
                    <option value="{{ $ktg->id }}" {{ ($id_stok == $ktg->id)? 'selected' : '' }}>{{ $ktg->kategory }}</option>
                    @endforeach
                </select>
            </div>
            @else
            <div class="col-md-6 mb-3">
                <label for="kategory" class="form-label">Kategori Barang</label>
                <select name='kategory' id='kategory' class="form-control">
                    <option selected disabled value="">Pilih Kategori Barang</option>
                    @foreach ($kategory as $ktg)
                    <option value="{{ $ktg->id }}">{{ $ktg->kategory }}</option>
                    @endforeach
                </select>
            @endif
        </div>
       @if(isset($stok))
         <div class="table-responsive">
          <table class="table table-striped table-bordered table-hover">
                <thead>
                 <tr>
                      <th class="border-bottom-0" width="1%" scope="col">No</th>
                      <th scope="col">Kode Barang</th>
                      <th scope="col">Nama Barang</th>
                      <th scope="col">Stok</th>
                      <th scope="col">Stok Masuk</th>
                 </tr>
                </thead>
                <tbody>
                @if($stok->count() > 0)
                 @foreach ($stok as $brg)
                 <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $brg->kode_barang }}</td>
                      <td>{{ $brg->nama_barang }}</td>
                      <td>{{ $brg->jumlah }}</td>
                      <td>
                        <input type="hidden" name="stok[]" id="stok" class="form-control" placeholder="" value="{{ $brg->id }}">
                        <input type="number" name="stok_masuk[]" id="stok_masuk" class="form-control" placeholder="0" value="0">
                      </td>
                 </tr>
                 @endforeach
                 @else
                    <tr>
                    <td class="text-center" colspan="7">Data Barang Tidak Ada</td>
                    </tr>
                 @endif
                </tbody>
          </table>
          <div class="modal-footer">
            <button class="btn btn-primary">Simpan</button>
        </div>
    </div>
</form>
    @endif
 </div>

 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.slim.min.js"></script>
 <script src="/assets/js/jquery.js"></script>
 <script src="https://code.jquery.com/jquery-3.7.0.slim.js" integrity="sha256-7GO+jepT9gJe9LB4XFf8snVOjX3iYNb0FHYr5LI1N5c=" crossorigin="anonymous"></script>

 <script type="text/javascript">
    $(document).ready(function(){
        $("select[name='kategory']").change(function(e){
            const id = $(this).val();
            const url = "{{ url('barangmasuk/kategory') }}/"+id;

            window.location.href = url;
        })
    });
</script>
@endsection


{{-- @extends('layouts.app')

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
       <form action="{{ route('barangmasuk.store') }}" method="POST">
        @csrf
        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label for="kode_barang" class="form-label">Nama Barang<span class="text-danger">*</span></label>
                <select name='kode_barang' id='kode_barang' class="form-control">
                    <option selected disabled value="">Nama Barang</option>
                    @foreach ($stok as $stk )
                    <option value="{{ $stk->kode_barang }}">{{ $stk->nama_barang }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-6 mb-3">
                <label for="barang_masuk" class="form-label">Jumlah Barang Masuk <span class="text-danger">*</span></label>
                <input type="number" name="barang_masuk" id="barang_masuk" class="form-control" placeholder="0">
            </div>
            <div class="col-md-12 mb-3">
                <label for="barang_masuk_ket" class="form-label">Keterangan</label>
                <textarea name="barang_masuk_ket" id="barang_masuk_ket" class="form-control" rows="4"></textarea>
            </div>
        </div>
        <div class="modal-footer">
            <button class="btn btn-primary">Simpan</button>
            <a href="" class="btn btn-secondary">Batal</a>
        </div>
       </form>
    </div>
 </div>
@endsection --}}
