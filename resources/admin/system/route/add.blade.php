@extends('admin::layouts.layouts')

@section('title', '新增路由')

@section('content')

<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">新增路由</h3>
    </div>
    <!-- form start -->
    <form action="{{ route('admin.system.route.postAdd') }}" class="form-horizontal">
        <div class="box-body">
            <div class="form-group margin-l-0 margin-r-0">
                <label class="col-sm-3 control-label">所属组</label>
                <div class="col-sm-5">
                    <select class="form-control" name="pid">
                        <option value="0">顶级路由</option>
                        @foreach ($routes as $route)
                            <option value="{{ $route->id }}">{{ $route->spacer }}{{ $route->title }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group margin-l-0 margin-r-0">
                <label class="col-sm-3 control-label">请求方式</label>
                <div class="col-sm-5">
                    <select class="form-control" name="method">
                        <option value="get">GET</option>
                        <option value="post">POST</option>
                        <option value="put">PUT</option>
                        <option value="delete">DELETE</option>
                        <option value="patch">PATCH</option>
                        <option value="options">OPTIONS</option>
                        <option value="any">ANY</option>
                    </select>
                </div>
            </div>
            <div class="form-group margin-l-0 margin-r-0">
                <label for="add-name" class="col-sm-3 control-label">名称</label>
                <div class="col-sm-5">
                    <input type="text" data-toggle="tooltip"
                           data-original-title="不可点击路由输入'#'" name="name" class="form-control tooltips"
                           id="add-name" placeholder="admin.system.route">
                </div>
            </div>
            <div class="form-group margin-l-0 margin-r-0">
                <label for="add-title" class="col-sm-3 control-label">标题</label>
                <div class="col-sm-5">
                    <input type="text" name="title" class="form-control" id="add-title"
                           placeholder="路由管理">
                </div>
            </div>
            <div class="form-group margin-l-0 margin-r-0">
                <label for="add-uri" class="col-sm-3 control-label">URI地址</label>
                <div class="col-sm-5">
                    <input type="text" name="uri" class="form-control" id="add-uri"
                           placeholder="admin/system/route">
                </div>
            </div>
            <div class="form-group margin-l-0 margin-r-0">
                <label for="add-action" class="col-sm-3 control-label">ACTION</label>
                <div class="col-sm-5">
                    <input type="text" data-toggle="tooltip"
                           data-html="true" data-original-title="" name="action"
                           class="form-control tooltips" id="add-action"
                           placeholder="Admin\System\RouteController@getIndex">
                </div>
            </div>
            <div class="form-group margin-l-0 margin-r-0">
                <label for="add-middleware" class="col-sm-3 control-label">中间件</label>
                <div class="col-sm-5">
                    <input type="text" data-toggle="tooltip"
                           data-html="true" data-original-title="多个中间件以“|”分隔" name="middleware"
                           class="form-control tooltips" id="add-middleware"
                           placeholder="web|throttle:60,1">
                </div>
            </div>
            <div class="form-group margin-l-0 margin-r-0">
                <label for="add-icon" class="col-sm-3 control-label">图标</label>
                <div class="col-sm-5">
                    <input type="text" name="icon" class="form-control" id="add-icon"
                           placeholder="fa-">
                </div>
            </div>

            <div class="form-group margin-l-0 margin-r-0">
                <label for="add-icon" class="col-sm-3 control-label">菜单</label>
                <div class="col-sm-5">
                    <div class="switch">
                        <input type="radio" class="switch-input" name="site_close" value="1" id="site_close_on">
                        <label for="site_close_on" class="switch-label switch-label-on">开始</label>
                        <input type="radio" class="switch-input" name="site_close" value="0" id="site_close_off" checked>
                        <label for="site_close_off" class="switch-label switch-label-off">关闭</label>
                        <span class="switch-selection"></span>

                    </div>
                </div>
            </div>
        </div>
        <!-- /.box-body -->

        <div class="box-footer">
            <button type="submit" class="btn btn-primary">保存</button>
        </div>
    </form>
</div>

@endsection