@extends('layouts.app')

@section('content')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb iq-bg-primary">
       <li class="breadcrumb-item"><a href="{{ url('dashboard') }}"><i class="ri-home-4-line mr-1 float-left"></i>Dashboard</a></li>
       <li class="breadcrumb-item active" aria-current="page">Data Divisi</li>
    </ol>
 </nav>
<div class="container-fluid">
    <div class="row">
       <div class="col-lg-12">
          <div class="card card-block card-stretch card-height">
             <div class="card-header d-flex justify-content-between">
                <div class="iq-header-title">
                   <h4 class="card-title mb-0">Data Divisi</h4>
                </div>
                <a class="btn btn-purple"  data-bs-effect="effect-super-scaled" data-bs-toggle="modal" href="#Tambahmodal8">Tambah Data</a>
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
                                <th scope="col">DIVISI</th>
                                <th scope="col">KETERANGAN</th>
                                <th width="20%" scope="col">AKSI</th>
                             </tr>
                          </thead>
                          <tbody>
                            @if($divisi->count() > 0)
                            @foreach ($divisi as $row )
                            <tr>
                                <th>{{ $loop->iteration }}</th>
                                <td>{{ $row->nama_divisi }}</td>
                                <td>{{ $row->divisi_ket }}</td>
                                <td>
                                    <div class="flex align-items-center list-user-action">
                                        {{-- <a class="btn btn-sm bg-primary" data-toggle="tooltip" data-id="{{ $row->id }}" data-placement="top" title=""
                                            data-original-title="Pilih" href="{{ url('/stokawal/' . $row->id )}}"><i class="ri-eye-line mr-0"></i></a> --}}
                                        <a class="btn btn-sm bg-secondary" data-toggle="tooltip" data-id="{{ $row->id }}" data-placement="top" title=""
                                                data-original-title="Edit" href="{{ url('/divisi/' . $row->id .'/edit' )}}"><i class="ri-pencil-line mr-0"></i></a>
                                        <a class="btn btn-sm bg-danger delete" data-toggle="tooltip" data-id="{{ $row->id }}" data-placement="top" title=""
                                                data-original-title="Hapus" href="#"><i class="ri-delete-bin-line mr-0"></i></a>
                                    </div>
                            </tr>
                            @endforeach
                            @else
                            <tr>
                                <td class="text-center" colspan="5">Data Kategori Tidak Ada</td>
                            </tr>
                            @endif
                          </tbody>
                       </table>
                    </div>
                 </div>
             </div>
          </div>
          @include('master.divisi.create')
       </div>
    </div>
 </div>

 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
 <script src="https://code.jquery.com/jquery-3.7.0.slim.js" integrity="sha256-7GO+jepT9gJe9LB4XFf8snVOjX3iYNb0FHYr5LI1N5c=" crossorigin="anonymous"></script>

 <script>
    $('.delete').click(function(){
            var divisi_id = $(this).attr('data-id');
            var url = "{{ route('divisi.destroy', ':divisi_id') }}";

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
                    window.location = "/divisi/"+divisi_id;
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


