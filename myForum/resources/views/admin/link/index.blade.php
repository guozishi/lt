@extends('admin.layouts.layout')

@section('content')

    <div class="bg-light lter b-b wrapper-md">
        <h1 class="m-n font-thin h3">{{ $title }}</h1>
    </div>
    <div class="wrapper-md">
        <div class="panel panel-default">
            <div class="panel-heading">
                响应表
            </div>
            <form action="{{ url('/admin/link') }}" method="get">
            <div class="row wrapper">
                <div class="col-sm-5 m-b-xs">
                    <select class="input-sm form-control w-sm inline v-middle" name="num">
                        <option value="10" @if( !empty($request['num']) && $request['num'] == 10)  selected = "selected" @endif >10</option>
                        <option value="20" @if( !empty($request['num']) && $request['num'] == 20)  selected = "selected" @endif >20</option>
                        <option value="30" @if( !empty($request['num']) && $request['num'] == 30)  selected = "selected" @endif >30</option>
                        <option value="40" @if( !empty($request['num']) && $request['num'] == 40)  selected = "selected" @endif >40</option>
                        <option value="50" @if( !empty($request['num']) && $request['num'] == 50)  selected = "selected" @endif >50</option>
                    </select>
                    <button class="btn btn-sm btn-default">申请</button>
                </div>
                <div class="col-sm-4">
                </div>
                <div class="col-sm-3">
                    <div class="input-group">
                        <input type="text" class="input-sm form-control" placeholder="请输入内容" name="keywords" value="{{ $input }}">
                        <span class="input-group-btn">
            <button class="btn btn-sm btn-default" type="submit">搜索!</button>
          </span>
                    </div>
                </div>
            </div>
            </form>
            <div class="table-responsive">
                <!-- 错误提示信息 -->
                @if (session('info.error'))
                    <div class="alert alert-danger alert-dismissible" id="alertError">
                        <h4><i class="icon fa fa-ban"></i>错误!</h4>
                        {{ session('info.error') }}
                    </div>
                @endif
            <!-- 错误提示信息 -->

                <!-- 正确提示信息 -->
                @if (session('info.success'))
                    <div class="alert alert-success alert-dismissible" id = "alertSuccess">
                        <h4><i class="icon fa fa-check"></i> 成功!</h4>
                        {{ session('info.success') }}
                    </div>
            @endif
            <!-- 正确提示信息 -->
                <table class="table table-striped b-t b-light">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>链接名</th>
                        <th>类型</th>
                        <th>网址</th>
                        <th>网站联系人</th>
                        <th>图片名称</th>
                        <th>添加时间</th>
                        <th>操作</th>
                    </tr>
                    </thead>
                    <tbody>
                @foreach($data as $item)
                    <tr>
                        <td>{{ $item->link_id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->type }}</td>
                        <td>{{ $item->url }}</td>
                        <td>{{ $item->touch }}</td>
                        <td><img src="/uploads/{{ $item->image }}"/></td>
                        <td>{{ $item->created_at }}</td>
                        <td><a href="{{ url('/admin/link') }}/{{ $item->link_id }}/edit"><span class="label bg-success">修改</span>&nbsp; &nbsp;&nbsp;</a><a href="javascript:;" onclick="del({{ $item->link_id }})"><span class="label bg-danger">删除</span></a></td>
                    </tr>
                @endforeach
                    </tbody>
                </table>
            </div>
            <footer class="panel-footer">
                {!! $data->appends($request)->render() !!}
            </footer>
        </div>
    </div>


@endsection()

@section('script')
    <script>
        function del(id) {
            layer.confirm('确定要删除吗？', {
                btn: ['确定','取消'] //按钮
            }, function(){
                $.ajax({
                    url : '{{ 'link/' }}'+id,
                    type : 'post',
                    data : {'_token':'{{csrf_token()}}','_method':'delete'},
                    success : function (data) {
                       if (data.status == 0) {
                           layer.msg(data.msg, {icon: 1});
                           location.href = location.href;
                       }else{
                           layer.msg(data.msg, {icon: 1});
                           location.href = location.href;
                       }
                    }
                });
            }, function(){
                layer.msg('取消操作', {
                    time: 1000, //1s后自动关闭
                });
            });
        }
        $("#alertSuccess").fadeOut(2000);
        $("#alertError").fadeOut(2000);
    </script>
@endsection

