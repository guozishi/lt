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
                        <form class="form-horizontal" method="post" action="{{ '/admin/config' }}">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label class="col-sm-2 control-label">标题:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control rounded" name="conf_title" style="width: 270px;" value="{{ old('conf_title') }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">名字:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control rounded" name="conf_name" style="width: 270px;" value="{{ old('conf_name') }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">类型:</label>
                                <div class="col-sm-10">
                                    <label class="checkbox-inline i-checks">
                                        <input type="radio" value="input" checked name="field_type" onclick="config()"><i></i> input
                                    </label>
                                    <label class="checkbox-inline i-checks">
                                        <input type="radio" value="textarea" name="field_type" onclick="config()"><i></i> textarea
                                    </label>
                                    <label class="checkbox-inline i-checks">
                                        <input type="radio" value="radio" name="field_type" onclick="config()"><i></i> radio
                                    </label>
                                </div>
                            </div>

                            <div class="form-group" id="type" style="display: none;">
                                <label class="col-sm-2 control-label">类型值:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control rounded" name="field_value" style="width: 270px;" value="{{ old('field_value') }}">
                                    <span><i class="fa fa-exclamation-circle yellow" style="color: #FFB900;">类型值只有在radio的情况下才需要配置，格式 1|开启,0|关闭</i></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">排序:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control rounded" name="conf_order" style="width: 270px;" value="{{ old('conf_order') }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">说明:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control rounded" name="conf_tips" style="width: 270px;" value="{{ old('conf_tips') }}">
                                </div>
                            </div><br/>
                            <div style="width: 800px; margin-left: 100px;">
                                <div class="form-group">
                                    <label>内容:</label>
                                    <textarea class="form-control" rows="6" placeholder="请输入内容..." name="conf_content">{{ old('conf_content') }}</textarea>
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

    <script>
        function config() {
            var val = $('input[name=field_type]:checked').val();
           if (val == 'radio') {
               $("#type").show();
           }else{
               $("#type").hide();
           }
        }
    </script>

@endsection