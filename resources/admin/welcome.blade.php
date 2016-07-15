@extends('admin::layouts.layout')

@section('content')
welcome scocmf
<a href="{{ route('admin.system.site') }}" class="ajax-get confirm">ajax get</a>
@endsection