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