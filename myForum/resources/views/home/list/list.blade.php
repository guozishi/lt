@extends('home.layouts.layouts')

@section('content')

<div class="hotplate">
<div class="title">热门版块</div>
<ul>
<li><a href=""><img src=""><span>猫眼看人</span></a></li>
<li><a href=""><img src=""><span>经济风云</span></a></li>
<li><a href=""><img src=""><span>原创评论</span></a></li>
<li><a href=""><img src=""><span>文化散论</span></a></li>
<li><a href=""><img src=""><span>以案说法</span></a></li>
<li><a href=""><img src=""><span>网络剧场</span></a></li>
<li><a href=""><img src=""><span>影视评论</span></a></li>
<li><a href=""><img src=""><span>娱乐八卦</span></a></li>
<li><a href=""><img src=""><span>吃喝玩乐</span></a></li>
<li><a href=""><img src=""><span>原创文学</span></a></li>
<li><a href=""><img src=""><span>会员阅读</span></a></li>
<li><a href=""><img src=""><span>站务专区</span></a></li>
<li><a href=""><img src=""><span>北京</span></a></li>
<li><a href=""><img src=""><span>珠三角</span></a></li>
<li><a href=""><img src=""><span>长三角</span></a></li>
<li><a href=""><img src=""><span>海南</span></a></li>
<li class="marRnone"><a target="_blank" href="" class="">更多</a></li>
</ul>
<div class="moreplate">
<div>
</div>
<div>
</div>
<div>
</div>
</div>
</div>
<div class="bbslist">
<div class="title">
<a href="" class="active">原创帖文</a>
<a href="">猫眼观察</a>
</div>

@foreach($art as $item)
<li>
<a target="_blank" href=""><img src=""></a>
<div class="list-title"><a target="_blank" href="{{ url('home/detail/') }}/{{ $item->article_id }}">{{ $item['title'] }}</a></div>
<div class="list-desc"><a target="_blank" href="{{ url('home/detail/') }}/{{ $item->article_id }}">{{ $item['content'] }}</a></div>
<div class="list-author">

<a target="_blank" href="{{ url('/home/index/cate') }}">{{ $item['user_name'] }}</a>
<span>{{  $item['created'] }}</span>

<span>点击<a target="_blank" href="">23996</a></span><span>回复<a target="_blank" href="">44</a></span><a href="" class="plate">来自：{{ $item['user_name'] }}</a>
</div>
</li>
@endforeach()
{!! $data->render() !!}
<div class="postlist-page">
<form class="c_pager">
{{--{!! $data->render() !!}--}}
</form>
</div>
</div>
<div class="c_spread">
<script type="text/javascript">
                ac_as_id = "";
                ac_format = 1;
                ac_mode = 1;
                ac_group_id = 1;
                ac_server_base_url = "";
                </script>

</div>
</div>
<div class="bbsRight">
<div class="link-group">

</div><div id="myCarousel" class="excellent carousel slide">
<div class="title">
优秀作者<div class="tab">
<span class="num"><i>3</i>/3</span>
<span class="btn-group">
<button class="btn btn-default carousel-control left" href="" data-slide="prev"><i class="fa fa-angle-left"></i></button>
<button class="btn btn-default carousel-control right" href="" data-slide="next"><i class="fa fa-angle-right"></i></button>
</span>
</div>
</div>
<div class="carousel-inner">
<div class="item" data-slide="1">
<ul>
<li>

</li>
</ul>
</div>
<div class="item active" data-slide="3">
<ul>
<li>
<div class="avatar a-w40"><a target="_blank" href=""><img src="" onerror="''"></a></div>
<div class="area">
    @foreach($art as $item)
<h5><a target="_blank" href="">{{ $item['user_name'] }}</a></h5>
<h6><a target="_blank" href="">{{ $item['title'] }}</a></h6>
        @endforeach
        
</div>
</li>
</ul>
</div>
</div>
<div class="c_spread">
</span><ins id="ac_js86_mm_34021018_13540158_78530481" style="display: none;"></ins><script type="text/javascript" src="{{  url('/assets/js/k.js') }}"></script><script></script><script type="text/javascript" src="{{ url('/assets/js/ex_004.js') }}" id="ac_js86_$1447165625"></script>
</div>
<div class="sellgroup">
<div class="title">推荐群组</div>
<input id="groupcid" value="100141,100364,100365,100230" type="hidden">
<ul><li><div class="avatar a-w50 br4"><a target="_blank" href=""><img src="58c635893d5043285.jpg"></a></div><h5><a target="_blank" href="">业余中医爱好者</a></h5><h6><span><a target="_blank" href="">文章：34</a></span><span><a target="_blank" href="">成员：50</a></span></h6></li><li><div class="avatar a-w50 br4"><a target="_blank" href=""><img src="100364.jpg"></a></div><h5><a target="_blank" href="">海南新鲜事</a></h5><h6><span><a target="_blank" href="">文章：11</a></span><span><a target="_blank" href="">成员：2</a></span></h6></li><li><div class="avatar a-w50 br4"><a target="_blank" href=""><img src="noavatar_group_200.png"></a></div><h5><a target="_blank" href="">明清巨变</a></h5><h6><span><a target="_blank" href="">文章：181</a></span><span><a target="_blank" href="">成员：7</a></span></h6></li><li><div class="avatar a-w50 br4"><a target="_blank" href=""><img src="100230.jpg"></a></div><h5><a target="_blank" href="h">毛毛虫是条狗</a></h5><h6><span><a target="_blank" href="">文章：149</a></span><span><a target="_blank" href="">成员：29</a></span></h6></li></ul>
</div>
</a>
</div>
</div>
</div>
@endsection()