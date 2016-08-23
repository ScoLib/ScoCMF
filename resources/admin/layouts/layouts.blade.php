<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    @include('admin::layouts.partials.htmlheader')

    <link rel="stylesheet" href="{{ asset('css/skins/skin-green.min.css') }}">
    <style>
        .tooltip {
            font-size: 13px;
        }
        .tooltip-inner {
            min-width: 50px;
            max-width: 300px;
            text-align:left;
        }
        .margin-r-0 {
            margin-right: 0px !important;
        }
        .margin-l-0 {
            margin-left: 0px !important;
        }
        .margin-offset-5 {
            margin-left: 5%;
        }
        .switch {
            position: relative;
            margin: 0;
            padding: 0;
            height: 30px;
            width: 122px;
            border-radius: 3px;
            border: 1px solid #cccccc;
            -webkit-transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;
            transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;
            /*
               * Note: using adjacent or general sibling selectors combined with
               *       pseudo classes doesn't work in Safari 5.0 and Chrome 12.
               *       See this article for more info and a potential fix:
               *       http://css-tricks.com/webkit-sibling-bug/
               */
        }
        .switch .switch-label {
            position: relative;
            z-index: 2;
            width: 60px;
            line-height: 28px;
            float: left;
            font-size: 12px;
            color: #999;
            text-align: center;
            cursor: pointer;
            display: initial;
            margin: 0;
        }
        .switch .switch-label:active {
            font-weight: bold;
        }
        .switch .switch-label-off {
            padding-left: 2px;
        }
        .switch .switch-label-on {
            padding-right: 2px;
        }
        .switch .switch-input {
            display: none;
        }
        .switch .switch-input:checked + .switch-label {
            font-weight: bold;
            color: #fff;
            -webkit-transition: 0.15s ease-out;
            -moz-transition: 0.15s ease-out;
            -o-transition: 0.15s ease-out;
            transition: 0.15s ease-out;
        }
        .switch .switch-input:checked + .switch-label-on ~ .switch-selection {
            border-bottom-left-radius: 3px;
            border-top-left-radius: 3px;
        }
        .switch .switch-input:checked + .switch-label-off {
            color: #ffffff;
        }
        .switch .switch-input:checked + .switch-label-off ~ .switch-selection {
            left: 60px;
            background: #888;
            border-bottom-right-radius: 3px;
            border-top-right-radius: 3px;
            /* Note: left: 50% doesn't transition in WebKit */
        }
        .switch .switch-selection {
            display: block;
            position: absolute;
            z-index: 1;
            top: 0px;
            left: 0px;
            width: 60px;
            height: 28px;
            background: #0088cc;
            -webkit-transition: left 0.15s ease-out;
            -moz-transition: left 0.15s ease-out;
            -o-transition: left 0.15s ease-out;
            transition: left 0.15s ease-out;
        }

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

<script src="{{ asset('layer/layer.js') }}"></script>
@yield('script')
</body>
</html>
