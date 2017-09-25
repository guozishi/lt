@extends('admin.layouts.layout')

@section('content')

<div class="col-sm-12 ">
        <form name="form-contact" action="{{ url('/admin/article/update')  }}" method="post"  class="form-validation ng-pristine ng-invalid ng-invalid-required ng-valid-email ng-valid-url">
        <input type="hidden" name="id"         value="{{$data->article_id}}"/>
         {{ csrf_field() }}
               @if (session('info'))
                  <div  id="ale" class="alert alert-danger alert-dismissible" id="alertError">
                   <h4><i class="icon fa fa-ban"></i>您还没有修改 请修改!</h4>
                    {{ session('info') }}
                     </div>
               @endif
          <div class="panel panel-default">
            <div class="panel-heading">
              <span class="h4"><font><font>帖子编辑</font></font></span>
            </div>
            <div class="panel-body">
            </p>                        
                <div class="form-group pull-in clearfix">
                  <div class="col-sm-8">
                    <label><font><font>作者</font></font></label>
                    <input type="text" class="form-control ng-pristine ng-untouched ng-invalid ng-invalid-required" value="{{$data->login_id}}" name="user_id" ng-model="contact.name" required="">
                  </div>
        
                  <div class="col-sm-8">
                    <label><font><font>标题</font></font></label>
                    <input type="text" class="form-control ng-pristine ng-untouched ng-invalid ng-invalid-required" value="{{$data->title}}"  name="title" ng-model="contact.name" required="">
                  </div>
                  <div class="col-sm-8">
                    <label><font><font>时间</font></font></label>
                    <input type="text" class="form-control ng-pristine ng-untouched ng-invalid ng-invalid-required" value="{{$data->created}}"  name="created" ng-model="contact.name" required="">
                  </div>
                  <div class="col-sm-8">
                  </div>
                </div>
                                <div class="form-group">
                  <label><font><font>内容</font></font></label>
                  <textarea class="form-control" name="content"  rows="6" style="height:200px">{{$data->content}}</textarea>
                </div>
            </div>





            <footer class="panel-footer text-right bg-light lter">
              <button type="submit" class="btn btn-success"><font><font>提交</font></font></button>
            </footer>
          </div>
        </form>
      </div>

@endsection()