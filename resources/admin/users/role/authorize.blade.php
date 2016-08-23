@extends('admin::layouts.layouts')

@section('title', '角色授权')

@section('content')
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">角色授权[{{ $role->display_name }}]</h3>
        </div>
        <!-- /.box-header -->
        <form action="{{ route('admin.users.role.postAuthorize', ['id' => $role->id]) }}">
            <div class="box-body">
                @foreach ($permList as $perm)
                    <div class="col-sm-12">
                        <label>
                            <input class="top-perm" type="checkbox" name="perms[]"
                                   value="{{ $perm->id }}" {{ $rolePermIds->contains($perm->id) ? 'checked' : '' }}>
                            {{ $perm->title }}
                        </label>
                    </div>

                    @if (!$perm->child->isEmpty())
                        @foreach ($perm->child as $child)
                            <div class="col-sm-12 margin-offset-5">
                                <label>
                                    <input class="top-perm sub-perm-{{ $child->pid }}"
                                           type="checkbox" name="perms[]"
                                           value="{{ $child->id }}" {{ $rolePermIds->contains($child->id) ? 'checked' : '' }}>
                                    {{ $child->title }}
                                </label>
                            </div>
                            @if (!$child->child->isEmpty())
                                <div class="col-sm-12 col-xs-offset-1">

                                    @foreach ($child->child as $subchild)

                                        <div class="col-sm-3">
                                            <label>
                                                <input class="sub-perm-{{ $child->pid }} sub-perm-{{ $subchild->pid }}"
                                                       type="checkbox" name="perms[]"
                                                       value="{{ $subchild->id }}" {{ $rolePermIds->contains($subchild->id) ? 'checked' : '' }}>
                                                {{ $subchild->title }}
                                            </label>
                                        </div>
                                    @endforeach
                                </div>

                            @endif

                        @endforeach
                    @endif
                @endforeach
            </div>
            <!-- /.box-body -->

            <div class="box-footer">
                <button type="button" id="save-perms" class="btn btn-primary">
                    <i class="ace-icon fa fa-check bigger-110"></i>
                    保存
                </button>
            </div>
        </form>
    </div>
@endsection

@section('script')
    <script>
        $(function () {
            $('#save-perms').click(function () {
                $(this).ajaxPost();
            });

            $('.top-perm').click(function () {
                var permId = $(this).val();
                $('.sub-perm-' + permId).prop('checked', $(this).prop('checked'));
            });
        })
    </script>
@endsection
