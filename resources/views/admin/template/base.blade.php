<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminPSDI | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{url('/assets/admin/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{url('/assets/admin/bower_components/font-awesome/css/font-awesome.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{url('/assets/admin/bower_components/Ionicons/css/ionicons.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{url('/assets/admin/dist/css/AdminLTE.min.css')}}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{url('/assets/admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{url('/assets/admin/dist/css/skins/_all-skins.min.css')}}">
  <!-- Morris chart -->
  <link rel="stylesheet" href="{{url('/assets/admin/bower_components/morris.js/morris.css')}}">
  <!-- jvectormap -->
  <link rel="stylesheet" href="{{url('/assets/admin/bower_components/jvectormap/jquery-jvectormap.css')}}">
  <!-- Date Picker -->
  <link rel="stylesheet" href="{{url('/assets/admin/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{url('/assets/admin/bower_components/bootstrap-daterangepicker/daterangepicker.css')}}">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="{{url('/assets/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    <!-- Header -->
    @include('admin.template.header')
    <!-- end Header -->

    <!-- Sidebar -->
    @include('admin.template.side')
    <!-- end Sidebar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <!-- Main content -->
        @yield('content')
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <!-- Footer -->
  @include('admin.template.footer')
  <!-- end Footer -->
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="{{url('assets/admin/bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{url('assets/admin/bower_components/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="{{url('/assets/admin/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- Morris.js')}} charts -->
<script src="{{url('/assets/admin/bower_components/raphael/raphael.min.js')}}"></script>
<script src="{{url('/assets/admin/bower_components/morris.js')}}/morris.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{url('/assets/admin/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js')}}"></script>
<!-- jvectormap -->
<script src="{{url('/assets/admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script src="{{url('/assets/admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{url('/assets/admin/bower_components/jquery-knob/dist/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{url('/assets/admin/bower_components/moment/min/moment.min.js')}}"></script>
<script src="{{url('/assets/admin/bower_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<!-- datepicker -->
<script src="{{url('/assets/admin/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{url('/assets/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
<!-- Slimscroll -->
<script src="{{url('/assets/admin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{url('/assets/admin/bower_components/fastclick/lib/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{url('/assets/admin/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{url('/assets/admin/dist/js/pages/dashboard.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{url('/assets/admin/dist/js/demo.js')}}"></script>
<!-- DataTables -->
<script src="{{url('/assets/admin/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{url('/assets/admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
    $('#example3').DataTable({
      'paging'      : false
    })
  })
</script>

</body>
</html>
