@extends('admin.layouts.layout')

@section('content')

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
        <label><font><font>用户名</font></font></label>
        <input type="text" class="form-control ng-pristine ng-valid ng-touched" placeholder="请输入账号" ng-model="toaster.title" name="name" value="{{ old('name') }}">
      </div>

        <div class="form-group">
        <label><font><font>密码</font></font></label>
        <input type="password" class="form-control ng-pristine ng-valid ng-touched" placeholder="请输入密码" ng-model="toaster.title" name="password">
      </div>
       <div class="form-group">
        <label><font><font>电话号</font></font></label>
        <input type="text" class="form-control ng-pristine ng-valid ng-touched" placeholder="请输入电话" ng-model="toaster.title" name="tel" value="{{ old('tel') }}">
      </div>

       <div class="form-group">
        <label><font><font>用户名</font></font></label><br>
        <input type="radio" name="auth" value="0">超级管理员
        <input type="radio" name="auth" value="1">普通管理员
      </div>

    </div>
    
  </div>

  <button class="btn btn-info" ng-click="pop()"><font><font>提交</font></font></button>

</div></div>
@endsection()
