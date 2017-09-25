@extends('admin.layouts.layout')

@section('content')
<div ui-view="" class="ng-scope"><div class="bg-light lter b-b wrapper-md ng-scope">
  <h1 class="m-n font-thin h3"><font><font>评论管理</font></font></h1>
</div>
<div class="wrapper-md ng-scope">
  <div class="panel panel-default">
      
    <div class="panel-heading"><font><font>
      评论管理
    </font></font></div>

  <div class="panel panel-default">

    <form action="{{ url('/admin/comment') }}" method="get">
                 <div class="row wrapper">
              <div class="col-sm-5 m-b-xs">
                <select  name="num" class="input-sm form-control w-sm inline v-middle">
             
                    <option value="5"
                    @if (!empty($request['num']) && $request['num'] == 5)
                      selected="selected" 
                    @endif
                    >5</option>
                    <option value="10"
                    @if (!empty($request['num']) && $request['num'] == 10)
                      selected="selected" 
                    @endif
                    >10</option>
                    <option value="15"
                    @if (!empty($request['num']) && $request['num'] == 15)
                      selected="selected" 
                    @endif
                    >15</option>
                    <option value="20"
                    @if ( !empty($request['num']) && $request['num'] == 20)
                      selected="selected" 
                    @endif
                    >20</option>
                  </select>
                </select>
                           
              </div>
              <div class="col-sm-4">
              </div>
              <div class="col-sm-3">
                <div class="input-group">
                  <input type="text"  name="keywords" class="input-sm form-control" placeholder="输入文章标题">
                  <span class="input-group-btn">
                    <button class="btn btn-sm btn-default" type="submit">搜索</button>
                  </span>
                </div>
              </div>
            </div>
    </form>
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th><font><font>文章作者</font></font></th>
            <th><font><font>文章标题</font></font></th>
            <th><font><font>文章内容</font></font></th>
            <th><font><font>评论内容</font></font></th>
            <th><font><font>回复内容</font></font></th>
            <th><font><font>评论时间</font></font></th>
            <th><font><font>评论操作</font></font></th>
          </tr>
        </thead>
            @foreach($data as $item)
            <tr>
            <td><font><font>{{ $item->comment_id }}</font></font></td>
            <td><font><font>{{ $item->title }}</font></font></td>
            <td data-value="1" class="footable-visible footable-last-column"><span class="label bg-success" ><font><font><a href="{{ url('/admin/comment/insert') }}/{{ $item->comment_id }}" >内容详情</a></font></font></span></td>
            <td data-value="1" class="footable-visible footable-last-column"><span class="label bg-warning" ><font><font><a href="{{ url('/admin/comment/insert1') }}/{{ $item->comment_id }}" >评论内容</a></font></font></span></td>
            <td data-value="1" class="footable-visible footable-last-column"><span class="label bg-warning" ><font><font><a href="{{ url('/admin/comment/insert2') }}/{{ $item->comment_id }}" >回复内容</a></font></font></span></td>
            <!-- <td><font><font>{{ $item->reply }}</font></font></td> -->
            <td><font><font>{{ $item->created }}</font></font></td>
           
        <td data-value="1" class="footable-visible footable-last-column"><span class="label bg-danger" ><font><font><a href="{{ url('/admin/comment/delete') }}/{{ $item->comment_id }}" onclick="return confirm('您要确定删除吗?')">删除</a></font></font></span></td>
           </tr>
           @endforeach
      </table>
    </div>
    <footer class="panel-footer">
      <div class="row">
        <div class="col-sm-4 hidden-xs">
          
        </div>
        <div class="col-sm-4 text-center">
                        
          {!! $data->render() !!}
          </ul>
        </div>
      </div>
    </footer>
  </div>
</div></div></div>


@endsection()