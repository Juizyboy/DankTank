<!DOCTYPE html>
<html>
<head>
    @include('baseContentBooking.head')
</head>
<body class="skin-blue sidebar-mini layout-boxed">
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="{{url('/')}}" class="logo">

            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>H</b></span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Hallux</b></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        @include('baseContentBooking.headnav')
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    @include('baseContentBooking.nav')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
    @yield('main')

    </div><!-- /.content-wrapper -->
    @include('baseContentBooking.footer')

</div><!-- ./wrapper -->

@include('baseContentBooking.scripts')
</body>
</html>