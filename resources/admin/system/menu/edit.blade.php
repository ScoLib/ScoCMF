@extends('admin::layouts.layouts')

@section('title', '编辑路由')

@section('content')

<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">编辑路由</h3>
    </div>
    @include('admin::system.route.form', ['url' => route('admin.system.route.postEdit', ['id' => $route->id]), 'route' => $route])
</div>

@endsection