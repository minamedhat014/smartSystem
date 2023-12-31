<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  @include('admin.layouts.style')
</head>
<body class="hold-transition sidebar-mini">
  <div class="wrapper">
  @include('admin.layouts.navBar')
  @include('admin.layouts.sideBar')
  <!-- Content Wrapper. Contains page content -->
@include('admin.layouts.content')
  <!-- /.content-wrapper -->
  <!-- Control Sidebar -->

  <!-- /.control-sidebar -->

  <!-- Main Footer -->
@include('admin.layouts.footer')
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

@include('admin.layouts.script')
</body>
</html>
