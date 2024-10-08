<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Cmyquals | Superadmin Portal </title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('assets/super-admin/plugins/fontawesome-free/css/all.min.css')}}">
   <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('assets/super-admin/dist/css/adminlte.min.css')}}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('assets/super-admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/super-admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/super-admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/super-admin/plugins/summernote/summernote-bs4.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/super-admin/plugins/daterangepicker/daterangepicker.css')}}">
  <link rel="stylesheet" href="{{asset('assets/super-admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
   <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{asset('assets/super-admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('assets/super-admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('assets/super-admin/plugins/jqvmap/jqvmap.min.css')}}">

  @yield('after-style')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  @include('super.partials.header')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
   @include('super.partials.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    @yield('content')
  </div>
  <!-- /.content-wrapper -->
  
  <!-- Main Footer -->
  @include('super.partials.footer')
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{asset('assets/super-admin/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('assets/super-admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- Validation -->
<script src="{{asset('assets/super-admin/dist/js/adminlte.min.js')}}"></script>
<script src="{{asset('assets/super-admin/plugins/jquery-validation/jquery.validate.min.js')}}"></script>
<script src="{{asset('assets/super-admin/plugins/jquery-validation/additional-methods.min.js')}}"></script>
<!-- DataTables  & Plugins -->
<script src="{{asset('assets/super-admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/super-admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/super-admin/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('assets/super-admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/super-admin/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('assets/super-admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/super-admin/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{asset('assets/super-admin/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('assets/super-admin/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('assets/super-admin/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('assets/super-admin/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('assets/super-admin/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
<!-- AdminLte app js -->
<script src="{{asset('assets/super-admin/dist/js/adminlte.min.js')}}"></script>
<script src="{{asset('assets/super-admin/dist/js/demo.js')}}"></script>
<script src="{{asset('assets/super-admin/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<script src="{{asset('assets/super-admin/dist/js/pages/dashboard.js')}}"></script>
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- ChartJS -->
<script src="{{asset('assets/super-admin/plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('assets/super-admin/plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{asset('assets/super-admin/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('assets/super-admin/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('assets/super-admin/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('assets/super-admin/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('assets/super-admin/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('assets/super-admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{asset('assets/super-admin/plugins/summernote/summernote-bs4.min.js')}}"></script>
<script>
  
</script>
@yield('after-script')
</body>
</html>
