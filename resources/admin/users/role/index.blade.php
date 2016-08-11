@extends('admin::layouts.layouts')

@section('title', '角色管理')

@section('content')
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">角色列表</h3>
            <div class="box-tools pull-right">
                <a href="{{ route('admin.system.route.add') }}" class="btn btn-default btn-xs"><i
                            class="fa fa-plus"></i></a>
                <button class="btn btn-default btn-xs"><i class="fa fa-trash-o"></i></button>
            </div>

        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
            <table class="table table-hover">
                <tr>
                    <th>ID</th>
                    <th>名称</th>
                    <th>显示名</th>
                    <th>创建时间</th>
                    <th class="col-sm-2">操作</th>
                </tr>
                @foreach ($roles as $role)
                    <tr>
                        <td>{{ $role->id }}</td>
                        <td>{{ $role->name }}</td>
                        <td>{{ $role->display_name }}</td>
                        <td>{{ $role->created_at }}</td>
                        <td>
                            <a href="{{ route('admin.system.route.edit', ['id' => $role->id]) }}"
                               class="btn btn-default btn-xs"><i class="fa fa-pencil"></i> 编辑</a>
                            <a class="btn btn-danger btn-xs ajax-get" href="" data-confirm="确定要删除？">
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
