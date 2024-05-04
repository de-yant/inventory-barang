<div class="iq-sidebar  sidebar-default">
    <div class="iq-sidebar-logo d-flex align-items-center">
        <a href="dashboard" class="header-logo">
            <img src="../assets/images/logo.jpeg" alt="logo">
            <h3 class="logo-title light-logo">Menu</h3>
        </a>
        <div class="iq-menu-bt-sidebar ml-0">
            <i class="las la-bars wrapper-menu"></i>
        </div>
    </div>
    <div class="data-scrollbar" data-scroll="4">
        <nav class="iq-sidebar-menu">
            <ul id="iq-sidebar-toggle" class="iq-menu" data-parent="#iq-sidebar-toggle">
                <style>
                    .divider{
                        border-bottom: 1px solid #ccc;
                        margin-top: 10px;
                        margin-bottom: 10px;
                        margin-left: 5%;
                        position:relative;
                        justify-content: flex-start;
                        border-width: 1px;
                        background-color: #dad7d7;
                        border-radius: 5px;
                    }
                    .divider svg{
                        margin-left: 9%;
                        margin-right: 18px;
                        color: #060606;
                    }
                    .divider span{
                        font-size: 12px;
                        font-weight: 600;
                        color: #060606;
                        text-transform: uppercase;
                        letter-spacing: 1px;
                        position: relative;
                        font-style:italic;
                        padding-left: 10px;
                        /* margin-left: 28%; */
                    }
                </style>
                <li class="{{ request()->segment(1) =='dashboard'? 'active' : '' }}">
                    <a href="{{ url('dashboard') }}" class="svg-icon">
                        <svg class="svg-icon" width="25" height="25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                            <polyline points="9 22 9 12 15 12 15 22"></polyline>
                        </svg>
                        <span class="ml-4">Dashboards</span>
                    </a>
                </li>
                @can('stock')
                <li class="">
                    <a href="#master" class="collapsed" data-toggle="collapse" aria-expanded="false">
                        <svg class="svg-icon" id="p-dash16" width="25" height="25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <ellipse cx="12" cy="5" rx="9" ry="3"></ellipse><path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path><path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path>
                        </svg>
                        <span class="ml-4">Master Data</span>
                        <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                        <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                    </a>
                    <ul id="master" class="iq-submenu collapse" data-parent="#master">
                        <li class="{{ request()->segment(1) =='kategory'? 'active open' : '' }}">
                            <a href="{{ url('kategory') }}">
                                <i class="las la-minus"></i><span>Kategori</span>
                            </a>
                        </li>
                        <li class="{{ request()->segment(1) =='divisi'? 'active open' : '' }}">
                            <a href="{{ url('divisi') }}">
                                <i class="las la-minus"></i><span>Divisi</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class=" ">
                    <li class="{{ request()->segment(1) =='databarang'? 'active open' : '' }}">
                        <a href="{{ url('databarang') }}" class="svg-icon">
                            <svg class="svg-icon" width="25" height="25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path>
                                <rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect>
                            </svg>
                            <span class="ml-4">Stok Barang</span>
                        </a>
                    </li>
                    {{-- <li class="">
                        <a href="#data_stok" class="collapsed" data-toggle="collapse" aria-expanded="false">
                            <svg class="svg-icon" width="25" height="25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path>
                                <rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect>
                            </svg>
                            <span class="ml-4">Data Barang</span>
                            <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                            <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                        </a>
                        <ul id="data_stok" class="iq-submenu collapse" data-parent="#data_stok">
                            <li class="">
                                <a href="{{ url('pembeli') }}">
                                    <i class="las la-minus"></i><span>ATK</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="{{ url('penjual') }}">
                                     <i class="las la-minus"></i><span>RTK</span>
                                </a>
                            </li>
                        </ul>
                    </li> --}}
                    {{-- <li class=" ">
                        <a href="#lap_stok" class="collapsed" data-toggle="collapse" aria-expanded="false">
                            <svg class="svg-icon" width="25" height="25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="6 9 6 2 18 2 18 9"></polyline>
                                <path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path>
                                <rect x="6" y="14" width="12" height="8"></rect>
                            </svg>
                            <span class="ml-4">Laporan</span>
                            <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                            <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                        </a>
                        <ul id="lap_stok" class="iq-submenu collapse" data-parent="#lap_stok">
                            <li class="">
                                <a href="{{ url('pembeli') }}">
                                    <i class="las la-minus"></i><span>ATK</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="{{ url('penjual') }}">
                                     <i class="las la-minus"></i><span>RTK</span>
                                </a>
                            </li>
                        </ul>
                    </li> --}}
                </li>
                @endcan
                @can('inbound')
                <li class=" ">
                    {{-- divider --}}
                    {{-- <div class="divider">
                        <svg class="svg-icon" width="25" height="25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path>
                            <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line>
                        </svg>
                        <span >Barang Masuk</span>
                    </div> --}}
                    {{-- divider --}}
                    <li class="{{ request()->segment(1) =='barangmasuk'? 'active open' : '' }}">
                        <a href="{{ route('barangmasuk.index') }}" class="svg-icon">
                            <svg class="svg-icon" width="25" height="25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path>
                                <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line>
                            </svg>
                            <span class="ml-4">Barang Masuk</span>
                        </a>
                    </li>
                    {{-- <li class="">
                        <a href="#data_brgmasuk" class="collapsed" data-toggle="collapse" aria-expanded="false">
                            <svg class="svg-icon" width="25" height="25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path>
                                <rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect>
                            </svg>
                            <span class="ml-4">Data Barang</span>
                            <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                            <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                        </a>
                        <ul id="data_brgmasuk" class="iq-submenu collapse" data-parent="#data_brgmasuk">
                            <li class="">
                                <a href="{{ url('pembeli') }}">
                                    <i class="las la-minus"></i><span>ATK</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="{{ url('penjual') }}">
                                     <i class="las la-minus"></i><span>RTK</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=" ">
                        <a href="#lap_bm" class="collapsed" data-toggle="collapse" aria-expanded="false">
                            <svg class="svg-icon" width="25" height="25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="6 9 6 2 18 2 18 9"></polyline>
                                <path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path>
                                <rect x="6" y="14" width="12" height="8"></rect>
                            </svg>
                            <span class="ml-4">Laporan</span>
                            <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                            <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                        </a>
                        <ul id="lap_bm" class="iq-submenu collapse" data-parent="#lap_bm">
                            <li class="">
                                <a href="{{ url('pembeli') }}">
                                    <i class="las la-minus"></i><span>ATK</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="{{ url('penjual') }}">
                                     <i class="las la-minus"></i><span>RTK</span>
                                </a>
                            </li>
                        </ul>
                    </li> --}}
                </li>
                @endcan
                @can('outbound')
                <li class="">
                    {{-- divider --}}
                    {{-- <div class="divider">
                        <svg class="svg-icon" width="25" height="25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path>
                            <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line>
                        </svg>
                        <span >Barang Keluar</span>
                    </div> --}}
                    {{-- divider --}}
                    <li class="{{ request()->segment(1) =='barangkeluar'? 'active open' : '' }}">
                        <a href="{{ url('barangkeluar') }}" class="svg-icon">
                            <svg class="svg-icon" width="25" height="25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path>
                                <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line>
                            </svg>
                            <span class="ml-4">Barang Keluar</span>
                        </a>
                    </li>
                    {{-- <li class="">
                        <a href="#data_brgkeluar" class="collapsed" data-toggle="collapse" aria-expanded="false">
                            <svg class="svg-icon" width="25" height="25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path>
                                <rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect>
                            </svg>
                            <span class="ml-4">Data Barang</span>
                            <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                            <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                        </a>
                        <ul id="data_brgkeluar" class="iq-submenu collapse" data-parent="#data_brgkeluar">
                            <li class="">
                                <a href="{{ url('pembeli') }}">
                                    <i class="las la-minus"></i><span>ATK</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="{{ url('penjual') }}">
                                     <i class="las la-minus"></i><span>RTK</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=" ">
                        <a href="#lap_bk" class="collapsed" data-toggle="collapse" aria-expanded="false">
                            <svg class="svg-icon" width="25" height="25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="6 9 6 2 18 2 18 9"></polyline>
                                <path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path>
                                <rect x="6" y="14" width="12" height="8"></rect>
                            </svg>
                            <span class="ml-4">Laporan</span>
                            <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                            <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                        </a>
                        <ul id="lap_bk" class="iq-submenu collapse" data-parent="#lap_bk">
                            <li class="">
                                <a href="{{ url('pembeli') }}">
                                    <i class="las la-minus"></i><span>ATK</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="{{ url('penjual') }}">
                                     <i class="las la-minus"></i><span>RTK</span>
                                </a>
                            </li>
                        </ul>
                    </li> --}}
                </li>
                @endcan
                <li class="">
                    <a href="#modalLogout" class="svg-icon" data-bs-effect="effect-super-scaled" data-bs-toggle="modal">
                        <svg class="svg-icon" id="h-05-p" width="25" height="25" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                        </svg>
                        <span class="ml-4">Keluar</span>
                    </a>
                </li>
            </ul>
        </nav>
        <li class="">
        </li>
        <div class="pt-5 pb-2"></div>
    </div>
</div>
