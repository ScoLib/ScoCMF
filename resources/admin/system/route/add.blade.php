@extends('admin::layouts.layouts')

@section('title', '新增路由')

@section('content')

<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">新增路由</h3>
    </div>
    @include('admin::system.route.form', ['url' => route('admin.system.route.postAdd')])
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