

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>{{ isset($title) ? $title : 'Title tidak diatur' }} | INV </title>

      <!-- Favicon -->
      <link rel="stylesheet" href="{{ url('/assets/css/backend-plugin.min.css') }}">
      <link rel="stylesheet" href="{{ url('/assets/css/backend.css?v=1.0.0') }}">
      <link rel="stylesheet" href="{{ url('/assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css') }}">
      <link rel="stylesheet" href="{{ url('/assets/vendor/remixicon/fonts/remixicon.css') }}">

      <link rel="stylesheet" href="{{ url('/assets/vendor/tui-calendar/tui-calendar/dist/tui-calendar.css') }}">
      <link rel="stylesheet" href="{{ url('/assets/vendor/tui-calendar/tui-date-picker/dist/tui-date-picker.css') }}">
      <link rel="stylesheet" href="{{ url('/assets/vendor/tui-calendar/tui-time-picker/dist/tui-time-picker.css') }}">

    </head>
  <body class=" color-light ">
    <!-- loader END -->
    <!-- Wrapper Start -->
    <div class="wrapper">

    <!-- SIDEBAR -->
    @include('layouts.sidebar')
    <!-- SIDEBAR END -->

    <!-- NAVBAR -->
    @include('layouts.navbar')
    <!-- NAVBAR END -->

    {{-- MAIN MENU --}}
    {{-- @include('dashboard') --}}
    {{-- MAIN MENU END --}}
      <div class="content-page">
      <div class="container-fluid">
         <div class="row">
            <div class="col-lg-12">
               <!-- CONTAINER OPEN -->
               @yield('content')
               <!-- CONTAINER CLOSED -->
            </div>
         </div>
      </div>
      </div>
    </div>
    <!-- Wrapper End-->

    <!-- Modal list start -->
    <!-- MODAL LOGOUT -->
    <div class="modal fade" data-bs-backdrop="static" id="modalLogout">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form method="POST" action="/logout" name="myFormH" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header">
                    <h5 class="modal-title">Keluar</h5>
                    <button type="reset" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                    <p>Anda yakin ingin keluar?</p>
                    </div>
                    <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Ya</button>
                    <button type="reset" data-bs-dismiss="modal" class="btn btn-secondary pd-x-25">Batal</button>
                    </div>
                </div>
            </form>
        </div>
      </div>

     <!-- FOOTER -->
     {{-- @include('layouts.footer') --}}
     <!-- FOOTER END -->

    <!-- Backend Bundle JavaScript -->
    <script src="{{ url('/assets/js/backend-bundle.min.js') }}"></script>

    <!-- Table Treeview JavaScript -->
    <script src="{{ url('/assets/js/table-treeview.js') }}"></script>

    <!-- Chart Custom JavaScript -->
    <script src="{{ url('/assets/js/customizer.js') }}"></script>

    <!-- Chart Custom JavaScript -->
    <script async src="{{ url('/assets/js/chart-custom.js') }}"></script>
    <!-- Chart Custom JavaScript -->
    <script async src="{{ url('/assets/js/slider.js') }}"></script>

    <!-- app JavaScript -->
    <script src="{{ url('/assets/js/app.js') }}"></script>

    <script src="{{ url('/assets/js/jquery.js') }}"></script>

    <script src="{{ url('/assets/vendor/moment.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  </body>

</html>
