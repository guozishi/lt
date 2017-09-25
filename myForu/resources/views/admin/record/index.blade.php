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
            <form action="{{ url('/admin/record') }}" method="get">
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
                        <th>标题</th>
                        <th>发表时间</th>
                        <th>操作</th>
                    </tr>
                    </thead>
                    <tbody>
                @foreach($data as $item)
                    <tr>
                        <td>{{ $item->reco_id }}</td>
                        <td>{{ $item->reco_title }}</td>
                        <td>{{ $item->reco_time }}</td>
                        <td><a href="{{ url('/admin/derecord')}}/{{ $item->reco_id }}"><span class="label bg-success">查看详情</span>&nbsp; &nbsp;&nbsp;</a><a href="javascript:;" onclick="del({{ $item->reco_id }})"><span class="label bg-danger">删除</span></a></td>
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
                    url : '{{ 'record/' }}'+id,
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

