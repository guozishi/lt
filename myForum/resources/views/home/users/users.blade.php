<!DOCTYPE html>
<html lang="zh-cn">
<meta charset="UTF-8">
<title>兄弟论坛 - 个人中心</title>
<link href="{{ asset('/home-template/users/css/TY.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('/home-template/users/css/main_967e9e5.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('/home-template/users/css/t_18a9db6.css') }}" rel="stylesheet" type="text/css">
<link rel="shortcut icon" href="favicon.ico" type="image/vnd.microsoft.icon">

<link href="{{ asset('/home-template/users/css/home_5cb922b.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('/home-template/users/css/suiji_69c15d0.css') }}" rel="stylesheet" type="text/css">
<script type="text/javascript" charset="utf-8" src="about:blank" async=""></script><link type="text/css" charset="utf-8" rel="stylesheet" href="{{ asset('/home-template/users/css/nav2_0.css') }}"><script type="text/javascript" charset="utf-8" src="about:blank" async=""></script><script src="about:blank" type="text/javascript" charset="gb2312"></script><img src="{{ asset('/home-template/users/img/clickAnalyse.jsp') }}" width="0" height="0"><script type="text/javascript" charset="utf-8" src="about:blank" async=""></script><script type="text/javascript" charset="utf-8" src="about:blank" async=""></script><script type="text/javascript" charset="utf-8" src="about:blank" async=""></script><link type="text/css" rel="stylesheet" href="{{ asset('/home-template/users/css/core.css') }}"><link type="text/css" rel="stylesheet" href="{{ asset('/home-template/users/css/bc_play_ebook_v4.css') }}"></head>
<body><div id="top_nav_test" style="display: none;"></div><div id="top_nav_banner" class="tap_nav_banner_bbs"><div id="top_nav_wrap" style=""><div class="clearfix" id="top_nav"><div class="top-nav-logo"><a _tystat="新版顶导航/Logo" href="http://focus.tianya.cn/"></a></div><div class="top-nav-main clearfix"><div class="top-nav-menu clearfix"><div class="top-nav-fl clearfix"><ul class="top-nav-menu-list clearfix"><li class="top-nav-menu-li top-nav-menu-li-first"><a _tystat="新版顶导航/论坛" _checklocation="1" appstr="bbs" class="top-nav-main-menu" href="http://bbs.tianya.cn/">论坛</a></li><li class="top-nav-menu-li"><a _tystat="新版顶导航/分社区/聚焦" _checklocation="1" appstr="focus" class="top-nav-main-menu" href="http://focus.tianya.cn/">聚焦</a></li><li class="top-nav-menu-li"><a href="http://shang.tianya.cn/" class="top-nav-main-menu" _tystat="新版顶导航/天涯榜" appstr="shang" _checklocation="1">天涯榜</a></li><li class="top-nav-menu-li"><div class="top-nav-fr" id="top_user_menu"><ul class="top-nav-menu-list clearfix"><li class="top-nav-menu-li top-nav-menu-li-first"><a class="top-nav-user-menu with-logo  on" id="top-nav-user-menu" href="#" appstr="mypage" _checklocation="1" _tystat="新版顶导航/用户名"><img class="logo" src="/home-uploads/{{ $img->img }}">{{ session('master')->name }}<i class="top-ico-main-arrow"></i></a><div id="top_nav_set_view" class="more-view"><span id="top_nav_set"></span></li><li class="top-nav-menu-li"><a class="top-nav-user-menu nav-msg" href="http://static.tianya.cn/city/cityJump.html" _tystat="新版底导航/城市">北京</a></li></a></li></ul></div><span class="top-ico-user-msg"></span><em style="display: none;"></em></a></li></ul></div></div></div></div></div></div>
<div id="huebox" class="skin-c119 hue-blue" _head="13" style="background-image: url(&quot;119.jpg&quot;); min-height: 885px;">
	
<div id="doc">
    <div id="hd">
<div class="clearfix header-profile self-profile">
   <div class="img-left">
	        <a href="#" class="user-pic">
	        	<img src="/home-uploads/{{ $img->img }}" alt="" width="130" height="130"></a>
	        
	</div>
    <div class="text-right">
    	<h1 class="cf">
			<a href="#" class="user-name">{{ session('master')->name }}</a>
        </h1>
        <div class="info-bar clearfix">
        	<a href="http://passport.tianya.cn/logout?returnURL=http://www.tianya.cn/132369026&amp;fowardFlag=y" _tystat="退出" class="logout-btn">退出</a>
            <ul class="clearfix">
        		<li class="my-purse">
        		</li>
        		
        		<li>最近登录：2017-09-20 09:51:18</li>
        	</ul>
        </div>
    </div>
</div>
<div class="alpha-bar"></div>
    </div>
    <div id="bd" class="layout-wrapper-lmr clearfix">
        <div class="layout-left">
            <!--<div>左导航列表</div>-->
<div id="left_nav">
	<ul class="clearfix">
		<li class="curr"><a href="#" class="index">个人首页</a></li>
		<li><a href="{{ url('/home/articles/articles') }}" class="post" target="_blank">我的帖子<span class="num"></span></a></li>
		<li><a href="http://bbs.tianya.cn/my_reply_list.jsp" class="reply" target="_blank">我的回帖<span class="num"></span></a></li>
		<li class=""><a href="http://www.tianya.cn/app/album" class="album">我的相册<span class="num"></span></a></li>
		<li><a href="http://groups.tianya.cn/my_group.jsp" class="weilun" target="_blank">所属部落<span class="num"></span></a></li>
		<li class=""><a href="http://www.tianya.cn/t/post" class="weibo">我的随记<span class="num"></span></a></li>
		<li class=""><a href="http://www.tianya.cn/t/medal" class="medal">我的徽章</a></li>
		<li class=""><a href="http://www.tianya.cn/t/book/myBook" class="post">我的书架</a></li>
		<li><a href="http://shop.tianya.cn/my/orders" class="orders" target="_blank">我的订单</a></li>
		<li><a href="http://blog.tianya.cn/blog/blog_mypost.jsp" class="blog" target="_blank">我的博客<span class="num"></span></a></li>
		<li><a href="http://wenda.tianya.cn/user/132369026" class="wenda" target="_blank">我的问答<span class="num"></span></a></li>
	</ul>
	<ul class="clearfix left-nav-link">
		<li><a href="http://ebook.tianya.cn/" class="ebook" target="_blank">天涯文学</a></li>
		<li><a href="http://game.tianya.cn/" class="game" target="_blank">游戏中心</a></li>
		<li><a href="http://zc.tianya.cn/" class="crowdfunding" target="_blank">天涯众筹</a></li>
		<li><a href="http://nong.tianya.cn/" class="nong" target="_blank">涯叔农场</a></li>
		<li><a href="http://licai.tianya.cn/" class="financial" target="_blank">理财超市</a></li>		
	</ul>
</div>
            
<div id="left_2dcode">
	
</div>

      <!--   <form  action="{{ url('/home/users/users') }}"  method="post"> -->
        <!-- <input type="submit" name="提交" /> -->
        <div id="left_feedback">
    <div class="feedback">
        <a title="谈谈新版感受和问题(无需登录)" href="http://bbs.tianya.cn/list.jsp?item=797&amp;sub=2">意见反馈</a>
    </div>
</div>
        </div>
		<form action="{{ url('home/record') }}" method="post">
			{{ csrf_field() }}
        <div class="layout-middle">
            <div id="twitter_area"><div style="width: 550px;" class="suiji-report"><div class="hd"><span class="suiji-icon">写随记</span><span class="arrow"></span></div><div class="bd normal-wrap" style="display: none;"><div class="initText">输入想说的内容...</div></div><div class="edit-wrap"><div class="bd"><div class="sels"><a href="#" class="friend">朋友</a><a href="#" class="image">图片</a></div><div class="title"><textarea name="reco_title" id="suiji_title" class="title-area" init-value="点击设置标题" style="width: 534px; padding: 0px 15px;" bindcursor="true">点击设置标题</textarea><div class="line"></div></div><div class="content"><textarea name="reco_content" id="suiji_text" class="text-area" placeholder="只能输入140个字" style="width: 534px; padding: 0px 15px; overflow-y: scroll; height: 140px;" bindcursor="true"></textarea></div><div class="pics"></div><div class="tags-wrap"><div class="tags-list"><input init-value="输入话题，空格确认" id="tag-ipt" bindcursor="true" type="text"></div><div class="sel-tags"></div></div></div><div class="ft"><input class="cancle" value="取 消" type="button"><input class="submit" value="发 布" type="submit"><span class="num" style="display: none;">500字</span></div></div></div></div>
            <div id="q_banner_550_90" class="ads-loc-holder" data-ads-order="01"><div class="adsame-box" style="position: relative;"><div style="border: medium none;"><iframe style="vertical-align: middle;" scrolling="no" src="index_1.html" width="580" height="90" frameborder="0"></iframe></div></div><img src="132369026.htm" style="width: 0px; height: 0px; border: medium none; display: none;" border="0"></div>
            <div id="suiji_feed"><div class="sj-feed-nav clearfix"><div class="feed-nav-filter"><a class="filter-state"><span class="state-text">网友动态</span><i class="state-icon"></i></a><div class="filter-option" style="display: none;"><a class="option-item selected" data-filter="{&quot;filterTwitter&quot;:1,&quot;filterQing&quot;:1,&quot;filterBbs&quot;:1,&quot;filterBlog&quot;:1}">网友动态</a><a class="option-item" data-filter="{&quot;filterQing&quot;:1}">随记</a><a class="option-item" data-filter="{&quot;filterBbs&quot;:1}">论坛</a><a class="option-item" data-filter="{&quot;filterBlog&quot;:1}">博客</a><a class="option-item" data-filter="{&quot;filterOther&quot;:1}">其他</a></div></div><div class="feed-nav-oper"><a class="oper-interest" title="兴趣订阅">兴趣订阅</a><span class="split-line"></span><a class="oper-refresh" title="刷新"></a></div></div><div class="sj-feed-content"></div><div class="sj-feed-load">没有更多数据了</div></div>
        </div>
		</form>
    
        <div class="layout-right">
            <div class="module-block ads-loc-holder" data-ads-order="02" id="q_rect_250_250_1" style="display: block;"><div class="adsame-box" style="position: relative;"><div style="border: medium none;"><iframe style="vertical-align: middle;" scrolling="no" src="{{ asset('/home-template/users/img/index_4.html') }}" width="250" height="250" frameborder="0"></iframe></div><img src="{{ asset('/home-template/users/img/leftbottom.png') }}" style="width: 29px; height: 16px; position: absolute; left: 0px; bottom: 0px;"></div><img src="{{ asset('/home-template/users/img/132369026.htm') }}" style="width: 0px; height: 0px; border: medium none; display: none;" border="0"></div>
            <div id="right_reg_birthday" regtime="2017-08-31 09:30:11"></div>
            <div id="right_tags" class="module-block">
    <div class="mod-hd clearfix">
    	<h2>可能感兴趣的话题</h2>
    	<a class="more">换一组</a>
    </div>
    <div class="mod-bd">
    	<div class="tags-wrapper">
    		<div class="tag-search">
    			<input class="search-ipt" placeholder="搜索感兴趣的话题" bindcursor="true" type="text">
    			<input class="search-btn" title="搜索" type="button">
    		</div>
    		<div class="tag-list cf" style="display: block;"><a href="http://www.tianya.cn/t/tag/%E5%AE%8B%E4%BB%B2%E5%9F%BA%E5%AE%8B%E6%85%A7%E4%B9%94%E5%A9%9A%E8%AE%AF" class="tag" target="_blank">宋仲基宋慧乔婚讯</a><a href="http://www.tianya.cn/t/tag/%E7%8E%8B%E8%80%85%E8%8D%A3%E8%80%80%E4%B9%B1%E8%B1%A1" class="tag" target="_blank">王者荣耀乱象</a><a href="http://www.tianya.cn/t/tag/%E8%B4%BE%E8%B7%83%E4%BA%AD%E8%B5%84%E4%BA%A7%E8%A2%AB%E5%86%BB%E7%BB%93" class="tag" target="_blank">贾跃亭资产被冻结</a><a href="http://www.tianya.cn/t/tag/%E9%95%BF%E5%BE%81%E4%BA%94%E5%8F%B7%E9%81%A5%E4%BA%8C%E7%81%AB%E7%AE%AD%E5%8F%91%E5%B0%84%E5%A4%B1%E5%88%A9" class="tag" target="_blank">长征五号遥二火箭发射失利</a><a href="http://www.tianya.cn/t/tag/%E5%85%A8%E6%96%B0%E5%8B%92%E7%B4%A2%E7%97%85%E6%AF%92%E7%88%86%E5%8F%91" class="tag" target="_blank">全新勒索病毒爆发</a></div>
    	</div>
    </div>
</div>
        	<div class="module-block ads-loc-holder" data-ads-order="03" id="q_rect_250_250_2" style="display: block;"><div class="adsame-box" style="position: relative;"><div style="border: medium none;"><iframe style="vertical-align: middle;" scrolling="no" src="{{ asset('/home-template/users/img/index_7.html') }}" width="250" height="250" frameborder="0"></iframe></div></div><img src="{{ asset('/home-template/users/img/132369026.htm') }}" style="width: 0px; height: 0px; border: medium none; display: none;" border="0"></div>
        </div>
    </div>
</div>
<div id="foot">
<p><a href="http://help.tianya.cn/about/about.html" rel="nofollow" target="_blank">关于天涯</a> | <a href="http://help.tianya.cn/about/service.html" rel="nofollow" target="_blank">广告服务</a> | <a href="http://service.tianya.cn/" rel="nofollow" target="_blank">天涯客服</a> | <a href="http://help.tianya.cn/about/ystl.html" rel="nofollow" target="_blank">隐私和版权</a> | <a href="http://help.tianya.cn/about/contact.html" rel="nofollow" target="_blank">联系我们</a> | <a href="http://join.tianya.cn/" rel="nofollow" target="_blank">加入天涯</a> | <a href="http://www.tianya.cn/mobile/" rel="nofollow" target="_blank">手机版</a> | <a href="http://service.tianya.cn/jbts.html" rel="nofollow" target="_blank">侵权投诉</a>
</p>
<p class="copyright">© 1999 - 2017 天涯社区</p>
</div>
</div>
</html>