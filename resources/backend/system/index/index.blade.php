@extends('backend::layouts.layout')

@section('script.header')
    @parent

    <script src="{{ resources('js/jquery.validate.js') }}"></script>
@endsection

@section('content')
    <div class="widget-box transparent">
        <div class="widget-header">

            <div class="widget-toolbar no-border">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a>站点设置</a>
                    </li>

                </ul>
            </div>
        </div>

        <div class="widget-body">
            <div class="widget-main padding-12 no-padding-left no-padding-right">
                <form id="config-form" action="{{ route('backend.system') }}" method="post">
                    {!! csrf_field() !!}
                    <div class="form-group row">
                            <div class="col-xs-12">
                                <label for="site_name">网站名称</label>
                            </div>

                            <div class="col-xs-4">
                                <input class="form-control" id="site_name" name="configs[site_name]" type="text" value="{{ $configs['site_name'] }}">
                            </div>
                            <span class="col-xs-8 help-block">
                                    网站名称，将显示在前台顶部欢迎信息等位置
                            </span>
                    </div>
                    <div class="form-group row">
                        <div class="col-xs-12">
                            <label for="icp_number">ICP证书号</label>
                        </div>

                        <div class="col-xs-4">
                            <input class="form-control" id="icp_number" name="configs[icp_number]" type="text" value="{{ $configs['icp_number'] }}">
                        </div>
                            <span class="col-xs-8 help-block">
                                前台页面底部可以显示 ICP 备案信息，如果网站已备案，在此输入你的授权码，它将显示在前台页面底部，如果没有请留空
                            </span>
                    </div>
                    <div class="form-group row">
                        <div class="col-xs-12">
                            <label for="statistics_code">第三方统计代码</label>
                        </div>

                        <div class="col-xs-4">
                            <textarea class="form-control" id="statistics_code" name="configs[statistics_code]">{{ $configs['statistics_code'] }}</textarea>
                        </div>
                            <span class="col-xs-8 help-block">
                                前台页面底部可以显示第三方统计
                            </span>
                    </div>
                    <div class="form-group row">
                        <div class="col-xs-12">
                            <label for="statistics_code">选择</label>
                        </div>

                        <div class="col-xs-4">
                            <div class="switch">
                                <input type="radio" class="switch-input" name="configs[site_close]" value="1" id="site_close_on">
                                <label for="site_close_on" class="switch-label switch-label-on">开始</label>
                                <input type="radio" class="switch-input" name="configs[site_close]" value="0" id="site_close_off" checked>
                                <label for="site_close_off" class="switch-label switch-label-off">关闭</label>
                                <span class="switch-selection"></span>

                            </div>

                        </div>
                            <span class="col-xs-8 help-block">
                                前台页面底部可以显示第三方统计
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

    <script type="text/javascript">
        $(function() {
            $(':input[name="configs\[site_close\]"][value="{{ $configs['site_close'] }}"]').prop('checked', true);
            $('#config-form').validate({

                rules: {
                    site_name : {
                        required:true
                    }
                },
                messages : {
                    site_name: {
                        required: '{{ backend_trans('system.site_name_required') }}'
                    }
                }
            });

        });
    </script>
@endsection