@extends('admin.layouts.layout')
@section('content')
    <!--面包屑导航 开始-->
    <div class="crumb_warp">
        <!--<i class="fa fa-bell"></i> 欢迎使用登陆网站后台，建站的首选工具。-->
        <i class="fa fa-home"></i> <a href="#">首页</a> &raquo; <a href="#">商品管理</a> &raquo; 添加商品
    </div>
    <!--面包屑导航 结束-->

    <!--结果集标题与导航组件 开始-->
    <div class="result_wrap">
        <div class="result_title">
            <h3>快捷操作</h3>
        </div>
        <div class="result_content">
            <div class="short_wrap">
                <a href="#"><i class="fa fa-plus"></i>新增文章</a>
                <a href="#"><i class="fa fa-recycle"></i>批量删除</a>
                <a href="#"><i class="fa fa-refresh"></i>更新排序</a>
            </div>
        </div>
    </div>
    <!--结果集标题与导航组件 结束-->

    <div class="result_wrap">
        <form id="art_form" action="/admin/category" method="post" enctype="multipart/form-data" >
            {{ csrf_field() }}
            {{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}
            <table class="add_tab">
                <tbody>
                <tr>
                    <th width="120"><i class="require">*</i>分类：</th>
                    <td>
                        <select name="">
                            <option value="">==请选择==</option>
                            <option value="19">精品界面</option>
                            <option value="20">推荐界面</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th><i class="require">*</i>标题：</th>
                    <td>
                        <input type="text" class="lg" name="d_title">
                        <p>标题可以写30个字</p>
                    </td>
                </tr>
                <tr>
                    <th>作者：</th>
                    <td>
                        <input type="text" name="zuoze">
                        <span><i class="fa fa-exclamation-circle yellow"></i>这里是默认长度</span>
                    </td>
                </tr>
                <tr>
                    <th><i class="require">*</i>价格：</th>
                    <td>
                        <input type="text" class="sm" name="price">元
                        <span><i class="fa fa-exclamation-circle yellow"></i>这里是短文本长度</span>
                    </td>
                </tr>
                <tr>
                    <th><i class="require">*</i>缩略图：</th>
                    <td>
                        <input type="text" size="50" name="art_thumb" id="art_thumb" >
                        <input id="file_upload" name="file_upload" type="file" multiple="true">
                        <p><img id="img1" alt="上传后显示图片" style="max-width:350px;max-height:100px;" /></p>
                    </td>
                </tr>
                <tr>
                    <th></th>
                    <td>
                        <input type="submit" value="提交">
                        <input type="button" class="back" onclick="history.go(-1)" value="返回">
                    </td>
                </tr>
                </tbody>
            </table>
        </form>
    </div>
@endsection()
@section('js')
    <script type="text/javascript">
        $(function () {
            $("#file_upload").change(function () {
                uploadImage();
            })
        })
        function uploadImage() {
        //  判断是否有选择上传文件
            var imgPath = $("#file_upload").val();
            if (imgPath == "") {
                alert("请选择上传图片！");
                return;
            }
            //判断上传文件的后缀名
            var strExtension = imgPath.substr(imgPath.lastIndexOf('.') + 1);
            if (strExtension != 'jpg' && strExtension != 'gif'
                && strExtension != 'png' && strExtension != 'bmp') {
                alert("请选择图片文件");
                return;
            }
            var formData = new FormData($('#art_form')[0]);
            $.ajax({
                type: "POST",
                url: "/admin/category",
                data: formData,
                contentType: false,
                processData: false,
                success: function(data) {
                    $('#img1').attr('src','/'+data);
                    $('#art_thumb').val(data);
                },
                error: function(XMLHttpRequest, textStatus, errorThrown) {
                    alert("上传失败，请检查网络后重试");
                }
            });
        }
    </script>
@endsection()