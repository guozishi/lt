@extends('admin.layouts.layout')

@section('content')

    <div class="bg-light lter b-b wrapper-md">
        <h1 class="m-n font-thin h3">分类管理</h1>
    </div>
    <div class="wrapper-md">
        <div class="panel panel-default">
            <div class="panel-heading">
                响应表
            </div>
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
            <div class="table-responsive">
                <table class="table table-striped b-t b-light">
                    <thead>
                    <tr>
                        <th style="width:20px;">
                            <label class="i-checks m-b-none">
                                <input type="checkbox"><i></i>
                            </label>
                        </th>
                        <th>排序</th>
                        <th   class="tc">ID</th>
                        <th>分类名</th>
                        <th>标题</th>
                        <th>关键字</th>
                        <th>描述</th>
                        <th>父ID</th>
                        <th>操作</th>
                        <th style="width:30px;"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as  $item)
                    <tr>
                        <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
                        <td class="tc">
                            <input type="text" style="width:30px; text-align: center;" onchange="changeOrder(this,{{ $item->cate_id }})" name="cate_ord[]" value="{{ $item->cate_orderby }}">
                        </td>
                        <td>{{ $item->cate_id }}</td>
                        <td>{{ $item->cate_names }}</td>
                        <td>{{ $item->cate_title }}</td>
                        <td>{{ $item->cate_keywords }}</td>
                        <td>{{ $item->cate_desc }}</td>
                        <td>{{ $item->cate_pid }}</td>
                        <td><a href="{{ url('/admin/category/'.$item->cate_id.'/edit') }}"><span class="label bg-success">修改</span></a>   &nbsp;&nbsp;<a href="javascript:;" onclick="del({{ $item->cate_id }})"><span class="label bg-danger">删除</span></a></td>
                    </tr>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <footer class="panel-footer">
                <div class="row">
                    <div class="col-sm-4 text-right text-center-xs">

                    </div>
                </div>
            </footer>
        </div>
    </div>

@endsection()

@section('script')
<script>
    $("#alertError").fadeOut(3000);
    $("#alertSuccess").fadeOut(3000);

    function changeOrder(obj,cate_id) {
        //获取输入的值
        var cate_orderby = $(obj).val();
        $.ajax({
            url : '{{ '/cate/orderby' }}',
            type : 'post',
            data : {'_token':'{{csrf_token()}}','cate_id': cate_id,'cate_orderby':cate_orderby},
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

    function del(id) {

        layer.confirm('确定要删除吗？', {
            btn: ['确定','取消'] //按钮
        }, function(){
            $.ajax({
                url : '{{ '/admin/category/' }}'+id,
                type : 'post',
                data : {'_token':'{{ csrf_token() }}', '_method':'delete'},
                success : function(data){
                    if (data.status == 0) {
                        layer.msg(data.msg, {icon: 1});
                        location.href = location.href;
                    }else if (data.status == 2 ){
                        layer.alert(data.msg);
                        location.href = location.href;

                    } else{
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
</script>
 @endsection
