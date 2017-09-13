@extends('admin.layouts.layout')

@section('content')        
    <!-- 广告表格 -->
      <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <ol class="breadcrumb">
        <h1>
        广告管理
        <small>广告列表</small>
      </h1>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            
            <!-- /.box-header -->
            <div class="box-body">
            
            @if(session('info'))
            <div id="alertError" class="alert ng-isolate-scope alert-success alert-dismissable" ng-class="['alert-' + (type || 'warning'), closeable ? 'alert-dismissable' : null]" role="alert" ng-repeat="alert in alerts" type="success" close="closeAlert($index)">
                <button ng-show="closeable" type="button" class="close" ng-click="close()">
                    <span aria-hidden="true"><font><font>× </font></font></span>
                    <span class="sr-only"><font><font>关闭</font></font></span>
                </button>
                <div ng-transclude=""><span class="ng-binding ng-scope"><font><font>提示！</font><font>{{ session('info') }}</font></font></span></div>
            </div>
            @endif

            <form action="{{ url('/admin/advert/index') }}" method="get">
            <div class="col-md-2">
                <div class="form-group">
                    <select name="num" class="form-control">
                      <option
                      @if(!empty($request['num']) && $request['num'] == 10)
                        selected="selected"
                      @endif
                       value="10">10</option>
                      <option
                      @if(!empty($request['num']) && $request['num'] == 25)
                        selected="selected"
                      @endif
                       value="25">25</option>
                      <option
                      @if(!empty($request['num']) && $request['num'] == 50)
                        selected="selected"
                      @endif
                       value="50">50</option>
                      <option
                      @if(!empty($request['num']) && $request['num'] == 100)
                        selected="selected"
                      @endif
                       value="100">100</option>
                    </select>
                </div>
            </div>
            <div class="col-md-offset-7 col-md-3">
              
                <div class="input-group">
                  <input name="keywords" type="text" class="form-control" value="@if(!empty($request['keywords'])){{ $request['keywords'] }}@endif">
                  <span class="input-group-btn">
                    <button class="btn btn-default" type="submit"><font><font>搜索</font></font></button>
                  </span>
                </div>

            </div>
            </form>
            
            

              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>广告名称</th>
                  <th>广告图片</th>
                  <th>广告描述</th>
                  <th>操作</th>
                </tr>
                </thead>
                <tbody>
                @foreach($data as $item)
                <tr>
                  <td>{{ $item->id }}</td>
                  <td class="name">{{ $item->atitle }}</td> 
                  <td><img src="/uploads/{{ $item->apic }}" width="45" /></td>
                  <td>{{ $item->adesc }}</td>
                  <td><a href="{{ url('/admin/advert/edit') }}/{{ $item->id }}?page={{ $page }}">编辑</a> <a href="{{ url('/admin/advert/delete') }}/{{ $item->id }}">删除</a></td>
                </tr>
                @endforeach
                </tbody>
              </table>
              {!! $data->appends($request)->render() !!}
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@stop

@section('js')
    <script type="text/javascript">

        $("#alertError").fadeOut(3000);

        $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
        });

        $(".name").one('dblclick',changeName);

        function changeName()
        {
              var td = $(this);

              // 获取 ID
              var id = $(this).prev().html();

              // 获取原来的值
              var value = $(this).text();

              // 创建 input
              var inp = $("<input type='text'>");

              // 将旧值放入 input
              inp.val(value);

              // 替换
              $(this).html(inp);

              inp.select();

              // 添加失去焦点
              inp.on('blur',function(){

                // 获取新值
                var newValue = inp.val();

                // 书写 ajax
                $.ajax({
                  type:'POST',
                  url:'{{ url("/admin/advert/ajaxchangename") }}',
                  data:{id:id,value:newValue},
                  success:function(data)
                  {
                      if(data == '0')
                      {
                        alert('用户名已存在');
                        td.html(value);
                      }else if(data == '1')
                      {
                        td.html(newValue);
                      }else
                      {
                        td.html(value);
                      }
                  },
                  error:function()
                  {
                      alert('数据异常');
                  },
                  dataType:'json'

                });

                // 添加双击事件
                td.one('dblclick', changeName);

              });     

          
        }
    </script>
@stop

