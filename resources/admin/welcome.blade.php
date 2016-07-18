@extends('admin::layouts.layouts')

@section('title', '欢迎页面')

@section('content')
welcome scocmf
<a href="{{ route('admin.system.site') }}" class="ajax-get confirm">ajax get</a>
@endsection