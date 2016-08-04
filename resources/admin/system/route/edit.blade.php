@extends('admin::layouts.layouts')

@section('title', '编辑路由')

@section('content')

<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">编辑路由</h3>
    </div>
    <!-- form start -->
    <form method="post" id="form-add-route" action="{{ route('admin.system.route.postEdit') }}" class="form-horizontal">
        <div class="box-body">
            <div class="form-group margin-l-0 margin-r-0">
                <label class="col-sm-3 control-label">所属组</label>
                <div class="col-sm-6">
                    <select class="form-control" name="pid">
                        <option value="0">顶级路由</option>
                        @foreach ($routes as $vo)
                            <option value="{{ $vo->id }}">{{ $vo->spacer }}{{ $vo->title }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group margin-l-0 margin-r-0">
                <label class="col-sm-3 control-label">请求方式</label>
                <div class="col-sm-6">
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
                <label for="title" class="col-sm-3 control-label">标题</label>
                <div class="col-sm-6">
                    <input type="text" name="title" class="form-control" id="title"
                           placeholder="路由管理" value="{{ $route->title or '' }}">
                </div>
            </div>
            <div class="form-group margin-l-0 margin-r-0">
                <label for="name" class="col-sm-3 control-label">名称</label>
                <div class="col-sm-6">
                    <input type="text" data-toggle="tooltip"
                           data-original-title="必须唯一" name="name" class="form-control tooltips"
                           id="name" placeholder="admin.system.route" value="{{ $route->name or '' }}">
                </div>
            </div>
            <div class="form-group margin-l-0 margin-r-0">
                <label for="uri" class="col-sm-3 control-label">URI地址</label>
                <div class="col-sm-6">
                    <input data-toggle="tooltip" data-original-title="不可点击路由输入'#'" type="text" name="uri" class="form-control" id="uri"
                           placeholder="admin/system/route" value="{{ $route->uri or '' }}">
                </div>
            </div>
            <div class="form-group margin-l-0 margin-r-0">
                <label for="action" class="col-sm-3 control-label">操作（Action）</label>
                <div class="col-sm-6">
                    <input type="text" data-toggle="tooltip"
                           data-html="true" data-original-title="不可点击路由输入'#'" name="action"
                           class="form-control tooltips" id="action"
                           placeholder="Admin\System\RouteController@getIndex" value="{{ $route->action or '' }}">
                </div>
            </div>
            <div class="form-group margin-l-0 margin-r-0">
                <label for="middleware" class="col-sm-3 control-label">中间件</label>
                <div class="col-sm-6">
                    <input type="text" data-toggle="tooltip"
                           data-html="true" data-original-title="多个中间件以“|”分隔" name="middleware"
                           class="form-control tooltips" id="middleware"
                           placeholder="web|throttle:60,1" value="{{ $route->middleware or '' }}">
                </div>
            </div>
            <div class="form-group margin-l-0 margin-r-0">
                <label for="icon" class="col-sm-3 control-label">图标</label>
                <div class="col-sm-2">
                    <input type="text" name="icon" class="form-control" id="icon"
                           placeholder="fa-" value="{{ $route->icon or '' }}">
                </div>
            </div>

            <div class="form-group margin-l-0 margin-r-0">
                <label for="icon" class="col-sm-3 control-label">菜单</label>
                <div class="col-sm-6">
                    <div class="switch">
                        <input type="radio" class="switch-input" name="is_menu" value="1" id="is_menu_on" checked>
                        <label for="is_menu_on" class="switch-label switch-label-on">是</label>
                        <input type="radio" class="switch-input" name="is_menu" value="0" id="is_menu_off">
                        <label for="is_menu_off" class="switch-label switch-label-off">否</label>
                        <span class="switch-selection"></span>

                    </div>
                </div>
            </div>

            <div class="form-group margin-l-0 margin-r-0">
                <label for="icon" class="col-sm-3 control-label">权限</label>
                <div class="col-sm-6">
                    <div class="switch">
                        <input type="radio" class="switch-input" name="is_perm" value="1" id="is_perm_on" checked>
                        <label for="is_perm_on" class="switch-label switch-label-on">是</label>
                        <input type="radio" class="switch-input" name="is_perm" value="0" id="is_perm_off">
                        <label for="is_perm_off" class="switch-label switch-label-off">否</label>
                        <span class="switch-selection"></span>

                    </div>
                </div>
            </div>
            <div class="form-group margin-l-0 margin-r-0">
                <label for="sort" class="col-sm-3 control-label">排序</label>
                <div class="col-sm-2">
                    <input type="text" name="sort" class="form-control" id="sort"  value="{{ $route->sort or '0' }}">
                </div>
            </div>

            <div class="form-group margin-l-0 margin-r-0">
                <label for="description" class="col-sm-3 control-label">描述</label>
                <div class="col-sm-6">
                    <textarea id="description" class="form-control" rows="3" name="description">{{ $route->description or '' }}</textarea>
                </div>
            </div>


        </div>
        <!-- /.box-body -->

        <div class="box-footer">
            <button type="submit" class="btn btn-primary">
                <i class="ace-icon fa fa-check bigger-110"></i>
                保存</button>
        </div>
    </form>
</div>

@endsection

@section('script')
    <script src="{{ asset('js/jquery.validate.min.js') }}"></script>
    <script>
        $(function () {
            $('#form-add-route').validate({
                rules: {
                    'name' : {
                        required:true
                    },
                    'title' : {
                        required:true
                    },
                    'uri' : {
                        required:true
                    },
                    'action' : {
                        required:true
                    }
                },
                messages : {
                    'name': {
                        required: '{{ trans('admin.system.route.name_required') }}'
                    },
                    'title' : {
                        required: '{{ trans('admin.system.route.title_required') }}'
                    },
                    'uri' : {
                        required: '{{ trans('admin.system.route.uri_required') }}'
                    },
                    'action' : {
                        required: '{{ trans('admin.system.route.action_required') }}'
                    }
                }
            });
        })
    </script>
@endsection