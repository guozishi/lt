@extends('admin.layouts.layout')

@section('content')
	<!-- 添加表单 -->


	<div class="app-content-body fade-in-up ng-scope" ui-view=""><!-- uiView:  -->
		<div ui-view="" class="fade-in-up ng-scope">
		<section class="content-header">
	      <ol class="breadcrumb">
	        <h1>
	        广告管理
	        <small>添加广告</small>
	      </h1>
	      </ol>
	    </section>


		<!-- form start -->
        <form role="form" action="{{ url('/admin/advert/insert') }}" method="post" enctype="multipart/form-data">

        	@if(session('info'))
            <div id="alertError" class="alert ng-isolate-scope alert-success alert-dismissable" ng-class="['alert-' + (type || 'warning'), closeable ? 'alert-dismissable' : null]" role="alert" ng-repeat="alert in alerts" type="success" close="closeAlert($index)">
                <button ng-show="closeable" type="button" class="close" ng-click="close()">
                    <span aria-hidden="true"><font><font>× </font></font></span>
                    <span class="sr-only"><font><font>关闭</font></font></span>
                </button>
                <div ng-transclude=""><span class="ng-binding ng-scope"><font><font>提示！</font><font>{{ session('info') }}</font></font></span></div>
            </div>
            @endif

            @if (count($errors) > 0)

			    <div id="alertError2" class="alert alert-danger alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i><font><font> 错误！</font></font></h4>
			            @foreach ($errors->all() as $error)
			                <li>{{ $error }}</li>
			            @endforeach
			        
			    </div>
			@endif

          {{ csrf_field() }}
			<div class="wrapper-md ng-scope" ng-controller="ToasterDemoCtrl">
			  <!-- toaster directive -->
			  <div id="toast-container" ng-class="config.position" toaster-options="{'position-class': 'toast-top-right', 'close-button':true}" class="ng-scope toast-top-right"><!-- ngRepeat: toaster in toasters --></div>
			  <!-- / toaster directive -->
			  <div class="row">
			    <div class="col-sm-6">
			      <div class="form-group">
			        <label><font><font>广告名称</font></font></label>
			        <input type="text" class="form-control ng-pristine ng-untouched ng-valid" name="atitle" placeholder="请输入广告名称..." ng-model="toaster.title" value="{{ old('atitle') }}">
			      </div>

			      <div class="form-group">
			        <label><font><font>广告描述</font></font></label>
			        <textarea class="form-control ng-pristine ng-untouched ng-valid" name="adesc" placeholder="请对广告进行描述..." rows="5" ng-model="toaster.text">{{ old('adesc') }}</textarea>
			      </div>
				  <label><font><font>广告图片</font></font></label>
			      
            	 <!--input-group start-->
		            <div class="input-group row">
		                
		                <div class="col-sm-9 big-photo">
		                	<div id="preview">
		                        <img id="imghead" border="0" src="{{ url('/admin-template/img/photo_icon.png') }}" width="90" height="90" onclick="$('#previewImg').click();">
		                     </div>         
		                    <input type="file" onchange="previewImage(this)" style="display: none;" id="previewImg" name="apic">
		                	<!--<input id="uploaderInput" class="uploader__input" style="display: none;" type="file" accept="" multiple="">-->
		                </div>
		            </div>
		          <!--input-group end-->

			    </div>
			    
			  </div><br>

			  <button class="btn btn-info" ng-click="pop()"><font><font>确定添加</font></font></button>


			</div>
			</form>
		</div>
	</div>

@stop

@section('js')
	<script type="text/javascript">
		$("#alertError").fadeOut(2000);
		$("#alertError2").fadeOut(2000);

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