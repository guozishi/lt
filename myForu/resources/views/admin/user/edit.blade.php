@extends('admin.layouts.layout')

@section('content')
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    <div class="wrapper-md">
        <div class="panel panel-default">
            <div class="panel-heading">
  <div ui-view="" class="fade-in-up ng-scope"><div class="bg-light lter b-b wrapper-md ng-scope">
  <h1 class="m-n font-thin h3"><font><font>用户添加</font></font></h1>
</div>
<div class="wrapper-md ng-scope" ng-controller="ToasterDemoCtrl">
  <!-- toaster directive -->
  <div id="toast-container" ng-class="config.position" toaster-options="{'position-class': 'toast-top-right', 'close-button':true}" class="ng-scope toast-top-right"><!-- ngRepeat: toaster in toasters --></div>

=======
=======
>>>>>>> 24c4547913e63cd16afbf669d26e38640b2e64b4
=======
>>>>>>> 24c4547913e63cd16afbf669d26e38640b2e64b4
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        用户管理
        <small>用户编辑</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> 主页</a></li>
        <li><a href="#">用户管理</a></li>
        <li class="active">用户编辑</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">快速编辑</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 24c4547913e63cd16afbf669d26e38640b2e64b4
=======
>>>>>>> 24c4547913e63cd16afbf669d26e38640b2e64b4
=======
>>>>>>> 24c4547913e63cd16afbf669d26e38640b2e64b4
            @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
            <form role="form" action="/admin/user/update" method="post" enctype="multipart/form-data">
                        <!-- 提示信息 -->
              @if (session('info'))
                  <div class="alert alert-danger alert-dismissible" id="alertError">
                  <h4><i class="icon fa fa-ban"></i>错误!</h4>
                 {{ session('info') }}
                  </div>
              @endif
            <!-- 提示信息 -->
            <input type="hidden" name="id" value="{{ $data->id }}">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">用户名</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="请输入用户名" name="name" value="{{ $data->name }}">
                </div>
                 <div class="form-group">
                  <label for="exampleInputEmail1">电话</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="请输入用户名" name="tel" value="{{ $data->tel }}">
                </div>
                 <div class="form-group">
                  <label for="exampleInputEmail1">个人简介</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="请输入用户名" name="indirect" value="{{ $data->indirect }}">
                </div>
                  <div class="form-group">
                  <label for="exampleInputEmail1">行业分类</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="请输入用户名" name="industry" value="{{ $data->industry }}">
                </div>
                 <div class="form-group">
                  <label for="exampleInputPassword1">邮箱</label>
                  <input type="email" class="form-control" id="exampleInputPassword1" placeholder="请输入您的邮箱" name="email" value="{{ $data->email }}">

      <div class="form-group">
                  <div class="radio">
                    <label>
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                      <input type="radio" name="sex" id="optionsRadios1" value="男"
=======
                      <input type="radio" name="sex" id="optionsRadios1" value="男" 
>>>>>>> 24c4547913e63cd16afbf669d26e38640b2e64b4
=======
                      <input type="radio" name="sex" id="optionsRadios1" value="男" 
>>>>>>> 24c4547913e63cd16afbf669d26e38640b2e64b4
=======
                      <input type="radio" name="sex" id="optionsRadios1" value="男" 
>>>>>>> 24c4547913e63cd16afbf669d26e38640b2e64b4

                      @if( $data->sex == "男" )  checked="checked"  @endif >
                      男
                    </label>
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                      <label>
                          <input type="radio" name="sex" id="optionsRadios2" value="女"

                                 @if ( $data->sex == "女") checked="checked" @endif  >
                          女
                      </label>

                  </div>




  <button class="btn btn-info" ng-click="pop()"><font><font>提交</font></font></button>

</div></div>
=======
=======
>>>>>>> 24c4547913e63cd16afbf669d26e38640b2e64b4
=======
>>>>>>> 24c4547913e63cd16afbf669d26e38640b2e64b4
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="sex" id="optionsRadios2" value="女"

                      @if ( $data->sex == "女") checked="checked" @endif  >
                      女
                    </label>
                  </div>
                </div>
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">更新</button>
              </div>
            </form>
          </div>
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 24c4547913e63cd16afbf669d26e38640b2e64b4
=======
>>>>>>> 24c4547913e63cd16afbf669d26e38640b2e64b4
=======
>>>>>>> 24c4547913e63cd16afbf669d26e38640b2e64b4
@endsection()
