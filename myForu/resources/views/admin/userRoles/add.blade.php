@extends('admin.layouts.layout')


@section('content')
    <div class="bg-light lter b-b wrapper-md">
        <h1 class="m-n font-thin h3">{{ $title }}</h1>
    </div>
    <div class="wrapper-md" ng-controller="FormDemoCtrl">
        <div class="row">
            <div class="col-sm-12">



                <div class="panel panel-default">
                    <div class="panel-heading font-bold">
                        {{ $title }}
                    </div>
                    <div class="panel-body">
                        @if (count($errors) > 0)
                            <div class="alert alert-danger" id="error">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form class="form-horizontal" method="post" action="{{ '/admin/roles' }}">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label class="col-sm-2 control-label">管理员名称:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control rounded" name="role_name" style="width: 270px;" value="{{ old('role_name') }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">角色说明:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control rounded" name="role_desc" style="width: 270px;" value="{{ old('role_desc') }}">
                                </div>
                            </div>
                            <div class="line line-dashed b-b line-lg pull-in"></div>
                            <div class="form-group">
                                <div class="col-sm-4 col-sm-offset-2">
                                    <button type="submit" class="btn btn-default">取消</button>
                                    <button type="submit" class="btn btn-primary">提交</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
 @endsection

@section('script')

        <script>

          $("#error").fadeOut(3000);
        </script>

@endsection