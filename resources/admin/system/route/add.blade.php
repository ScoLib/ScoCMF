<!-- form start -->
<form role="form">
    <div class="box-body">
        <div class="form-group">
            <label>所属组</label>
            <select class="form-control" name="pid">
                <option value="0">顶级路由</option>
                @foreach ($routes as $route)
                    <option value="{{ $route->id }}">{{ $route->spacer }}{{ $route->title }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="add-name">名称</label>
            <input type="text" data-toggle="tooltip"
                   data-original-title="不可点击路由输入'#'" name="name" class="form-control tooltips"
                   id="add-name" placeholder="admin.system.route">
        </div>
        <div class="form-group">
            <label for="add-title">标题</label>
            <input type="text" name="title" class="form-control" id="add-title" placeholder="路由管理">
        </div>
        <div class="form-group">
            <label for="add-uri">URI地址</label>
            <input type="text" name="uri" class="form-control" id="add-uri"
                   placeholder="admin/system/route">
        </div>
        <div class="form-group">
            <label for="add-action">ACTION</label>
            <input type="text" data-toggle="tooltip"
                   data-html="true" data-original-title="命名空间名的完整地址<br>不要以“\”开头" name="action" class="form-control tooltips" id="add-action"
                   placeholder="\Sco\Http\Controllers\Admin\System\RouteController@getIndex">
        </div>
        <div class="form-group">
            <label>请求方式</label>
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
        <div class="form-group">
            <label for="add-icon">图标</label>
            <input type="text" name="icon" class="form-control" id="add-icon"
                   placeholder="fa-">
        </div>
    </div>
    <!-- /.box-body -->

    <div class="box-footer">
        <button type="submit" class="btn btn-primary">保存</button>
        <button type="button" class="btn btn-default pull-right" onclick="layer.closeAll();">关闭
        </button>

    </div>
</form>
