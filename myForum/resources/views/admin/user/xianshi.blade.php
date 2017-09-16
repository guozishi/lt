@extends('admin.layouts.layout')

@section('content')


    <div class="bg-light lter b-b wrapper-md">
        <h1 class="m-n font-thin h3"></h1>
    </div>
    <div class="wrapper-md">
        <div class="panel panel-default">
            <div class="panel-heading">
                管理浏览
            </div>
            <form action="{{ url('/admin/user/xianshi') }}" method="get">
            <div class="row wrapper">
                <div class="col-sm-2 m-b-xs">
                   <select class="form-control" name="num">
                    <option value="3" 
                    @if (!empty($request['num']) && $request['num'] == 3)
                      selected="selected" 
                    @endif
                    >3</option>
                    <option value="5"
                    @if (!empty($request['num']) && $request['num'] == 5)
                      selected="selected" 
                    @endif
                    >5</option>
                    <option value="10"
                    @if (!empty($request['num']) && $request['num'] == 10)
                      selected="selected" 
                    @endif
                    >10</option>
                    <option value="15"
                    @if (!empty($request['num']) && $request['num'] == 15)
                      selected="selected" 
                    @endif
                    >15</option>
                    <option value="20"
                    @if ( !empty($request['num']) && $request['num'] == 20)
                      selected="selected" 
                    @endif
                    >20</option>
                  </select>
     
                </div>
                <div class="col-sm-7">
                </div>
                <div class="col-sm-3">
                    <div class="input-group">
                        <input type="text" class="input-sm form-control" placeholder="请输入内容" name="keywords" >
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
                  <h4><i class="icon fa fa-ban"></i>提示!</h4>
                 {{ session('info') }}
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
                  <th>用户名</th>
                  <th>电话</th>
                  <th>头像</th>
                  <th>注册时间</th>
                  <th>操作</th>
                    </tr>
                    </thead>
                    <tbody>
                @foreach($data as $item)
                  <tr>
                  <td>{{ $item->user_id }}</td>
                  <td class="name">{{ $item->name }}</td>
                      <td>{{ $item->tel }}</td>
                      <td><img src="/admin-uploads/{{ $item->img }}" width="60px;" /></td>
                      <td>{{ $item->created_at }}</td>
                      <td><a href="{{ url('/admin/user/xiugai') }}/{{ $item->user_id}}"><span class="label bg-success">修改</span></a> <a href=""><span class="label bg-success">查看角色</span></a>  <a href="javascript:;" onclick="del({{ $item->user_id }})"><span class="label bg-danger">删除</span></a></td>
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
                    url : '{{ '/admin/user/del/' }}'+id,
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