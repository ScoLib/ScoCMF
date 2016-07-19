<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    @include('admin::layouts.partials.htmlheader')

    <link rel="stylesheet" href="{{ asset('css/skins/skin-green.min.css') }}">
    <style>
        /*.tooltip-inner {
            min-width: 50px;
        }*/
    </style>
</head>
<!-- ADD THE CLASS fixed TO GET A FIXED HEADER AND SIDEBAR LAYOUT -->
<!-- the fixed layout is not compatible with sidebar-mini -->
<body class="hold-transition skin-green fixed sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="../../index2.html" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>S</b>co</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Sco</b>CMF</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>

            <div class="navbar-custom-menu">
                @include('admin::layouts.partials.navbar')
            </div>
        </nav>
    </header>

    <!-- =============================================== -->

    @include('admin::layouts.partials.leftside')

    <!-- =============================================== -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                @yield('title')
                <small>@yield('small_title')</small>
            </h1>
            {!! Breadcrumbs::renderIfExists($breadcrumbs) !!}
        </section>

        <!-- Main content -->
        <section class="content">
            @yield('content')

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 1.0.0
        </div>
        <strong>Copyright &copy; 2015-{{ date('Y') }} <a href="http://www.scophp.com" target="_blank">ScoCMF</a>.</strong> All rights reserved.
    </footer>

</div>
<!-- ./wrapper -->

@include('admin::layouts.partials.script')

<!-- SlimScroll -->
<script src="{{ asset('js/jquery.slimscroll.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('js/fastclick.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('js/app.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('js/demo.js') }}"></script>
</body>
</html>
