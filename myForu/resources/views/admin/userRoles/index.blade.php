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
                        <th>角色名称</th>
                        <th>角色描述</th>
                        <th>操作</th>
                    </tr>
                    </thead>
                    <tbody>
                @foreach($data as $item)
                    <tr>
                        <td>{{ $item->role_id }}</td>
                        <td>{{ $item->role_name }}</td>
                        <td>{{ $item->role_desc }}</td>
                        <td><a href="{{ url('/admin/roles') }}/{{ $item->role_id }}/edit"><span class="label bg-success">修改</span>&nbsp; &nbsp;<a href="{{ url('admin/roles/auth/') }}/{{ $item->role_id }}" ><span class="label bg-success">查看权限</span>&nbsp; &nbsp;<a href="{{ url('/admin/link') }}/{{ $item->role_id }}/edit"><a href="javascript:;" onclick="roles({{ $item->role_id }})"><span class="label bg-danger">删除</span></a></td>
                        </td>
                    </tr>
                @endforeach
                    </tbody>
                </table>
            </div>
            <footer class="panel-footer">
            </footer>
        </div>
    </div>


@endsection()

@section('script')
    <script>
        function roles(id) {
            layer.confirm('确定要删除吗？', {
                btn: ['确定','取消'] //按钮
            }, function(){
                $.ajax({
                    url : '{{ '/admin/roles/' }}'+id,
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

