{{-- @extends('layouts.app')

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
                <h5>brg</h5>
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
                                <th scope="col">STOK AWAL</th>
                                <th scope="col">BARANG MASUK</th>
                                <th scope="col">TOTAL</th>
                             </tr>
                          </thead>
                          <tbody>
                            @foreach ($detail as $row )
                            <tr>
                                <th>{{ $loop->iteration }}</th>
                                <td>{{ $row->stok->kode_barang}}</td>
                                <td>{{ $row->stok->nama_barang}}</td>
                                <td>{{ $row->stok_awal}}</td>
                                <td>{{ $row->stok_masuk }}</td>
                                <td>{{ $row->total_stok }}</td>
                            </tr>
                            @endforeach
                          </tbody>
                       </table>
                    </div>
                 </div>
             </div>
          </div>

       </div>
    </div>
 </div>

 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.slim.min.js"></script>
 <script src="/assets/js/jquery.js"></script>
 <script src="https://code.jquery.com/jquery-3.7.0.slim.js" integrity="sha256-7GO+jepT9gJe9LB4XFf8snVOjX3iYNb0FHYr5LI1N5c=" crossorigin="anonymous"></script>

 {{-- <script>
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
</script> --}}
<script>
    $('.btn-filter').click(function(){
        e.preventDefault();
        alert('test');
    });
</script>
@endsection

 --}}
