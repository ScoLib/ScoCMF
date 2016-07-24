@extends('admin::layouts.layouts')

@section('title', '控制台')

@section('content')
welcome scocmf
<a href="{{ route('admin.system.route') }}" class="ajax-get confirm">ajax get</a>
@endsection