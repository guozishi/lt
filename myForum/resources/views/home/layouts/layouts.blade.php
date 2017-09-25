<!DOCTYPE html>
<head>
<meta charset="UTF-8">
<title>兄弟社区 - 全球华人最具影响力的言论及媒体平台</title>
<script src="{{ url('/assets/js/hm.js') }}"></script><script type="text/javascript" async="" charset="utf-8" src="{{  url('/assets/js/core.php') }}"></script><script type="text/javascript" async="" src="{{ url('/assets/js/atrk.js') }}"></script>
<link rel="stylesheet" href="{{ url('/assets/css/common.43b90947.css') }}"><link rel="stylesheet" type="text/css" href="{{ url('/assets/css/jquery.webui-popover.ace6c896.css') }}"><link rel="stylesheet" type="text/css" href="{{ url('/assets/css/bbs.8d80e54e.css') }}"><link rel="stylesheet" type="text/css" href="{{ url('/assets/css/bbsWidget.dd4ea4b8.css') }}"><script type="text/javascript" async="" id="ac_js86_$4881118850" src="{{ url('/assets/js/r.js') }}"></script><script type="text/javascript" async="" id="ac_js86_$1274629042" src="{{ url('/assets/js/r.js') }}"></script><script type="text/javascript" async="" id="ac_js86_$5515966664" src="{{ url('/assets/js/r.js') }}"></script></head>
<div class="bbsheader">
<div class="bbsCont">
<ul class="topnav">
    <li><a href="{{ '/home/index' }}">首页</a></li>
    @foreach($web as $title)
<li><a href="{{ $title->web_url }}">{{ $title->web_title }}</a></li>
        @endforeach
</ul>
<div class="rightnav">
<div class="search-box">
<form class="search-form" action="" target="_blank">
<input class="form-control" placeholder="" value="" name="q" type="text">
<button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
</form>
</div>
<div class="login-box">
    @if(!empty('master'))
<a id="reg" href="{{ url('/home/users') }}"><img src="/home-uploads/{{ $img->img }}" width="25px;"></a>
<a id="login" href="{{ url('/home/users') }}">{{ session('master')->name }}</a>
        @endif
</div>
</div>
</div>
</div>
<div class="bbsindex">
<div class="bbsnav">
<div class="bbsCont">
<div class="bbs-logo">
<a href="#"><img src="bbs_logo.9d4c4827.png"></a>
</div>
<ul>
<li><a target="_blank" href="">今日热帖</a></li>
<li><a href="">原创帖文</a></li>
<li><a href="">精华帖文</a></li>
<li><a href="">猫眼观察</a></li>
<li><a target="_blank" href="">猫论天下</a></li>
</ul>
<div class="bbsdata">
<i></i>
注册用户<span class="text-info">14299288</span>人，目前在线<span class="text-warning">121375</span>人</div>
</div>
</div><div class="bbsCont">
<div class="bbsLeft">
<div class="c_spread">

<script type="text/javascript" src="{{ url('/assets/js/k.js')   }}"></script><script type="text/javascript" src="{{ url('/assets/js/ex.js') }}" id="ac_js86_$5441879465"></script>
</div>

@yield('content')

<div class="bbsfooter">
<div class="bbsCont">
<p class="state">
本站律师声明：本站互动区域原创内容版权属作者和本站共同所有。<br>
网络非盈利转载须注明作者姓名和文章的来源出处，其他媒体利用除注明作者姓名和文章的来源出处外还须按规定付酬。侵权必究。<br>
法律顾问：广信君达律师事务所 田晓刚 田晓刚律师</p>
<div class="copyright">
Copyright ©2017<a target="_blank" href="">kdnet.net</a>corporation.<i>All Rights Reserved</i>
<p class="copy-link">
<a target="_blank" href="">关于凯迪</a>|<a target="_blank" href="">联系我们</a>|<a target="_blank" href="">广告服务</a>|<a target="_blank" href="">法律声明</a>|<a target="_blank" href="">加入凯迪</a>
</p>
</div>
<script src="{{ url('/assets/js/k.js') }}"></script><script type="text/javascript" src="{{ url('/assets/js/ex_002.js') }}" id="ac_js86_$2548795375"></script>
<script type="text/javascript" charset="utf-8" id="vm_13045134_1509107661" class="vamaker" src="{{ url('assets/js/vamaker.js') }}"></script><script type="text/javascript" src="{{ url('/assets/js/e.js') }}"></script><script type="text/javascript" src="{{ url('/assets/js/e.js') }}"></script><script type="text/javascript" src="{{ url('/assets/js/e.js') }}"></script><script type="text/javascript" src="{{ url('/assets/js/e.js') }}"></script><script type="text/javascript" src="{{ url('/assets/js/e.js') }}"></script>
<script type="text/javascript" src="{{ url('/assets/js/common.7392a1ba.js') }}"></script>
<script type="text/javascript" src="{{ url('/assets/js/log.js') }}"></script>
<script type="text/javascript" src="{{ url('/assets/js/bbs.1fadd174.js') }}"></script>
<script type="text/javascript" src="{{ url('/assets/js/bbsindex.dd163fe6.js') }}"></script>
</body><script src="log.php"></script>
</html>
