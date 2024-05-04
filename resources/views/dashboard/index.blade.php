@extends('layouts.app')

@section('content')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb iq-bg-primary">
       <li class="breadcrumb-item"><a href="{{ url('dashboard') }}"><i class="ri-home-4-line mr-1 float-left"></i>Dashboard</a></li>
    </ol>
 </nav>
 {{-- <h3>Dashboard Masih Proses Silahkan Pilih Menu Disamping</h3> --}}
        <div class="row">
            <div class="col-md-6 col-lg-3">
                <div class="card card-block card-stretch card-height">
                    <div class="card-body">
                        <div class="card-header card-height bg-primary text-center rounded">
                            <h4 class="text-white"><b>Jumlah Barang</b></h4>
                        </div>
                        <h2 class="text-center"><span class="counter">{{ $stok }}</span></h2>
                        <div class="iq-progress-bar bg-primary-light mt-2">
                            <span class="bg-primary iq-progress progress-1" data-percent="2"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card card-block card-stretch card-height">
                    <div class="card-body">
                        <div class="card-header card-height bg-warning text-center rounded">
                            <h4 class="text-white"><b>Barang Masuk</b></h4>
                        </div>
                        <h2 class="text-center"><span class="counter">{{ $bm }}</span></h2>
                        <div class="iq-progress-bar bg-primary-light mt-2">
                            <span class="bg-warning iq-progress progress-1" data-percent="4"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card card-block card-stretch card-height">
                    <div class="card-body">
                        <div class="card-header card-height bg-info text-center rounded">
                            <h4 class="text-white"><b>Barang Keluar</b></h4>
                        </div>
                        <h2 class="text-center"><span class="counter">{{ $bk }}</span></h2>
                        <div class="iq-progress-bar bg-primary-light mt-2">
                            <span class="bg-info iq-progress progress-1" data-percent="3"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card card-block card-stretch card-height">
                    <div class="card-body">
                        <div class="card-header card-height bg-purple text-center rounded">
                            <h4 class="text-white"><b>Jumlah Barang Masuk</b></h4>
                        </div>
                        <h2 class="text-center"><span class="counter">{{ $jbm }}</span></h2>
                        <div class="iq-progress-bar bg-primary-light mt-2">
                            <span class="bg-purple iq-progress progress-1" data-percent="2"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card card-block card-stretch card-height">
                    <div class="card-body">
                        <div class="card-header card-height bg-green text-center rounded">
                            <h4 class="text-white"><b>Jumlah Barang Keluar</b></h4>
                        </div>
                        <h2 class="text-center"><span class="counter">{{ $jbk }}</span></h2>
                        <div class="iq-progress-bar bg-primary-light mt-2">
                            <span class="bg-green iq-progress progress-1" data-percent="6"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card card-block card-stretch card-height">
                    <div class="card-body">
                        <div class="card-header card-height bg-red text-center rounded">
                            <h4 class="text-white"><b>Kategori</b></h4>
                        </div>
                        <h2 class="text-center"><span class="counter">{{ $kategory }}</span></h2>
                        <div class="iq-progress-bar bg-primary-light mt-2">
                            <span class="bg-red iq-progress progress-1" data-percent="6"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card card-block card-stretch card-height">
                    <div class="card-body">
                        <div class="card-header card-height bg-orange text-center rounded">
                            <h4 class="text-white"><b>Divisi</b></h4>
                        </div>
                        <h2 class="text-center"><span class="counter">{{ $divisi }}</span></h2>
                        <div class="iq-progress-bar bg-primary-light mt-2">
                            <span class="bg-orange iq-progress progress-1" data-percent="5"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card card-block card-stretch card-height">
                    <div class="card-body">
                        <div class="card-header card-height bg-gray text-center rounded">
                            <h4 class="text-white"><b>User</b></h4>
                        </div>
                        <h2 class="text-center"><span class="counter">{{ $user }}</span></h2>
                        <div class="iq-progress-bar bg-primary-light mt-2">
                            <span class="bg-gray iq-progress progress-1" data-percent="4"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection
