<!DOCTYPE html>
<html lang="en">

  <head>
<<<<<<< HEAD
  
=======

>>>>>>> Eps 4
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title') Tokap Admin</title>
    <link rel="icon" type="image/png" href="{{url('favicon.png')}}">
<<<<<<< HEAD
=======

>>>>>>> Eps 4
    <!-- Bootstrap core CSS-->
    <link href="{{url('theme-sbadmin/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="{{url('theme-sbadmin/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">

<<<<<<< HEAD
    <!-- Page level plugin CSS-->
    <link href="{{url('theme-sbadmin/vendor/datatables/dataTables.bootstrap4.css')}}" rel="stylesheet">

=======
>>>>>>> Eps 4
    <!-- Custom styles for this template-->
    <link href="{{url('theme-sbadmin/css/sb-admin.css')}}" rel="stylesheet">
    @stack('css')
  </head>

  <body id="page-top">

<<<<<<< HEAD
    @include('admin.navbar')
=======
@include('admin.navbar')
>>>>>>> Eps 4

    <div id="wrapper">

      <!-- Sidebar -->
      @include('admin.sidebar')
<<<<<<< HEAD

=======
>>>>>>> Eps 4
      <div id="content-wrapper">

        <div class="container-fluid">

<<<<<<< HEAD
          <!-- Page Content -->
          @yield('content')
=======
        <!-- Page Content -->
        @yield('content')
>>>>>>> Eps 4
        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
<<<<<<< HEAD
      @include('admin.footer')
=======
        @include('admin.footer')
>>>>>>> Eps 4
      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!--Modal-->
<<<<<<< HEAD
    @stack('modal')
=======
 @stack('modal')

>>>>>>> Eps 4
    <!-- Bootstrap core JavaScript-->
    <script src="{{url('theme-sbadmin/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{url('theme-sbadmin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{url('theme-sbadmin/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{url('theme-sbadmin/js/sb-admin.min.js')}}"></script>
    <script type="text/javascript" src="{{url('theme-sbadmin/js/navbar-nav.js')}}"></script>
<<<<<<< HEAD
    @stack('js')
=======
@stack('js')
>>>>>>> Eps 4
  </body>

</html>
