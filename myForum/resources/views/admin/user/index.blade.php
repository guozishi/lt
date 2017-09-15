@extends('admin.layouts.layout')

@section('content')
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
