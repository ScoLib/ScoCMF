@extends('admin::layouts.layout')

@section('content')

    <div class="widget-box transparent">
        <div class="widget-header">

            <div class="widget-toolbar no-border">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="{{ route('admin.system.auth') }}">管理员</a>
                    </li>
                    <li>
                        <a href="{{ route('admin.system.auth.add.admin') }}">添加管理员</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="widget-body">
            <div class="widget-main padding-12 no-padding-left no-padding-right">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                    <tr>
                        <th class="center">
                            <label class="pos-rel">
                                <input type="checkbox" class="check-all ace ace-checkbox-2"/>
                                <span class="lbl"></span>
                            </label>
                        </th>
                        <th>ID</th>
                        <th>用户名</th>
                        <th>上次登录</th>
                        <th class="hidden-480">上次登录IP</th>
                        <th>权限组</th>

                        <th></th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach ($list as $admin)
                        <tr>
                            <td class="center">
                                <label class="pos-rel">
                                    <input type="checkbox" class="ids ace ace-checkbox-2" {{ $admin->group_id ? '' : 'disabled' }}/>
                                    <span class="lbl"></span>
                                </label>
                            </td>

                            <td>{{ $admin->id }}</td>
                            <td>{{ $admin->username }}</td>
                            <td>{{ $admin->last_login_time ?: '从未登录' }}</td>
                            <td class="hidden-480">{{ $admin->last_login_ip }}</td>
                            <td>{{ $admin->group_id && $admin->group ? $admin->group->group_name : '' }}</td>

                            <td>
                                @if ($admin->group_id)
                                    <div class="hidden-sm hidden-xs btn-group">

                                        <a href="{{ route('admin.system.auth.edit.admin.{id}', ['id' => $admin->id]) }}" class="btn btn-xs btn-info" title="编辑">
                                            <i class="ace-icon fa fa-pencil bigger-120"></i>
                                        </a>

                                        <a href="{{ route('admin.system.auth.del.admin.{id}', ['id' => $admin->id]) }}" class="ajax-get confirm btn btn-xs btn-danger" title="删除">
                                            <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                        </a>

                                    </div>

                                    <div class="hidden-md hidden-lg">
                                        <div class="inline pos-rel">
                                            <button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                <i class="ace-icon fa fa-cog icon-only bigger-110"></i>
                                            </button>

                                            <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">

                                                <li>
                                                    <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
											    <span class="green">
												    <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
												</span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
											    <span class="red">
												    <i class="ace-icon fa fa-trash-o bigger-120"></i>
												</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                @else
                                    超管不可编辑
                                @endif

                            </td>
                        </tr>

                    @endforeach

                    </tbody>
                </table>

            </div>
        </div>
    </div>

@endsection