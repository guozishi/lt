@extends('admin.layouts.layout')

@section('content')
    <div class="bg-light lter b-b wrapper-md">
        <h1 class="m-n font-thin h3">{{ $title }}</h1>
    </div>
    <div class="wrapper-md" ng-controller="FormDemoCtrl">
        <div class="panel panel-default">
            <div class="panel-heading font-bold">
                {{ $title }}
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading font-bold">
               更新
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
                <form class="form-horizontal" method="post" action="{{ url('/admin/link') }}/{{ $data->id }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('put') }}
                    <div class="form-group">
                        <label class="col-sm-2 control-label">名称:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control rounded" name="name" value="{{ $data->name }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">网址:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control rounded" name="url" value="{{ $data->url }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">网站联系人:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control rounded" name="touch" value="{{ $data->touch }}">
                        </div>
                    </div>

                    <div class="line line-dashed b-b line-lg pull-in"></div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">请选择分类:</label>
                        <div class="col-sm-10">
                            <select name="type" class="form-control m-b">
                                <option value="0" @if($data->type == 0) selected = "selected" @endif>图片</option>
                                <option value="1" @if($data->type == 1) selected = "selected" @endif>网址</option>
                            </select>
                        </div>
                    </div>

                    <div class="line line-dashed b-b line-lg pull-in"></div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">请选择图片:</label>
                        <div class="col-sm-10">
                            <input ui-jq="filestyle" type="file"  data-classButton="btn btn-default" data-classInput="form-control inline v-middle input-s" name="image">
                        </div>
                    </div>
                    <div class="line line-dashed b-b line-lg pull-in"></div>

                    <div class="line line-dashed b-b line-lg pull-in"></div>
                    <div class="form-group">
                        <div class="col-sm-4 col-sm-offset-2">
                            <button type="submit" class="btn btn-default">取消</button>
                            <button type="submit" class="btn btn-primary">更新</button>
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