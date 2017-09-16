@extends('admin.layouts.layout')

@section('content')
  @if (count($errors) > 0)
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif
<div class="bg-light lter b-b wrapper-md">
  <h1 class="m-n font-thin h3">{{ $title_cld  }}</h1>
</div>
<form action="{{ url('/admin/complain') }}" method="get">

  <div class="wrapper-md">
  <div class="panel panel-default">
    <div class="panel-heading">
      {{ $title_cld }}
    </div>
    <div class="row wrapper">
      <div class="col-sm-5 m-b-xs">
        <select name="num" id="num" class="input-sm form-control w-sm inline v-middle">
          <option id="op" value="5" @if($num == 5) selected @endif >5</option>
          <option value="10" @if($num == 10) selected @endif >10</option>
          <option value="15"@if($num == 15) selected @endif >15</option>
          <option value="20"@if($num == 20) selected @endif >20</option>
        </select>
        <button class="btn btn-sm btn-default">分页</button>

      </div>
      <div class="col-sm-4">
      </div>
      <div class="col-sm-3">
        <div class="input-group">
          <input type="text" name="keywords" value="{{ $input }}" class="input-sm form-control" placeholder="请输入内容">
          <span class="input-group-btn">
            <button class="btn btn-sm btn-default" type="submit">搜索</button>
          </span>
        </div>
      </div>
    </div>
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th style="width:20px;">
              <label class="i-checks m-b-none">
                <input type="checkbox"><i></i>
              </label>
            </th>
            <th>ID</th>
            <th>举报类型</th>
            <th>内容标题</th>
            <th>举报人</th>
            <th>状态</th>
            <th>举报时间</th>
            <th>操作</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
        @foreach( $coms as $item )
          <tr>
            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
            <td>{{ $item->cmpl_id }}</td>
            <td>{{ $item->cmpl_type }}</td>
            <td>{{ $item->cmpl_title }}</td>
            <td>{{ $item->cmpl_name }}</td>
            <td>{{ $item->cmpl_status }}</td>
            <td>{{ $item->created_at }}</td>
            <td>
                <a class="glyphicon glyphicon-align-left" href="javascript:;" onclick="detail(10)">详情</a>&nbsp;&nbsp;
                <a class="label bg-success" href="javascript:;" onclick="sendBack(13,11)">退回</a>&nbsp;&nbsp;
                <a class="label bg-danger" href="javascript:;" onclick="del(10,17)">删除原贴</a>&nbsp;&nbsp;
            </td>
            <td>
              <a href ui-toggle-class><i class="fa fa-check text-success text-active"></i></a>
            </td>
          </tr>
        @endforeach
        </tbody>
      </table>
    </div>
    <footer class="panel-footer">
      <div class="row"> 
        <div class="col-sm-4 text-right text-center-xs">
          {!! $coms->appends(['keywords'=>$input,'num'=>$num])->render() !!}
        </div>
      </div>
    </footer>
  </div>
</div>
</form>

@endsection()
@section('js')
  <script type="text/javascript" src="{{ asset('layer/layer.js') }}"></script>
  <script type="text/javascript">

    //分页
    $('#num').change(function () {
        var num = document.getElementById("num").value;
        $.post('{{url('/test')}}',{'_token':'{{ csrf_token() }}','num':num},function (data) {
            console.log(num);
        });
//        alert(num);
    });


    function detail(){
         //iframe窗
          layer.open({
              type: 2,
              title: '文章详情',
              shadeClose: true,
              shade: false,
              maxmin: true, //开启最大化最小化按钮
              area: ['893px', '600px'],
              content: '//www.dbs.com/admin/complain/detail'
            {{--{{ url('admin/complain/detail') }}--}}
          });
    }

    function sendBack(user_id,art_id) {
//        询问框
        layer.confirm('<b>您要退回吗？</b>'+'<br>'+'(注:若退回将降低投诉者阳光投诉星级)', {
            btn: ['确定','再看看'] //按钮
        }, function(){
            $.post('{{url('/admin/complain/sendBack')}}/'+user_id,{'_token':'{{ csrf_token() }}','art_id':art_id},function (data) {
                if(data.state==0){
                    layer.msg(data.msg, {icon: 1});
                    setTimeout(function(){
                        location.href = location.href;
                    },1500);
                }else if(data.state==1){
                    layer.msg(data.msg, {icon: 2});
                    setTimeout(function(){
                        location.href = location.href;
                    },1500);
                }
            });
        }, function(){
            layer.msg('<b>提示</b>', {
                time: 3000, //2s后自动关闭
                btn: [ '取消成功']
            });
        });

    }

      function del(user_id,art_id){
          layer.confirm('<b>您确定要删除吗？</b>', {
              btn: ['确定','点错了'] //按钮
          }, function(){
              $.post('{{ url('/admin/cmplain/del') }}/'+user_id,{ '_token':'{{ csrf_token() }}','art_id':art_id },function (data) {
                  if(data.state==0){
                      layer.msg(data.msg, {icon: 1});
                      setTimeout(function(){
                          location.href = location.href;
                      },1500);
                  }else if(data.state==1){
                      layer.msg(data.msg, {icon: 2});
                      setTimeout(function(){
                          location.href = location.href;
                      },1500);
                  }else if(data.state==2){
                      layer.msg(data.msg, {icon: 2});
                      setTimeout(function(){
                          location.href = location.href;
                      },1500);

                  }
              } );
          }, function(){
              layer.msg('<b>提示</b>', {
                  time: 20000, //20s后自动关闭
                  btn: ['取消成功!']
              });
          });
      }


  </script>
@endsection()

 