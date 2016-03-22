@extends('backend::layouts.layout')

@section('content')
    <div class="widget-box transparent">
        <div class="widget-header">

            <div class="widget-toolbar no-border">
                <ul class="nav nav-tabs">
                    <li>
                        <a href="{{ route('backend.system.auth') }}">管理员</a>
                    </li>
                    <li class="active">
                        <a href="{{ route('backend.system.auth.add.admin') }}">添加管理员</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="widget-body">
            <div class="widget-main padding-12 no-padding-left no-padding-right">
                <form id="addadmin-form" action="{{ route('backend.system.auth.add.admin') }}" method="post">
                    {!! csrf_field() !!}
                    <div class="form-group row">
                        <div class="col-xs-12">
                            <label for="username">用户名</label>
                        </div>

                        <div class="col-xs-4">
                            <input class="form-control" id="username" name="username" type="text" value="">
                        </div>
                            <span class="col-xs-8 help-block">
                                    请输入用户名
                            </span>
                    </div>

                    <div class="form-group row">
                        <div class="col-xs-12">
                            <label for="password">密码</label>
                        </div>

                        <div class="col-xs-4">
                            <input class="form-control" id="password" name="password" type="password" value="">
                        </div>
                            <span class="col-xs-8 help-block">
                                    请输入密码
                            </span>
                    </div>

                    <div class="form-group row">
                        <div class="col-xs-12">
                            <label for="repassword">确认密码</label>
                        </div>

                        <div class="col-xs-4">
                            <input class="form-control" id="repassword" name="repassword" type="password" value="">
                        </div>
                            <span class="col-xs-8 help-block">
                                    请输入密码
                            </span>
                    </div>


                    <div class="form-group row">
                        <div class="col-xs-12">
                            <label for="group_id">权限组</label>
                        </div>

                        <div class="col-xs-4">
                            <select class="form-control" id="group_id" name="group_id">
                                @foreach ($groups as $group)
                                    <option value="{{ $group->group_id }}">{{ $group->group_name }}</option>
                                @endforeach
                            </select>
                        </div>
                            <span class="col-xs-8 help-block">
                                请选择一个权限组，如果还未设置，请马上设置
                            </span>
                    </div>


                    <div class="form-actions">
                        <button class="btn btn-info" type="submit">
                            <i class="ace-icon fa fa-check bigger-110"></i>
                            保存
                        </button>

                        &nbsp; &nbsp; &nbsp;
                        <button class="btn" type="reset">
                            <i class="ace-icon fa fa-undo bigger-110"></i>
                            Reset
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection

@section('script.footer')
    @parent

    <script src="{{ resources('js/jquery.validate.js') }}"></script>

    <script type="text/javascript">
        $(function() {
            $('#addadmin-form').validate({
                rules: {
                    username : {
                        required : true,
                        rangelength : [3,15],
                        remote : {
                            url : '{{ route("backend.system.auth.check") }}',
                            type : 'post',
                            data : {
                                username : function() {
                                    return $('#username').val();
                                },
                                _token : "{{ csrf_token() }}"
                            }
                        }
                    },
                    password : {
                        required : true,
                        rangelength : [6,20]
                    },
                    repassword : {
                        required : true,
                        equalTo : '#password'
                    },
                    group_id : 'required'
                },
                messages : {
                    username : {
                       required : '{{ trans('backend.system.username_required') }}',
                       rangelength : '{{ trans('backend.system.username_rangelength') }}',
                       remote : '{{ trans('backend.system.username_unique') }}',
                    },
                    password : {
                        required : '{{ trans('backend.system.password_required') }}',
                        rangelength : '{{ trans('backend.system.password_rangelength') }}'
                    },
                    repassword : {
                        required : '{{ trans('backend.system.repassword_required') }}',
                        equalTo : '{{ trans('backend.system.repassowrd_equal_password') }}'
                    },
                    group_id : '{{ trans('backend.system.group_id_required') }}'
                }
            });
        });
    </script>
@endsection