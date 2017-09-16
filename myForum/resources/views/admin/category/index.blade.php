@extends('admin.layouts.layout')
@section('content')
    <!--面包屑导航 开始-->
    <div class="crumb_warp">
        <!--<i class="fa fa-bell"></i> 欢迎使用登陆网站后台，建站的首选工具。-->
        <i class="fa fa-home"></i> <a href="#">首页</a> &raquo; <a href="#">商品管理</a> &raquo; 添加商品
    </div>
    <!--面包屑导航 结束-->

	<!--结果页快捷搜索框 开始-->
	<div class="search_wrap">
        <form action="" method="post">
            <table class="search_tab">
                <tr>
                    <th width="120">选择分类:</th>
                    <td>
                        <select onchange="javascript:location.href=this.value;">
                            <option value="">全部</option>
                            <option value="http://www.baidu.com">百度</option>
                            <option value="http://www.sina.com">新浪</option>
                        </select>
                    </td>
                    <th width="70">关键字:</th>
                    <td><input type="text" name="keywords" placeholder="关键字"></td>
                    <td><input type="submit" name="sub" value="查询"></td>
                </tr>
            </table>
        </form>
    </div>
    <!--结果页快捷搜索框 结束-->

    <!--搜索结果页面 列表 开始-->
    <form action="#" method="post">
        <div class="result_wrap">
            <!--快捷导航 开始-->
            <div class="result_content">
                <div class="short_wrap">
                    <a href="#"><i class="fa fa-plus"></i>新增文章</a>
                    <a href="#"><i class="fa fa-recycle"></i>批量删除</a>
                    <a href="#"><i class="fa fa-refresh"></i>更新排序</a>
                </div>
            </div>
            <!--快捷导航 结束-->
        </div>

        <div class="result_wrap">
            <div class="result_content">
                <table class="list_tab">
                    <tr>
                        <th class="tc" width="5%"><input type="checkbox" name=""></th>
                        <th class="tc">PID</th>
                        <th class="tc">ID</th>
                        <th>标题</th>
                        <th>分类名</th>
                        <th>关键字</th>
                        <th>描述</th>
                        <th>操作</th>
                    </tr>
                    @foreach( $cate as $k=>$v)
                    <tr>
                        <td class="tc"><input type="checkbox" name="id[]" value="59"></td>
                        <td class="tc">
                            <input type="text" name="ord[]" value="0">
                        </td>
                        <td class="tc">{{ $v->cate_id }}</td>
                        <td>
                            <a href="#">{{ $v->cate_title }}</a>
                        </td>
                        <td>{{ $v->name }}</td>
                        <td>{{ $v->cate_keywords }}</td>
                        <td>{{ $v->art_desc }}</td>
                        <td>
                            <a href="/admin/category/{{ $v->cate_id }}/edit">修改</a>
                            <a href="javascript:;" onclick="del({{ $v->cate_id }})">删除</a>
                        </td>
                    @endforeach
                    </tr>
                </table>

                <div class="page_list">
                    <ul>
                        <li class="disabled"><a href="#">&laquo;</a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">&raquo;</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </form>
    <!--搜索结果页面 列表 结束-->
@endsection()
@section('js')
    <script type="text/javascript" src="{{ url('layer/layer.js') }}"></script>
    <script>
        function del(id) {
            //询问框
            layer.confirm('您确定要删除吗？', {
                btn: ['确定','取消'] //按钮
            }, function(){
                $.post('{{url('/admin/category')}}/'+id,{'_token':'{{ csrf_token() }}','_method':'delete'},function (data) {

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
                layer.msg('取消成功', {
                    time: 3000, //2s后自动关闭
                    btn: [ '知道了']
                });
            });



        }
    </script>
@endsection()