<!DOCTYPE html>
<html lang="en">
@include('admin.layout.include.header')
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    <!-- Navbar -->
    @include('admin.layout.include.nav-bar')
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    @include('admin.layout.include.left-menu')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        @yield('breadcrumb')

        @yield('content')
    </div>
    <!-- /.content-wrapper -->
    @include('admin.layout.include.footer')
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
@include('admin.layout.include.script')
@yield('script')
</body>
</html>
