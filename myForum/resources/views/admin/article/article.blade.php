@extends('admin.layouts.layout')

@section('content')

    <div ui-view="" class="ng-scope"><div class="bg-light lter b-b wrapper-md ng-scope">
            <h1 class="m-n font-thin h3"><font><font>帖子管理</font></font></h1>
        </div>
        <div class="wrapper-md ng-scope">
            <div class="panel panel-default">
                <div class="panel-heading"><font><font>
                            帖子管理
                        </font></font></div>
                <div class="panel-body b-b b-light"><font><font>
                            搜索： </font></font><input id="filter" type="text" class="form-control input-sm w-sm inline m-r">
                </div>
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
                                        内容
                                    </font></font><span class="footable-sort-indicator"></span></th>
                            <th data-hide="phone,tablet" data-name="Date Of Birth" class="footable-visible footable-sortable"><font><font>
                                        时间
                                    </font></font><span class="footable-sort-indicator"></span></th>
                            <th data-hide="phone" class="footable-visible footable-last-column footable-sortable"><font><font>
                                        操作
                                    </font></font><span class="footable-sort-indicator"></span></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $item)
                            <tr class="footable-even" style="display: table-row;">
                                <td class="footable-visible footable-first-column"><span class="footable-toggle"></span><font><font>{{ $item->id }}</font></font></td>
                                <td class="footable-visible"><a href=""><font><font>{{ $item->title }}</font></font></a></td>
                                <td class="footable-visible"><font><font>{{ $item->content }}</font></font></td>
                                <td data-value="78025368997" class="footable-visible"><font><font>{{ $item->created }}</font></font></td>
                                <td data-value="1" class="footable-visible footable-last-column"><span class="label bg-success" ><font><font><a href="{{ url('/admin/article/delete') }}/{{ $item->id }}">删除</a></font></font></span></td>
                            </tr>
                        @endforeach()
                        </tbody>
                        <!--   <tfoot class="hide-if-no-paging">
                            <tr>
                                <td colspan="5" class="text-center footable-visible">
                                    <ul class="pagination"><li class="footable-page-arrow disabled"><a data-page="first" href="#first"><font><font>«</font></font></a></li><li class="footable-page-arrow disabled"><a data-page="prev" href="#prev"><font><font>&lt;</font></font></a></li><li class="footable-page active"><a data-page="0" href="#"><font><font>1</font></font></a></li><li class="footable-page"><a data-page="1" href="#"><font><font>2</font></font></a></li><li class="footable-page-arrow"><a data-page="next" href="#next"><font><font>&gt;</font></font></a></li><li class="footable-page-arrow"><a data-page="last" href="#last"><font><font>»</font></font></a></li></ul>
                                </td>
                            </tr>
                          </tfoot> -->
                    </table>
                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; {!! $data->render() !!}
                </div>

            </div>

        </div></div>

@endsection()
