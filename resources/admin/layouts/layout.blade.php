@extends('backend::layouts.master')

@section('body')
    <!-- ADD THE CLASS fixed TO GET A FIXED HEADER AND SIDEBAR LAYOUT -->
    <!-- the fixed layout is not compatible with sidebar-mini -->
    <body class="hold-transition skin-green fixed sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">

        <header class="main-header">
            <!-- Logo -->
            <a href="../../index2.html" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><b>A</b>LT</span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><b>Admin</b>LTE</span>
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
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->
                        <li class="dropdown messages-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-envelope-o"></i>
                                <span class="label label-success">4</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 4 messages</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li><!-- start message -->
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                                                </div>
                                                <h4>
                                                    Support Team
                                                    <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <!-- end message -->
                                    </ul>
                                </li>
                                <li class="footer"><a href="#">See All Messages</a></li>
                            </ul>
                        </li>
                        <!-- Notifications: style can be found in dropdown.less -->
                        <li class="dropdown notifications-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-bell-o"></i>
                                <span class="label label-warning">10</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 10 notifications</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-users text-aqua"></i> 5 new members joined today
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer"><a href="#">View all</a></li>
                            </ul>
                        </li>
                        <!-- Tasks: style can be found in dropdown.less -->
                        <li class="dropdown tasks-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-flag-o"></i>
                                <span class="label label-danger">9</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 9 tasks</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li><!-- Task item -->
                                            <a href="#">
                                                <h3>
                                                    Design some buttons
                                                    <small class="pull-right">20%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">20% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <!-- end task item -->
                                    </ul>
                                </li>
                                <li class="footer">
                                    <a href="#">View all tasks</a>
                                </li>
                            </ul>
                        </li>
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="../../dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                                <span class="hidden-xs">Alexander Pierce</span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header">
                                    <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                                    <p>
                                        Alexander Pierce - Web Developer
                                        <small>Member since Nov. 2012</small>
                                    </p>
                                </li>
                                <!-- Menu Body -->
                                <li class="user-body">
                                    <div class="row">
                                        <div class="col-xs-4 text-center">
                                            <a href="#">Followers</a>
                                        </div>
                                        <div class="col-xs-4 text-center">
                                            <a href="#">Sales</a>
                                        </div>
                                        <div class="col-xs-4 text-center">
                                            <a href="#">Friends</a>
                                        </div>
                                    </div>
                                    <!-- /.row -->
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="#" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <!-- Control Sidebar Toggle Button -->
                        <li>
                            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <!-- =============================================== -->

        <!-- Left side column. contains the sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- Sidebar user panel -->
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                    </div>
                    <div class="pull-left info">
                        <p>Alexander Pierce</p>
                        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                    </div>
                </div>
                <!-- search form -->
                <form action="#" method="get" class="sidebar-form">
                    <div class="input-group">
                        <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
                    </div>
                </form>
                <!-- /.search form -->
                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="../../index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
                            <li><a href="../../index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
                        </ul>
                    </li>
                    <li class="treeview active">
                        <a href="#">
                            <i class="fa fa-files-o"></i>
                            <span>Layout Options</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">4</span>
            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="../layout/top-nav.html"><i class="fa fa-circle-o"></i> Top Navigation</a></li>
                            <li><a href="../layout/boxed.html"><i class="fa fa-circle-o"></i> Boxed</a></li>
                            <li class="active"><a href="../layout/fixed.html"><i class="fa fa-circle-o"></i> Fixed</a></li>
                            <li><a href="collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="../widgets.html">
                            <i class="fa fa-th"></i> <span>Widgets</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">new</small>
            </span>
                        </a>
                    </li>


                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-share"></i> <span>Multilevel</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
                            <li>
                                <a href="#"><i class="fa fa-circle-o"></i> Level One
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                                    <li>
                                        <a href="#"><i class="fa fa-circle-o"></i> Level Two
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                                        </a>
                                        <ul class="treeview-menu">
                                            <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                                            <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
                        </ul>
                    </li>

                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>

        <!-- =============================================== -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Fixed Layout
                    <small>Blank example to the fixed layout</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li><a href="#">Layout</a></li>
                    <li class="active">Fixed</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="callout callout-info">
                    <h4>Tip!</h4>

                    <p>Add the fixed class to the body tag to get this layout. The fixed layout is your best option if your sidebar
                        is bigger than your content because it prevents extra unwanted scrolling.</p>
                </div>
                <!-- Default box -->
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Title</h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                                <i class="fa fa-minus"></i></button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                                <i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        Start creating your amazing application!
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        Footer
                    </div>
                    <!-- /.box-footer-->
                </div>
                <!-- /.box -->

            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <footer class="main-footer">
            <div class="pull-right hidden-xs">
                <b>Version</b> 2.3.5
            </div>
            <strong>Copyright &copy; 2014-2016 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights
            reserved.
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Create the tabs -->
            <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
                <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
                <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <!-- Home tab content -->
                <div class="tab-pane" id="control-sidebar-home-tab">
                    <h3 class="control-sidebar-heading">Recent Activity</h3>
                    <ul class="control-sidebar-menu">
                        <li>
                            <a href="javascript:void(0)">
                                <i class="menu-icon fa fa-birthday-cake bg-red"></i>

                                <div class="menu-info">
                                    <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                                    <p>Will be 23 on April 24th</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <i class="menu-icon fa fa-user bg-yellow"></i>

                                <div class="menu-info">
                                    <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                                    <p>New phone +1(800)555-1234</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

                                <div class="menu-info">
                                    <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                                    <p>nora@example.com</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <i class="menu-icon fa fa-file-code-o bg-green"></i>

                                <div class="menu-info">
                                    <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                                    <p>Execution time 5 seconds</p>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <!-- /.control-sidebar-menu -->

                    <h3 class="control-sidebar-heading">Tasks Progress</h3>
                    <ul class="control-sidebar-menu">
                        <li>
                            <a href="javascript:void(0)">
                                <h4 class="control-sidebar-subheading">
                                    Custom Template Design
                                    <span class="label label-danger pull-right">70%</span>
                                </h4>

                                <div class="progress progress-xxs">
                                    <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <h4 class="control-sidebar-subheading">
                                    Update Resume
                                    <span class="label label-success pull-right">95%</span>
                                </h4>

                                <div class="progress progress-xxs">
                                    <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <h4 class="control-sidebar-subheading">
                                    Laravel Integration
                                    <span class="label label-warning pull-right">50%</span>
                                </h4>

                                <div class="progress progress-xxs">
                                    <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <h4 class="control-sidebar-subheading">
                                    Back End Framework
                                    <span class="label label-primary pull-right">68%</span>
                                </h4>

                                <div class="progress progress-xxs">
                                    <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <!-- /.control-sidebar-menu -->

                </div>
                <!-- /.tab-pane -->
                <!-- Stats tab content -->
                <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
                <!-- /.tab-pane -->
                <!-- Settings tab content -->
                <div class="tab-pane" id="control-sidebar-settings-tab">
                    <form method="post">
                        <h3 class="control-sidebar-heading">General Settings</h3>

                        <div class="form-group">
                            <label class="control-sidebar-subheading">
                                Report panel usage
                                <input type="checkbox" class="pull-right" checked>
                            </label>

                            <p>
                                Some information about this general settings option
                            </p>
                        </div>
                        <!-- /.form-group -->

                        <div class="form-group">
                            <label class="control-sidebar-subheading">
                                Allow mail redirect
                                <input type="checkbox" class="pull-right" checked>
                            </label>

                            <p>
                                Other sets of options are available
                            </p>
                        </div>
                        <!-- /.form-group -->

                        <div class="form-group">
                            <label class="control-sidebar-subheading">
                                Expose author name in posts
                                <input type="checkbox" class="pull-right" checked>
                            </label>

                            <p>
                                Allow the user to show his name in blog posts
                            </p>
                        </div>
                        <!-- /.form-group -->

                        <h3 class="control-sidebar-heading">Chat Settings</h3>

                        <div class="form-group">
                            <label class="control-sidebar-subheading">
                                Show me as online
                                <input type="checkbox" class="pull-right" checked>
                            </label>
                        </div>
                        <!-- /.form-group -->

                        <div class="form-group">
                            <label class="control-sidebar-subheading">
                                Turn off notifications
                                <input type="checkbox" class="pull-right">
                            </label>
                        </div>
                        <!-- /.form-group -->

                        <div class="form-group">
                            <label class="control-sidebar-subheading">
                                Delete chat history
                                <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
                            </label>
                        </div>
                        <!-- /.form-group -->
                    </form>
                </div>
                <!-- /.tab-pane -->
            </div>
        </aside>
        <!-- /.control-sidebar -->
        <!-- Add the sidebar's background. This div must be placed
             immediately after the control sidebar -->
        <div class="control-sidebar-bg"></div>
    </div>
    <!-- ./wrapper -->

    <!-- jQuery 2.2.3 -->
    <script src="./jquery-2.2.3.min.js"></script>
    <!-- Bootstrap 3.3.6 -->
    <script src="./bootstrap/js/bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="./slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="./fastclick/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="./dist/js/app.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="./dist/js/demo.js"></script>
    </body>






























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
                    <a href="{{ route('backend.system.site') }}">
                        <i class="menu-icon fa fa-circle-o"></i>
                        <span class="menu-text"> 站点设置 </span>
                    </a>

                    <b class="arrow"></b>
                </li>
                <li class="">
                    <a href="{{ route('backend.system.auth') }}">
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
