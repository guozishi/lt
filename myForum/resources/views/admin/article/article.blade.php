@extends('admin.layouts.layout')

@section('content')

<div ui-view="" class="ng-scope"><div class="bg-light lter b-b wrapper-md ng-scope">
  <h1 class="m-n font-thin h3"><font><font>帖子管理</font></font></h1>
</div>
<div class="wrapper-md ng-scope">
  <div class="panel panel-default">
          @if (session('info'))
              <div  id="ale" class="alert alert-success alert-dismissible" id = "alertSuccess">
               <h4><i class="icon fa fa-check"></i> 成功!</h4>
                 {{ session('info') }}
                  </div>
               @endif

    <div class="panel-heading"><font><font>
      帖子管理
    </font></font></div>

      <form action="{{ url('/admin/article') }}" method="get">
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
                  <input type="text"  name="keywords" class="input-sm form-control" placeholder="请输入作者名">
                  <span class="input-group-btn">
                    <button class="btn btn-sm btn-default" type="submit">搜索</button>
                  </span>
                </div>
              </div>
            </div>
    </form>

    <div>
      <table class="table m-b-none default footable-loaded footable" ui-jq="footable" data-filter="#filter" data-page-size="5">
        <thead>
          <tr>
              <th data-toggle="true" class="footable-visible footable-first-column footable-sortable"><font><font>
                  作者
              </font></font><span class="footable-sort-indicator"></span></th>
              <th class="footable-visible footable-sortable"><font><font>
               标题
              </font></font><span class="footable-sort-indicator"></span></th>
              <th data-hide="phone,tablet" class="footable-visible footable-sortable"><font><font>
                  时间
              </font></font><span class="footable-sort-indicator"></span></th>
              <th data-hide="phone,tablet" data-name="Date Of Birth" class="footable-visible footable-sortable"><font><font>
                  内容详情
              </font></font><span class="footable-sort-indicator"></span></th>
              <th data-hide="phone" class="footable-visible footable-last-column footable-sortable"><font><font>
                  编辑文本
              </font></font><span class="footable-sort-indicator"></span></th>
              <th data-hide="phone" class="footable-visible footable-last-column footable-sortable"><font><font>
                  操作
              </font></font><span class="footable-sort-indicator"></span></th>
          </tr>

        </thead>
          <tbody>
             @if (session('info.error'))
                                  <div class="alert alert-danger alert-dismissible" id="alertError">
                                  <h4><i class="icon fa fa-ban"></i>错误!</h4>
                                 {{ session('info.error') }}
                                  </div>
                              @endif
    

        @foreach($data as $item)
          <tr class="footable-even" style="display: table-row;">
              <td class="footable-visible footable-first-column"><span class="footable-toggle"></span><font><font>{{ $item->article_id }}</font></font></td>
              <td class="footable-visible"><a href=""><font><font>{{ $item->title }}</font></font></a></td>
              <!-- <td class="footable-visible">{{ $item->content }}<font><font></font></font></td> -->
              <td data-value="78025368997" class="footable-visible"><font><font>{{ $item->created }}</font></font></td>

              <td data-value="1" class="footable-visible footable-last-column"><span class="label bg-success" ><font><font><a href="{{ url('/admin/article/insert') }}/{{ $item->article_id }}" >内容详情</a></font></font></span></td>
                

              <td data-value="1" class="footable-visible footable-last-column"><span class="label bg-warning" ><font><font><a href="{{ url('/admin/article/edit') }}/{{ $item->article_id }}" >编辑</a></font></font></span></td>
                <td data-value="1" class="footable-visible footable-last-column"><span class="label bg-danger" ><font><font><a href="{{ url('/admin/article/delete') }}/{{ $item->article_id }}" onclick="return confirm('您要确定删除吗?')">删除</a></font></font></span></td>

          </tr>
   		@endforeach()
        </tbody>

      </table>
      &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; {!! $data->render() !!}
    </div>

  </div>

</div></div>


@endsection()

