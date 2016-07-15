<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>


    <script>
        window.App = window.App || {};
        App.baseSiteUrl = '{{ config('domain.base_site_url') }}';
        App.appUrl = '{{ url('/') }}';
        App.resourcesUrl = '{{ resources('') }}';
    </script>

    @yield('script.header')
</head>
@yield('body')

</html>

