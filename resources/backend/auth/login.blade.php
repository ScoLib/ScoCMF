@extends('backend::layouts.master')

@section('title', '登录')

@section('body')
    <body class="login-layout light-login">
    <div class="main-container">
        <div class="main-content">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1">
                    <div class="login-container">
                        <div class="center">
                            <h1>
                                <i class="ace-icon fa fa-leaf green"></i>
                                <span class="red">ScoCMF</span>
                                <span class="grey">管理平台</span>
                            </h1>
                        </div>

                        <div class="space-6"></div>

                        <div class="position-relative">
                            <div id="login-box" class="login-box visible widget-box no-border">
                                <div class="widget-body">
                                    <div class="widget-main">
                                        <h4 class="header blue lighter bigger">
                                            <i class="ace-icon fa fa-coffee green"></i>
                                            @if (count($errors) > 0)
                                                {{ $errors->first() }}
                                            @else
                                                请输入您的用户名和密码
                                            @endif

                                        </h4>

                                        <div class="space-6"></div>

                                        <form id="login-form" action="{{ route('backend.login') }}" method="post">
                                            {!! csrf_field() !!}
                                            <fieldset>
                                                <label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input name="username" type="text" class="form-control" placeholder="用户名" value="{{ old('username') }}" />
															<i class="ace-icon fa fa-user"></i>
														</span>
                                                </label>

                                                <label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input name="password" type="password" class="form-control" placeholder="密码"/>
															<i class="ace-icon fa fa-lock"></i>
														</span>
                                                </label>

                                                <div class="space"></div>

                                                <div class="clearfix center">
                                                    {{--<label class="inline">--}}
                                                        {{--<input type="checkbox" class="ace"/>--}}
                                                        {{--<span class="lbl"> Remember Me</span>--}}
                                                    {{--</label>--}}

                                                    <button type="submit" class="width-35 btn btn-sm btn-primary">
                                                        <i class="ace-icon fa fa-key"></i>
                                                        <span class="bigger-110">登录</span>
                                                    </button>
                                                </div>

                                                <div class="space-4"></div>
                                            </fieldset>
                                        </form>


                                        <div class="space-6"></div>

                                    </div><!-- /.widget-main -->

                                </div><!-- /.widget-body -->
                            </div><!-- /.login-box -->

                        </div><!-- /.position-relative -->

                    </div>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.main-content -->
    </div><!-- /.main-container -->

    <!-- inline scripts related to this page -->
    <script type="text/javascript">
        jQuery(function ($) {
        });

    </script>
    </body>
@endsection
