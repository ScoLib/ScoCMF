<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>403</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('font-awesome/css/font-awesome.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ asset('ionicons/css/ionicons.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('css/AdminLTE.min.css') }}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="{{ asset('js/html5shiv-3.7.3.min.js') }}"></script>
    <script src="{{ asset('js/respond-1.4.2.min.js') }}"></script>
    <![endif]-->
</head>
<body class="hold-transition lockscreen">
<!-- Automatic element centering -->
<div class="lockscreen-wrapper">
    <div class="locked text-center" style="font-size: 42px;">
        <i class="fa fa-lock"></i>
    </div>

    <div class="lockscreen-logo">
        <b>403</b>
    </div>

    <!-- /.lockscreen-item -->
    <div class="help-block text-center">
        对不起，你没有权限操作这个页面
    </div>
    <div class="text-center">
        <a href="{{ $previousUrl }}" class="btn btn-success btn-block">返回</a>
    </div>
</div>
<!-- /.center -->

@include('admin::layouts.partials.script')
</body>
</html>
