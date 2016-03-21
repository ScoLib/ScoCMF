<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title>@yield('title') - ScoCMF管理平台</title>

    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    @yield('meta')

    @section('style')
    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="{{ resources('js/bootstrap/css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ resources('font-awesome/css/font-awesome.css') }}" />
    <link rel="stylesheet" href="{{ resources('backend/css/ace-fonts.css') }}" />
    <!-- ace styles -->
    <link rel="stylesheet" href="{{ resources('backend/css/ace.min.css') }}" />
    @show

    <script>
        window.App = window.App || {};
        App.baseSiteUrl = '{{ config('domain.base_site_url') }}';
        App.appUrl = '{{ url('/') }}';
        App.resourcesUrl = '{{ resources('') }}';
    </script>

</head>
@yield('body')

</html>