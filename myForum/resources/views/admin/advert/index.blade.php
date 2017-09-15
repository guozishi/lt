@extends('admin.layouts.layout')

@section('content')        
    <!-- 广告表格 -->

  <div class="bg-light lter b-b wrapper-md">
        <h1 class="m-n font-thin h3">{{ $title }}</h1>
    </div>
    <div class="wrapper-md">
        <div class="panel panel-default">
            <div class="panel-heading">
                浏览
            </div>
            <form action="{{ url('/admin/advert/index') }}" method="get">
            <div class="row wrapper">
                <div class="col-sm-5 m-b-xs">
                    <select class="input-sm form-control w-sm inline v-middle" name="num">
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
                <div class="col-sm-4">
                </div>
                <div class="col-sm-3">
                  <div class="input-group">
                    <input name="keywords" type="text" class="input-sm form-control" placeholder="请输入内容" value="@if(!empty($request['keywords'])){{ $request['keywords'] }}@endif">
                    <span class="input-group-btn">
                      <button class="btn btn-sm btn-default" type="submit">搜索</button>
                    </span>
                  </div>


                </div>
            </div>
            </form>
            <div class="table-responsive">

            @if(session('info'))
            <div id="alertError2" class="alert ng-isolate-scope alert-success alert-dismissable" ng-class="['alert-' + (type || 'warning'), closeable ? 'alert-dismissable' : null]" role="alert" ng-repeat="alert in alerts" type="success" close="closeAlert($index)">
                <button ng-show="closeable" type="button" class="close" ng-click="close()">
                    <span aria-hidden="true"><font><font>× </font></font></span>
                    <span class="sr-only"><font><font>关闭</font></font></span>
                </button>
                <div ng-transclude=""><span class="ng-binding ng-scope"><font><font>提示！</font><font>{{ session('info') }}</font></font></span></div>
            </div>
            @endif

                <table class="table table-striped b-t b-light">
                    <thead>
                    <tr>
                      <th>ID</th>
                      <th>广告名称</th>
                      <th>图片</th>
                      <th>描述</th>
                      <th>更新时间</th>
                      <th>操作</th>
                    </tr>
                    </thead>
                    <tbody>
                 @foreach($data as $item)
                    <tr>
                      <td>{{ $item->aid }}</td>
                      <td class="name">{{ $item->atitle }}</td> 
                      <td><img src="/uploads/{{ $item->apic }}" width="45" /></td>
                      <td>{{ $item->adesc }}</td>
                      <td>{{ $item->atime }}</td>
                      <td><span class="label bg-success"><a href="{{ url('/admin/advert/edit') }}/{{ $item->aid }}?page={{ $page }}">编辑</a></span>&nbsp;&nbsp;<span class="label bg-danger"><a href="{{ url('/admin/advert/delete') }}/{{ $item->aid }}">删除</a></span></td>
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

@stop

@section('js')
    <script type="text/javascript">
        
        $("#alertError2").fadeOut(2000);

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
              var aid = $(this).prev().html();

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
                  data:{aid:aid,value:newValue},
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

