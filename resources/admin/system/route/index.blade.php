@extends('admin::layouts.layouts')

@section('title', '路由管理')

@section('content')
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">搜索</h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse">
                    <i class="fa fa-angle-down"></i></button>
                {{--<button type="button" class="btn btn-box-tool" data-widget="remove"
                        data-toggle="tooltip" title="关闭">
                    <i class="fa fa-times"></i></button>--}}
            </div>
        </div>
        <div class="box-body">
            <form class="form-inline">
                <div class="form-group">
                    <label for="search-title">标题</label>
                    <input type="text" name="title" class="form-control" id="search-title" placeholder="路由标题">
                </div>
                <div class="form-group">
                    <label for="search-name">名称</label>
                    <input type="text" name="name" class="form-control" id="search-name" placeholder="路由名称">
                </div>
                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
            </form>
        </div>
        <!-- /.box-body -->
    </div>
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">路由列表</h3>
            <div class="box-tools pull-right">
                <a href="{{ route('admin.system.route.add') }}" class="btn btn-default btn-xs"><i class="fa fa-plus"></i></a>
                <button class="btn btn-default btn-xs"><i class="fa fa-trash-o"></i></button>
            </div>

        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
            <table class="table table-hover">
                <tr>
                    <th>ID</th>
                    <th>标题</th>
                    <th>名称</th>
                    <th>父ID</th>
                    <th>Status</th>
                    <th>Reason</th>
                </tr>
                @foreach ($routes as $route)
                    <tr>
                        <td>{{ $route->id }}</td>
                        <td>{{ $route->spacer }}{{ $route->title }}</td>
                        <td>{{ $route->name }}</td>
                        <td>{{ $route->pid }}</td>
                        <td><span class="label label-success">Approved</span></td>
                        <td>
                        </td>
                    </tr>
                @endforeach

            </table>
        </div>
        <!-- /.box-body -->

        <div class="box-footer clearfix">
            <ul class="pagination pagination-sm no-margin pull-right">
                <li class="disabled"><a href="#">«</a></li>
                <li><a href="#">1</a></li>
                <li class="active"><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">»</a></li>
            </ul>
        </div>

    </div>
@endsection
