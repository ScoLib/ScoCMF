<!-- form start -->
<form method="post" id="form-add-route" action="{{ $url }}" class="form-horizontal">
    <div class="box-body">
        <div class="form-group margin-l-0 margin-r-0">
            <label for="username" class="col-sm-3 control-label">用户名</label>
            <div class="col-sm-6">
                <input type="text" name="username" class="form-control" id="username"
                       placeholder="用户名" value="{{ $userInfo->username or '' }}">
            </div>
        </div>
        <div class="form-group margin-l-0 margin-r-0">
            <label for="email" class="col-sm-3 control-label">邮箱</label>
            <div class="col-sm-6">
                <input type="email" data-toggle="tooltip"
                       data-original-title="必须唯一" name="email" class="form-control tooltips"
                       id="email" placeholder="" value="{{ $userInfo->email or '' }}">
            </div>
        </div>
        <div class="form-group margin-l-0 margin-r-0">
            <label for="password" class="col-sm-3 control-label">密码</label>
            <div class="col-sm-6">
                <input type="password" name="password" class="form-control" id="password" value="">
            </div>
        </div>
        <div class="form-group margin-l-0 margin-r-0">
            <label for="action" class="col-sm-3 control-label">用户组</label>
            <div class="col-sm-6">
                <input type="text" data-toggle="tooltip"
                       data-html="true" data-original-title="不可点击路由输入'#'" name="action"
                       class="form-control tooltips" id="action"
                       placeholder="Admin\System\RouteController@getIndex" value="{{ $userInfo->action or '' }}">
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