
<!DOCTYPE html>
<html lang="en">
  <head>
  @notifyCss
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Purple Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="https://demo.bootstrapdash.com/purple-admin-free/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="https://demo.bootstrapdash.com/purple-admin-free/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="https://demo.bootstrapdash.com/purple-admin-free/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="https://demo.bootstrapdash.com/purple-admin-free/assets/images/favicon.ico" />
  </head>
  <body>
    
     @include('Partials.Header')



     @include('notify::components.notify')





     @include('Partials.Navbar')





     <div class="container">


        @yield('container')


     </div>
     




     <!-- {{-- this script for report generate --}} -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>




    <!-- plugins:js -->
    <script src="https://demo.bootstrapdash.com/purple-admin-free/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="https://demo.bootstrapdash.com/purple-admin-free/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="https://demo.bootstrapdash.com/purple-admin-free/assets/js/jquery.cookie.js" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="https://demo.bootstrapdash.com/purple-admin-free/assets/js/off-canvas.js"></script>
    <script src="https://demo.bootstrapdash.com/purple-admin-free/assets/js/hoverable-collapse.js"></script>
    <script src="https://demo.bootstrapdash.com/purple-admin-free/assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="https://demo.bootstrapdash.com/purple-admin-free/assets/js/dashboard.js"></script>
    <script src="https://demo.bootstrapdash.com/purple-admin-free/assets/js/todolist.js"></script>
    <!-- End custom js for this page -->

    @notifyJs

    <!-- {{-- @stack('yourJsCode') is for report generate --}} -->
    @stack('yourJsCode')

  </body>
</html>