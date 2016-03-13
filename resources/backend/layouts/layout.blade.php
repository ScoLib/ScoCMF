@extends('backend::layouts.master')

@section('body')
    <body class="no-skin">
    <!-- #section:basics/navbar.layout -->
    <div id="navbar" class="navbar navbar-default navbar-collapse h-navbar navbar-fixed-top">
        <div class="navbar-container" id="navbar-container">
            <button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
                <span class="sr-only">Toggle sidebar</span>

                <span class="icon-bar"></span>

                <span class="icon-bar"></span>

                <span class="icon-bar"></span>
            </button>
            <div class="navbar-header pull-left">
                <!-- #section:basics/navbar.layout.brand -->
                <a href="{{ route('backend.index') }}" class="navbar-brand">
                    <small>
                        ScoCMF
                    </small>
                </a>

                <!-- /section:basics/navbar.layout.brand -->

                <!-- #section:basics/navbar.toggle -->
                <button class="pull-right navbar-toggle navbar-toggle-img collapsed" type="button" data-toggle="collapse" data-target=".navbar-buttons,.navbar-menu">
                    <span class="sr-only">Toggle user menu</span>
                    <span>Admin</span>
                    <img src="{{ resources('backend/avatars/user.jpg') }}" alt="Admin" />
                </button>


                <!-- /section:basics/navbar.toggle -->
            </div>

            <!-- #section:basics/navbar.dropdown -->
            <div class="navbar-buttons navbar-header pull-right  collapse navbar-collapse" role="navigation" style="padding-right: 0px;">
                <ul class="nav ace-nav">
                    <li class="transparent">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="ace-icon fa fa-bell icon-animated-bell"></i>
                        </a>

                        <div class="dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
                            <div class="tabbable">
                                <ul class="nav nav-tabs">
                                    <li class="active">
                                        <a data-toggle="tab" href="#navbar-tasks">
                                            Tasks
                                            <span class="badge badge-danger">4</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a data-toggle="tab" href="#navbar-messages">
                                            Messages
                                            <span class="badge badge-danger">5</span>
                                        </a>
                                    </li>
                                </ul><!-- .nav-tabs -->

                                <div class="tab-content">
                                    <div id="navbar-tasks" class="tab-pane in active">
                                        <ul class="dropdown-menu-right dropdown-navbar dropdown-menu">
                                            <li class="dropdown-content">
                                                <ul class="dropdown-menu dropdown-navbar">
                                                    <li>
                                                        <a href="#">
                                                            <div class="clearfix">
                                                                <span class="pull-left">Software Update</span>
                                                                <span class="pull-right">65%</span>
                                                            </div>

                                                            <div class="progress progress-mini">
                                                                <div style="width:65%" class="progress-bar"></div>
                                                            </div>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="#">
                                                            <div class="clearfix">
                                                                <span class="pull-left">Hardware Upgrade</span>
                                                                <span class="pull-right">35%</span>
                                                            </div>

                                                            <div class="progress progress-mini">
                                                                <div style="width:35%" class="progress-bar progress-bar-danger"></div>
                                                            </div>
                                                        </a>
                                                    </li>

                                                </ul>
                                            </li>

                                            <li class="dropdown-footer">
                                                <a href="#">
                                                    See tasks with details
                                                    <i class="ace-icon fa fa-arrow-right"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div><!-- /.tab-pane -->

                                    <div id="navbar-messages" class="tab-pane">
                                        <ul class="dropdown-menu-right dropdown-navbar dropdown-menu">
                                            <li class="dropdown-content">
                                                <ul class="dropdown-menu dropdown-navbar">
                                                    <li>
                                                        <a href="#">
                                                            <img src="{{ resources('backend/avatars/avatar.png') }}" class="msg-photo" alt="Alex's Avatar" />
																<span class="msg-body">
																	<span class="msg-title">
																		<span class="blue">Alex:</span>
																		Ciao sociis natoque penatibus et auctor ...
																	</span>

																	<span class="msg-time">
																		<i class="ace-icon fa fa-clock-o"></i>
																		<span>a moment ago</span>
																	</span>
																</span>
                                                        </a>
                                                    </li>


                                                    <li>
                                                        <a href="#">
                                                            <img src="{{ resources('backend/avatars/avatar5.png') }}" class="msg-photo" alt="Fred's Avatar" />
																<span class="msg-body">
																	<span class="msg-title">
																		<span class="blue">Fred:</span>
																		Vestibulum id penatibus et auctor  ...
																	</span>

																	<span class="msg-time">
																		<i class="ace-icon fa fa-clock-o"></i>
																		<span>10:09 am</span>
																	</span>
																</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>

                                            <li class="dropdown-footer">
                                                <a href="inbox.html">
                                                    See all messages
                                                    <i class="ace-icon fa fa-arrow-right"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div><!-- /.tab-pane -->
                                </div><!-- /.tab-content -->
                            </div><!-- /.tabbable -->
                        </div><!-- /.dropdown-menu -->
                    </li>

                    <!-- #section:basics/navbar.user_menu -->
                    <li class="transparent user-min">
                        <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                            <i class="ace-icon fa fa-user"></i>{{ $user->username }}
								<span class="user-info">
									<small>您好,</small>
                                    {{ $user->username }}
								</span>

                            <i class="ace-icon fa fa-caret-down"></i>
                        </a>

                        <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">

                            <li>
                                <a href="#">
                                    <i class="ace-icon fa fa-key"></i>
                                    修改密码
                                </a>

                            </li>

                            <li class="divider"></li>

                            <li>
                                <a href="{{ route('backend.logout') }}">
                                    <i class="ace-icon fa fa-power-off"></i>
                                    安全退出
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li class="transparent">
                        <a href="#" title="返回前台" target="_blank">
                            <i class="ace-icon fa fa-share"></i>
                        </a>

                    </li>
                    <!-- /section:basics/navbar.user_menu -->
                </ul>
            </div>

            <!-- /section:basics/navbar.dropdown -->
            <nav role="navigation" class="navbar-menu pull-left collapse navbar-collapse">
                <!-- #section:basics/navbar.nav -->
                <ul class="nav navbar-nav">
                    <li>
                        <a href="javascript:void(0);">
                            {{ trans('backend.common.dashboard') }}
                        </a>

                    </li>

                    <li>
                        <a href="javascript:void(0);">
                            系统
                        </a>
                    </li>
                </ul>

                <!-- /section:basics/navbar.nav -->

                <!-- #section:basics/navbar.form -->
                <form class="navbar-form navbar-left form-search" role="search">
                    <div class="form-group">
                        <input type="text" placeholder="search" />
                    </div>

                    <button type="button" class="btn btn-mini btn-info2">
                        <i class="ace-icon fa fa-search icon-only bigger-110"></i>
                    </button>
                </form>

                <!-- /section:basics/navbar.form -->
            </nav>
        </div><!-- /.navbar-container -->
    </div>
    <!-- /section:basics/navbar.layout -->
    <div class="main-container" id="main-container">

        <!-- #section:basics/sidebar -->
        <div id="sidebar" class="sidebar responsive sidebar-fixed">

            <ul class="nav nav-list">
                <li class="">
                    <a href="{{ route('backend.system') }}">
                        <i class="menu-icon fa fa-circle-o"></i>
                        <span class="menu-text"> 站点设置 </span>
                    </a>

                    <b class="arrow"></b>
                </li>
                <li class="">
                    <a href="{{ route('backend.system.admin') }}">
                        <i class="menu-icon fa fa-circle-o"></i>
                        <span class="menu-text"> 权限设置 </span>
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="active">
                    <a href="{{ route('backend.index') }}">
                        <i class="menu-icon fa fa-circle-o"></i>
                        <span class="menu-text">欢迎页面</span>

                        <b class="arrow"></b>
                    </a>

                    <b class="arrow"></b>

                </li>
            </ul><!-- /.nav-list -->

            <!-- #section:basics/sidebar.layout.minimize -->
            <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
                <i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
            </div>

            <!-- /section:basics/sidebar.layout.minimize -->
        </div>

        <!-- /section:basics/sidebar -->
        <div class="main-content">
            <div class="main-content-inner">
                <!-- #section:basics/content.breadcrumbs -->
                <div class="breadcrumbs breadcrumbs-fixed" id="breadcrumbs">

                    <ul class="breadcrumb">
                        <i class="ace-icon fa fa-home home-icon"></i>
                        <li>
                            系统
                        </li>
                        <li class="active">站点设置</li>
                    </ul><!-- /.breadcrumb -->

                    <!-- #section:basics/content.searchbox -->
                    <div class="nav-search" id="nav-search">
                        <form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
									<i class="ace-icon fa fa-search nav-search-icon"></i>
								</span>
                        </form>
                    </div><!-- /.nav-search -->

                    <!-- /section:basics/content.searchbox -->
                </div>

                <!-- /section:basics/content.breadcrumbs -->
                <div class="page-content">
                    <div id="top-alert" class="alert alert-block alert-error" style="display:none;">
                        <button type="button" class="close">
                            <i class="ace-icon fa fa-times"></i>
                        </button>
                        <div class="alert-content">这是内容</div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <!-- PAGE CONTENT BEGINS -->
                            @yield('content')
                                    <!-- PAGE CONTENT ENDS -->
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.page-content -->
            </div>
        </div><!-- /.main-content -->

        <div class="footer">
            <div class="footer-inner">
                <!-- #section:basics/footer -->
                <div class="footer-content">
						<span class="bigger-120">
                            <strong>Copyright &copy; 2015 - {{ date('Y') }} <a href="http://www.scophp.com" target="_blank"><span class="blue bolder">ScoCMF</span></a>.</strong> All rights reserved.
						</span>

                </div>

                <!-- /section:basics/footer -->
            </div>
        </div>

        <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
            <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
        </a>
    </div><!-- /.main-container -->

    @section('script.footer')
    <!-- basic scripts -->
    <script src="{{ resources('js/jquery-1.12.0.min.js') }}"></script>
    <script src="{{ resources('js/bootstrap/js/bootstrap.js') }}"></script>
    <script src="{{ resources('js/layer/layer.js') }}"></script>

    <script src="{{ resources('backend/js/core.js') }}"></script>

    <script src="{{ resources('backend/js/elements.scroller.js') }}"></script>
    <script src="{{ resources('backend/js/ace.sidebar.js') }}"></script>
    @show

    </body>
@endsection
