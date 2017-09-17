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
                <div class="col-sm-4">
                </div>
                <div class="col-sm-3">
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
                <form action="{{ url('/admin/config/updateContent') }}" method="post">
                    {{ csrf_field() }}
                <table class="table table-striped b-t b-light">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>排序</th>
                        <th>标题</th>
                        <th>名字</th>
                        <th>类型</th>
                        <th>内容</th>
                        <th>说明</th>
                        <th>操作</th>
                    </tr>
                    </thead>
                    <tbody>
                @foreach($data as $item)
                    <tr>
                        <td>{{ $item->conf_id }}</td>
                        <td class="tc">
                            <input type="text" style="width:30px; text-align: center;"  value="{{ $item->conf_order }}" onchange="order( this,{{ $item->conf_id }})">
                        </td>

                        <td>{{ $item->conf_title }}</td>
                        <td>{{ $item->conf_name }}</td>
                        <td>{{ $item->field_type }}</td>
                        <td>
                            <input type="hidden" name="conf_id[]" value="{{ $item->conf_id }}">
                            {!!  $item->_content !!}
                        </td>
                        <td>{{ $item->conf_tips }}</td>

                        <td><a href="{{ url('/admin/config/'.$item->conf_id.'/edit') }}"><span class="label bg-success">修改</span>&nbsp; &nbsp;&nbsp;</a><a href="javascript:;" onclick="del({{ $item->conf_id }})"><span class="label bg-danger">删除</span></a></td>
                    </tr>
                @endforeach
                    </tbody>
                </table>
                <div class="line line-dashed b-b line-lg pull-in"></div>
                <div class="form-group">
                    <button class="btn m-b-xs w-xs btn-success btn-rounded" type="submit" style="width: 100px;">提交</button>
                    <div class="col-sm-2 col-sm-offset-8" >

                    </div>
                </div>
             </form>
            </div>
        </div>
    </div>


@endsection()

@section('script')
    <script>
        $("#alertSuccess").fadeOut(2000);
        $("#alertError").fadeOut(2000);

        function del(id) {
            layer.confirm('确定要删除吗？', {
                btn: ['确定','取消'] //按钮
            }, function(){
                $.ajax({
                    url : '{{ '/admin/config/' }}'+id,
                    type : 'post',
                    data : {'_token': '{{ csrf_token() }}', '_method': 'delete' },
                    success : function(data)
                    {
                        if (data.status == 0 ) {
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
                    time: 1000, //2s后自动关闭
                });
            });
        }

        function order(obj,conf_id) {
            var conf_order = $(obj).val();
            $.ajax({
                url : '{{ '/admin/conf/order' }}',
                type : 'post',
                data : {'_token':'{{ csrf_token() }}','conf_order': conf_order,'conf_id':conf_id},
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
        }
    </script>
@endsection

