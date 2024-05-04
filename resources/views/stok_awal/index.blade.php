@extends('layouts.app')

@section('content')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb iq-bg-primary">
       <li class="breadcrumb-item"><a href="{{ url('dashboard') }}"><i class="ri-home-4-line mr-1 float-left"></i>Dashboard</a></li>
       <li class="breadcrumb-item active" aria-current="page">Data Barang</li>
    </ol>
 </nav>
<div class="container-fluid">
    <div class="row">
       <div class="col-lg-12">
          <div class="card card-block card-stretch card-height">
            <div class="card-header d-flex justify-content-between">
                <div class="iq-header-title">
                {{-- <form action="databarang" method="GET">
                    @csrf
                    <div class="row">
                        <div class="col-sm-8 p-2 ">
                            <select name='kategory' id='kategory' class="form-control">
                                <option selected disabled value="">Filter Kategori</option>
                                @foreach ($kategory as $kty )
                                <option value="{{ $kty->kategory }}">{{ $kty->kategory }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-sm-3">
                            <button type="submit" class="btn btn-primary mt-2 p-2"><i class="ri-filter-3-line mr-1"></i></button>
                        </div>
                    </div>
                </form> --}}
                </div>

                <div class="iq-card-header-toolbar d-flex align-items-center">
                    {{-- button add --}}
                    <a class="btn btn-purple m-1 p-2"  data-bs-effect="effect-super-scaled" data-bs-toggle="modal" href="#TambahDataBarang"><i class="ri-add-line mr-1"></i>Tambah Data</a>
                </div>
            </div>
             <div class="card-body">
                @if (Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ Session::get('success') }}
                    </div>
                @endif
                       <table class="table" width="100%">
                          <thead>
                             <tr>
                                <th class="border-bottom-0" width="1%" scope="col">NO</th>
                                <th scope="col">KODE BARANG</th>
                                <th scope="col">NAMA BARANG</th>
                                <th scope="col">SATUAN BARANG</th>
                                <th scope="col">JUMLAH BARANG</th>
                                <th scope="col">KETERANGAN</th>
                                <th scope="col">AKSI</th>
                             </tr>
                          </thead>
                          <tbody>
                            @if($stok->count() > 0)
                            @foreach ($stok as $row )
                            <tr>
                                <th>{{ $loop->iteration }}</th>
                                <td>{{ $row->kode_barang }}</td>
                                <td>{{ $row->nama_barang }}</td>
                                <td>{{ $row->satuan }}</td>
                                <td>{{ $row->jumlah }}</td>
                                <td>{{ $row->keterangan }}</td>
                                <td>
                                    <div class="flex align-items-center list-user-action">
                                        <a class="btn btn-sm bg-secondary" data-toggle="tooltip" data-id="{{ $row->id }}" data-placement="top" title=""
                                                data-original-title="Edit" href="{{ url('/databarang/' . $row->id .'/edit' )}}"><i class="ri-pencil-line mr-0"></i></a>
                                        <a class="btn btn-sm bg-danger delete" data-toggle="tooltip" data-id="{{ $row->id }}" data-placement="top" title=""
                                                data-original-title="Hapus" href="#"><i class="ri-delete-bin-line mr-0"></i></a>
                                    </div>
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
                    </div>
                 </div>
             </div>
          </div>
          @include('stok_awal.create')
       </div>
    </div>
 </div>

 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
 <script src="https://code.jquery.com/jquery-3.7.0.slim.js" integrity="sha256-7GO+jepT9gJe9LB4XFf8snVOjX3iYNb0FHYr5LI1N5c=" crossorigin="anonymous"></script>

 <script>
    $('.delete').click(function(){
            var stok_id = $(this).attr('data-id');
            var url = "{{ route('databarang.destroy', ':stok_id') }}";

            swal({
                title: "Yakin?",
                text: "Kamu akan menghapus data ini!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                console.log(willDelete);
                if (willDelete) {
                    window.location = "/databarang/"+stok_id;
                    swal("Data Berhasil Dihapus", {
                    icon: "success",
                    });
                } else {
                    swal("Data kamu aman!");
                }
            });
        });
</script>
@endsection


