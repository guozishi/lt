@extends('admin.layouts.layout')

@section('content')

<div class="col-sm-12 ">
        <form name="form-contact" action="{{ url('/admin/article/back')  }}"  class="form-validation ng-pristine ng-invalid ng-invalid-required ng-valid-ecmail ng-valid">
      
          <div class="panel panel-default">
            <div class="panel-heading">
              <span class="h4"><font><font>内容详情</font></font></span>
            </div>
              <div class="form-group">
                  <label><font><font></font></font></label>
                  <textarea    class="form-control"  name=""  rows="6" style="height:300px;">{{$data->content}}
               

                  </textarea>
            <footer class="panel-footer text-right bg-light lter">
             <a href="{{ url('/admin/article/back') }}"><button type="submit" class="btn btn-success"> 返回</button></a>
            </footer>
        </form>
      </div>
@endsection()