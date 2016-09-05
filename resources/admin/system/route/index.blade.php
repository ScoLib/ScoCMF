@extends('admin::layouts.layouts')

@section('title', '路由管理')

@section('content')
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">路由列表</h3>
            <div class="box-tools pull-right">
                <a href="{{ route('admin.system.route.add') }}" class="btn btn-default btn-xs">
                    <i class="fa fa-plus"></i>
                </a>
                <a href="{{ route('admin.system.route.refresh') }}" class="btn btn-default btn-xs ajax-get no-refresh">
                    <i class="fa fa-refresh"></i>
                </a>
            </div>

        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
            <table class="table table-hover">
                <tr>
                    <th>ID</th>
                    <th class="col-sm-3">标题</th>
                    <th class="col-sm-3">名称</th>
                    <th>菜单</th>
                    <th>权限</th>
                    <th class="col-sm-2">操作</th>
                </tr>
                @foreach ($routes as $route)
                    <tr>
                        <td>{{ $route->id }}</td>
                        <td>{{ $route->spacer }}{{ $route->title }}</td>
                        <td>{{ $route->name }}</td>
                        <td>{!! $route->is_menu ? '<span class="label label-success">是</span>' : '<span class="label label-default">否</span>' !!}</td>
                        <td>{!! $route->is_perm ? '<span class="label label-success">是</span>' : '<span class="label label-default">否</span>' !!}</td>
                        <td>
                            <a href="{{ route('admin.system.route.edit', ['id' => $route->id]) }}"
                               class="btn btn-default btn-xs"><i class="fa fa-pencil"></i> 编辑</a>
                            <a class="btn btn-danger btn-xs ajax-get" href="{{ route('admin.system.route.delete', ['id' => $route->id]) }}" data-confirm="确定要删除？">
                                <i class="fa fa-trash-o"></i> 删除</a>
                        </td>
                    </tr>
                @endforeach

            </table>
        </div>
        <!-- /.box-body -->

        <div class="box-footer clearfix">
        </div>

    </div>
@endsection
