@extends('admin.layouts.layout')

@section('content')
    <div class="col-sm-12" style="padding-top: 50px;">
        <div class="panel panel-default">
            <div class="panel-body">
  <div ui-view="" class="fade-in-up ng-scope"><div class="bg-light lter b-b wrapper-md ng-scope">
  <h1 class="m-n font-thin h3"><font><font>用户添加</font></font></h1>
</div>
<div class="wrapper-md ng-scope" ng-controller="ToasterDemoCtrl">
  <!-- toaster directive -->
  <div id="toast-container" ng-class="config.position" toaster-options="{'position-class': 'toast-top-right', 'close-button':true}" class="ng-scope toast-top-right"><!-- ngRepeat: toaster in toasters --></div>
  <!-- / toaster directive -->
              @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
            <form role="form" action="/admin/user/insert" method="post" enctype="multipart/form-data">
            
            <!-- 提示信息 -->
              @if (session('info'))
                  <div class="alert alert-danger alert-dismissible" id="alertError">
                  <h4><i class="icon fa fa-ban"></i>错误!</h4>
                 {{ session('info') }}
                  </div>
              @endif
            <!-- 提示信息 -->

              {{ csrf_field() }}  
  <div class="row">
    <div class="col-sm-6">
      <div class="form-group">
        <label><font><font>管理员名:</font></font></label>
        <input type="text" class="form-control ng-pristine ng-valid ng-touched" placeholder="请输入账号" ng-model="toaster.title" name="name" value="{{ old('name') }}">
      </div>

        <div class="form-group">
        <label><font><font>密码:</font></font></label>
        <input type="password" class="form-control ng-pristine ng-valid ng-touched" placeholder="请输入密码" ng-model="toaster.title" name="password">
      </div>
       <div class="form-group">
        <label><font><font>电话号:</font></font></label>
        <input type="text" class="form-control ng-pristine ng-valid ng-touched" placeholder="请输入电话" ng-model="toaster.title" name="tel" value="{{ old('tel') }}">
      </div>
        <div class="input-group row">

            <div class="col-sm-9 big-photo">
                <div id="preview">
                    <img id="imghead" border="0" src="{{ url('/admin-template/img/photo_icon.png') }}" width="90" height="90" onclick="$('#previewImg').click();">
                </div>
                <input type="file" onchange="previewImage(this)" style="display: none;" id="previewImg" name="img">
                <!--<input id="uploaderInput" class="uploader__input" style="display: none;" type="file" accept="" multiple="">-->
            </div>
        </div>
    </div>
    
  </div>

  <button class="btn btn-info" ng-click="pop()"><font>提交</font></button>

</div>
  </div>
 </div>
</div>
@endsection()

@section('js')

  <script type="text/javascript">
      $("#alertError").fadeOut(3000);
      $("#alertSuccess").fadeOut(3000);
      //图片上传预览    IE是用了滤镜。
      function previewImage(file)
      {
          var MAXWIDTH  = 90;
          var MAXHEIGHT = 90;
          var div = document.getElementById('preview');
          if (file.files && file.files[0])
          {
              div.innerHTML ='<img id=imghead onclick=$("#previewImg").click()>';
              var img = document.getElementById('imghead');
              img.onload = function(){
                  var rect = clacImgZoomParam(MAXWIDTH, MAXHEIGHT, img.offsetWidth, img.offsetHeight);
                  img.width  =  rect.width;
                  img.height =  rect.height;
//                 img.style.marginLeft = rect.left+'px';
                  img.style.marginTop = rect.top+'px';
              }
              var reader = new FileReader();
              reader.onload = function(evt){img.src = evt.target.result;}
              reader.readAsDataURL(file.files[0]);
          }
          else //兼容IE
          {
              var sFilter='filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod=scale,src="';
              file.select();
              var src = document.selection.createRange().text;
              div.innerHTML = '<img id=imghead>';
              var img = document.getElementById('imghead');
              img.filters.item('DXImageTransform.Microsoft.AlphaImageLoader').src = src;
              var rect = clacImgZoomParam(MAXWIDTH, MAXHEIGHT, img.offsetWidth, img.offsetHeight);
              status =('rect:'+rect.top+','+rect.left+','+rect.width+','+rect.height);
              div.innerHTML = "<div id=divhead style='width:"+rect.width+"px;height:"+rect.height+"px;margin-top:"+rect.top+"px;"+sFilter+src+"\"'></div>";
          }
      }
      function clacImgZoomParam( maxWidth, maxHeight, width, height ){
          var param = {top:0, left:0, width:width, height:height};
          if( width>maxWidth || height>maxHeight ){
              rateWidth = width / maxWidth;
              rateHeight = height / maxHeight;

              if( rateWidth > rateHeight ){
                  param.width =  maxWidth;
                  param.height = Math.round(height / rateWidth);
              }else{
                  param.width = Math.round(width / rateHeight);
                  param.height = maxHeight;
              }
          }
          param.left = Math.round((maxWidth - param.width) / 2);
          param.top = Math.round((maxHeight - param.height) / 2);
          return param;
      }
  </script>

@stop