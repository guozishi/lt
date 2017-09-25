@extends('admin.layouts.layout')

@section('content')
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD


    <div class="bg-light lter b-b wrapper-md">
        <h1 class="m-n font-thin h3"></h1>
    </div>
    <div class="wrapper-md">
        <div class="panel panel-default">
            <div class="panel-heading">
                用户浏览
            </div>
          <form action="{{ url('/admin/user/index') }}" method="get">
            <div class="row wrapper">
                <div class="col-sm-2 m-b-xs">
                      <select class="form-control" name="num">
=======
=======
>>>>>>> 24c4547913e63cd16afbf669d26e38640b2e64b4
=======
>>>>>>> 24c4547913e63cd16afbf669d26e38640b2e64b4
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        用户列表
      </h1>
    
    <br>
    <br>
    <br>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
       
            <div class="box-body">

             @if (session('info'))
                  <div class="alert alert-danger alert-dismissible" id="alertError">
                  <h4><i class="icon fa fa-ban"></i>提示!</h4>
                 {{ session('info') }}
                  </div>
              @endif

            <form action="{{ url('/admin/user/index') }}" method="get">
              <div class="row">
                <div class="col-md-2">
                  <div class="form-group">
                  <select class="form-control" name="num">
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 24c4547913e63cd16afbf669d26e38640b2e64b4
=======
>>>>>>> 24c4547913e63cd16afbf669d26e38640b2e64b4
=======
>>>>>>> 24c4547913e63cd16afbf669d26e38640b2e64b4
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
                {{--错误提示信息 --}}
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
                        <th>邮箱</th>
                        <th>性别</th>
                        <th>电话</th>
                        <th>头像</th>
                        <th>生日</th>
                        <th>联系地址</th>
                        <th>职业</th>
                        <th>个人简介</th>
                        <th>操作</th>
                    </tr>
                    </thead>
                    <tbody>
                @foreach($data as $item)
                  <tr>
                  <td>{{ $item->user_id }}</td>
                  <td class="name">{{ $item->name }}</td>
                  <td>{{ $item->email }}</td>
                  <td>{{ $item->sex }}</td>
                  <td>{{ $item->tel }}</td>
                  <td>{{ $item->img }}</td>
                  <td>{{ $item->birth }}</td>
                  <td>{{ $item->addr }}</td>
                  <td>{{ $item->industry }}</td>
                  <td>{{ $item->indirect }}</td>
                      <td><a href="{{ url('/admin/user/edit') }}/{{ $item->id}}"><span class="label bg-success">修改</span></a> <a href=""><span class="label bg-success">查看角色</span></a>  <a href="javascript:;" onclick="del({{ $item->id }})"><span class="label bg-danger">删除</span></a></td>
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
                    url : '{{ '/admin/user/delete/' }}'+id,
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
=======
=======
>>>>>>> 24c4547913e63cd16afbf669d26e38640b2e64b4
=======
>>>>>>> 24c4547913e63cd16afbf669d26e38640b2e64b4
              </div>
                </div>
                <div class="col-md-offset-7 col-md-3">
                 <div class="input-group input-group-sm">
                  <input type="text" class="form-control" name="keywords" value=" @if(!empty($request['keywords'])) {{ $request['keywords'] }} @endif">
                    <span class="input-group-btn">
                      <button type="submit" class="btn btn-info btn-flat">搜索</button>
                    </span>
              </div>
                </div>
              </div>
            </form>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
            @if (session('info'))
                <div class="alert alert-success alert-dismissible" id = "alertSuccess">
                  <h4><i class="icon fa fa-check"></i> 成功!</h4>
                      {{ session('info') }}
                </div>
            @endif
                <thead>
                <tr>
                  <th>ID</th>
                  <th>用户名</th>
                  <th>邮箱</th>
                  <th>性别</th>
                  <th>电话</th>
                  <th>生日</th>
                  <th>住址</th>
                  <th>行业分类</th>
                  <th>个人简历</th>
                  <th>操作</th>
                </tr>
                </thead>
                <tbody>
            @foreach($data as $imet)
                <tr>
                  <td>{{ $imet->id }}</td>
                  <td class="name">{{ $imet->name }}</td>
                  <td>{{ $imet->email }}</td>
                  <td>{{ $imet->sex }}</td>
                  <td>{{ $imet->tel }}</td>
                  <td>{{ $imet->birth }}</td>
                  <td>{{ $imet->addr }}</td>
                  <td>{{ $imet->industry }}</td>
                  <td>{{ $imet->indirect }}</td>
                  <td><a href="{{ url('/admin/user/edit') }}/{{ $imet->id}}">修改</a>  <a href="{{ url('/admin/user/delete') }}/{{ $imet->id }}">删除</a></td>
      </tr>
    @endforeach
                </tfoot>
              </table>
              {!! $data->appends($request)->render() !!}
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


@endsection()
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 24c4547913e63cd16afbf669d26e38640b2e64b4
=======
>>>>>>> 24c4547913e63cd16afbf669d26e38640b2e64b4
=======
>>>>>>> 24c4547913e63cd16afbf669d26e38640b2e64b4
