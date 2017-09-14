@extends('admin.layouts.layout')


@section('content')
<div class="bg-light lter b-b wrapper-md">
  <h1 class="m-n font-thin h3">{{ $title }}</h1>
</div>
<div class="wrapper-md" ng-controller="FormDemoCtrl">
  <div class="row">
    <div class="col-sm-12">



  <div class="panel panel-default">
    <div class="panel-heading font-bold">
     {{ $title }}
    </div>
    <div class="panel-body">
      @if (count($errors) > 0)
        <div class="alert alert-danger" id="error">
          <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif
      <form class="form-horizontal" method="post" action="{{ '/admin/category' }}">
        {{ csrf_field() }}
        <div class="form-group">
          <label class="col-sm-2 control-label">请选择父级分类:</label>
          <div class="col-sm-10">
            <select name="cate_pid" class="form-control m-b" style="width:270px;">
              <option value="0">==父分类==</option>
              @foreach($cates as $item)
              <option value="{{ $item->cate_id }}">{{ $item->cate_names }}</option>
                @endforeach
            </select>
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-2 control-label">排序:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control rounded" name="cate_orderby" style="width: 270px;" value="{{ old('cate_orderby') }}">
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label">填写分类名:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control rounded" name="cate_name" style="width: 270px;" value="{{ old('cate_name') }}">
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label">填写分类标题:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control rounded" name="cate_title" style="width: 270px;" value="{{ old('cate_title') }}">
          </div>
        </div><br/>
        <div style="width: 800px; margin-left: 100px;">
        <div class="form-group">
          <label>关键字:</label>
          <textarea class="form-control" rows="6" placeholder="请输入关键字..." name="cate_keywords">{{ old('cate_keywords') }}</textarea>
        </div>
        <div class="form-group">
          <label>描述:</label>
          <textarea class="form-control" rows="6" placeholder="请输入描述..." name="cate_desc">{{ old('cate_desc') }}</textarea>
        </div>


          {{--<script type="text/javascript" charset="utf-8" src="{{ asset('/ueditor/ueditor.config.js') }}"></script>--}}
          {{--<script type="text/javascript" charset="utf-8" src="{{ asset('/ueditor/ueditor.all.min.js') }}"> </script>--}}
          {{--<script type="text/javascript" charset="utf-8" src="{{ asset('/ueditor/lang/zh-cn/zh-cn.js') }}"></script>--}}
          {{--<script id="editor" type="text/plain" style="width:850px;height:300px;"></script>--}}
            {{--<script>--}}
                {{--var ue = UE.getEditor('editor');--}}
            {{--</script>--}}

        </div>
        <div class="line line-dashed b-b line-lg pull-in"></div>
        <div class="form-group">
          <div class="col-sm-4 col-sm-offset-2">
            <button type="submit" class="btn btn-default">取消</button>
            <button type="submit" class="btn btn-primary">确认</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
  @endsection

@section('script')
      <script>

          $("#error").fadeOut(3000);
      </script>



@endsection

@section('content')

<div class="bg-light lter b-b wrapper-md">
  <h1 class="m-n font-thin h3">分类管理</h1>
</div>
<div class="wrapper-md">
  <div class="panel panel-default">
    <div class="panel-heading">
      响应表
    </div>
    <div class="row wrapper">
      <div class="col-sm-5 m-b-xs">
        <select class="input-sm form-control w-sm inline v-middle">
          <option value="0">10</option>
          <option value="1">20</option>
          <option value="2">30</option>
          <option value="3">40</option>
          <option value="3">50</option>
        </select>
        <button class="btn btn-sm btn-default">申请</button>                
      </div>
      <div class="col-sm-4">
      </div>
      <div class="col-sm-3">
        <div class="input-group">
          <input type="text" class="input-sm form-control" placeholder="请输入内容">
          <span class="input-group-btn">
            <button class="btn btn-sm btn-default" type="button">搜索!</button>
          </span>
        </div>
      </div>
    </div>
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th style="width:20px;">
              <label class="i-checks m-b-none">
                <input type="checkbox"><i></i>
              </label>
            </th>
            <th>ID</th>
            <th>分类名</th>
            <th>操作</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
            <td>Videodown</td>
            <td>4c</td>
            <td>Jul 1, 2013</td>
            <td>
              <a href class="active" ui-toggle-class><i class="fa fa-check text-success text-active"></i><i class="fa fa-times text-danger text"></i></a>
            </td>
          </tr>
                    <tr>
            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
            <td>Formasa</td>
            <td>8c</td>
            <td>Jul 22, 2013</td>
            <td>
              <a href ui-toggle-class><i class="fa fa-check text-success text-active"></i><i class="fa fa-times text-danger text"></i></a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <footer class="panel-footer">
      <div class="row"> 
        <div class="col-sm-4 text-right text-center-xs">                
          <ul class="pagination pagination-sm m-t-none m-b-none">
            <li><a href><i class="fa fa-chevron-left"></i></a></li>
            <li><a href>1</a></li>
            <li><a href>2</a></li>
            <li><a href>3</a></li>
            <li><a href>4</a></li>
            <li><a href>5</a></li>
            <li><a href><i class="fa fa-chevron-right"></i></a></li>
          </ul>
        </div>
      </div>
    </footer>
  </div>
</div>

@endsection()


