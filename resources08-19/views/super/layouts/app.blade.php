<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>cMyQual | Superadmin Portal</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('assets/super-admin/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('assets/super-admin/dist/css/adminlte.min.css')}}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('assets/super-admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/super-admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/super-admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/super-admin/plugins/select2/css/select2.min.css')}}">
  <style type="text/css">
  .sidebar-collapse.sidebar-mini .main-sidebar.sidebar-focused .sidebar, .sidebar-collapse.sidebar-mini .main-sidebar:hover .sidebar, .sidebar-collapse.sidebar-mini-md .main-sidebar.sidebar-focused .sidebar, .sidebar-collapse.sidebar-mini-md .main-sidebar:hover .sidebar, .sidebar-collapse.sidebar-mini-xs .main-sidebar.sidebar-focused .sidebar, .sidebar-collapse.sidebar-mini-xs .main-sidebar:hover .sidebar {
      background: whitesmoke;
  }
  .sidebar-mini.sidebar-collapse .main-sidebar.sidebar-focused, .sidebar-mini.sidebar-collapse .main-sidebar:hover {
    background: whitesmoke;
  }
  </style>
  <style>
    @keyframes shake {
      0% { transform: skewX(-20deg); }
      5% { transform: skewX(20deg); }
      10% { transform: skewX(-20deg); }
      15% { transform: skewX(20deg); }
      20% { transform: skewX(0deg); }
      100% { transform: skewX(0deg); }  
    }
  </style>

  @yield('after-style')
</head>
<body class="sidebar-mini">
<div class="wrapper">
   <!-- Navbar -->
  @include('super.partials.header')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
   @include('super.partials.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @yield('content')
  </div>
  <!-- /.content-wrapper -->

   @include('super.partials.footer')


</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('assets/super-admin/plugins/jquery/jquery.min.js')}}"></script>

<script>
$('#collps').click(function(){
    $('body').addClass('sidebar-collapse');
    $('#uncollps').show();
    $(this).hide();
});
</script>

<script type="text/javascript">
  $('#uncollps').click(function(){
    console.log('uncollapse');
    $('body').removeClass("sidebar-collapse");
    $('#collps').show();
    $(this).hide();
});
</script>


<!-- Bootstrap 4 -->
<script src="{{asset('assets/super-admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('assets/super-admin/plugins/chart.js/Chart.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('assets/super-admin/dist/js/adminlte.min.js')}}"></script>
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
<!-- Validation -->
<script src="{{asset('assets/super-admin/dist/js/adminlte.min.js')}}"></script>
<script src="{{asset('assets/super-admin/plugins/jquery-validation/jquery.validate.min.js')}}"></script>
<script src="{{asset('assets/super-admin/plugins/jquery-validation/additional-methods.min.js')}}"></script>
<script src="{{asset('assets/super-admin/plugins/select2/js/select2.full.min.js')}}"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="{{asset('assets/super-admin/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js')}}"></script>
@yield('after-script')
</body>
</html>
