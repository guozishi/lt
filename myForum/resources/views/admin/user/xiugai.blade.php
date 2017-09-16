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
           @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
       @endif
            <form role="form" action="/admin/user/cr" method="post" enctype="multipart/form-data">
                        <!-- 提示信息 -->
              @if (session('info'))
                  <div class="alert alert-danger alert-dismissible" id="alertError">
                  <h4><i class="icon fa fa-ban"></i>错误!</h4>
                 {{ session('info') }}
                  </div>
              @endif
            <!-- 提示信息 -->
              {{ csrf_field() }}
                <input type="hidden" name="user_id" value="{{ $data->user_id }}">
              <div class="box-body">
                  <label for="exampleInputEmail1">用户名</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="请输入用户名" name="name" value="{{ $data->name }}">
                </div>
                 <div class="form-group">
                  <label for="exampleInputEmail1">电话</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="请输入用户名" name="tel" value="{{ $data->tel }}">
                </div>
 

    
  <button class="btn btn-info" ng-click="pop()"><font><font>提交</font></font></button>

</div>
  </div>
            </div>
        </div>
    </div>
@endsection()


@section('js')

  <script type="text/javascript">
      $("#alertError").fadeOut(3000);
      $("#alertSuccess").fadeOut(3000);
  </script>

@stop