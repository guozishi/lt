@extends('admin.layouts.layout')

@section('content')

    <div class="panel-body">
        <form role="form" class="ng-pristine ng-valid" action="{{ asset('/admin/repass') }}" method="post">
           {{ csrf_field() }}
           <!-- 错误提示信息 -->
               @if (session('info.error'))
                   <div class="alert alert-danger alert-dismissible" id="alertError">
                       <h4><i class="icon fa fa-ban"></i>错误!</h4>
                       {{ session('info.error') }}
                   </div>
           @endif
           <!-- 错误提示信息 -->
            <div class="form-group">
                <label>旧密码</label>
                <input type="password" class="form-control" placeholder="请输入旧密码.." name="repassword">
            </div>
            <div class="form-group">
                <label>新密码</label>
                <input type="password" class="form-control" placeholder="请输入新密码.." name="password">
            </div>
             <div class="form-group">
                   <label>请确新新密码</label>
                   <input type="password" class="form-control" placeholder="请确认新密码.." name="conpassword">
              </div>
            <button type="submit" class="btn btn-sm btn-primary">提交</button>
        </form>
    </div>

@endsection

@section('script')
    <script>
        $("#alertError").fadeOut(2000);

    </script>

    @endsection