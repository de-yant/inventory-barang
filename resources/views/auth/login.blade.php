<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Inventory</title>

      <!-- Favicon -->
      <link rel="stylesheet" href="{{ url('/assets/css/backend.css?v=1.0.0') }}">
      <link rel="stylesheet" href="{{ url('/assets/css/backend-plugin.min.css') }}">
      <link rel="stylesheet" href="{{ url('/assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css') }}">
      <link rel="stylesheet" href="{{ url('/assets/vendor/remixicon/fonts/remixicon.css') }}">

      <link rel="stylesheet" href="{{ url('/assets/vendor/tui-calendar/tui-calendar/dist/tui-calendar.css') }}">
      <link rel="stylesheet" href="{{ url('/assets/vendor/tui-calendar/tui-date-picker/dist/tui-date-picker.css') }}">
      <link rel="stylesheet" href="{{ url('/assets/vendor/tui-calendar/tui-time-picker/dist/tui-time-picker.css') }}">
  </head>
  <body class=" ">
      <div class="wrapper">
      <section class="login-content">
         <div class="container">
            <div class="row align-items-center justify-content-center height-self-center">
               <div class="col-lg-5">
                  <div class="card auth-card bg-success">
                     <div class="card-body py-0">
                        <div class="d-flex align-items-center auth-content">
                              <div class="p-3">
                                <div class="text-center">
                                    <img src="{{ url('/assets/images/logo.jpeg') }}" alt="" class="img-fluid" style="width: 100px;">
                                <h3 class="mb-3 text-white text-center"><b>INVENTORY</b></h3>
                                    <x-auth-session-status class="mb-2" :status="session('status')" />
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                    <div class="row">
                                       <div class="col-lg-12">
                                          <div class="floating-label form-group">
                                             <input id="email" class="floating-input form-control" type="email" placeholder=" " name="email" :value="old('email')" required autofocus autocomplete="username">
                                             <label>Surel</label>
                                             <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                          </div>
                                       </div>
                                       <div class="col-lg-12">
                                          <div class="floating-label form-group">
                                             <input id="password" class="floating-input form-control" type="password" placeholder=" "name="password"
                                             required autocomplete="current-password">
                                             <label>Kata Sandi</label>
                                             <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                          </div>
                                       </div>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-white mb-3"> {{ __('Masuk') }}</button>
                                    </div>
                                    </form>
                                    <div class="text-center">
                                        <span class="mr-1"><script>document.write(new Date().getFullYear())</script> ©</span>Inventory
                                    </div>
                              </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      </div>

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

    <script src="{{ url('/assets/vendor/moment.min.js') }}"></script>
  </body>
</html>

