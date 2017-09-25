<!DOCTYPE html>
<html>
<head><script type="text/javascript" async="" src="about:blank"></script><script async="" charset="utf-8" src="about:blank"></script>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>兄弟社区_全球华人网上家园</title>

<meta name="keywords" content="天涯,社区,论坛,博客,部落,城市,相册,空间">
<meta name="description" content="天涯社区提供论坛、部落、博客、问答、文学、相册、个人空间等服务。拥有天涯杂谈、娱乐八卦、情感天地等人气栏目，以及关天茶舍、煮酒论史等高端人文论坛。这里诞生了很多的热门网络事件与草根明星……">
<meta property="qc:admins" content="2725366300611636">
<meta name="chinaz-site-verification" content="52e3aabe-fe8e-42c8-bfd9-be99fe1c0e0d">
<link href="{{ url('/home-template/css/TY.css') }}" type="text/css" rel="stylesheet">
<link href="{{ url('/home-template/css/loginV2_77423d1.css') }}" type="text/css" rel="stylesheet">
<!--[if IE 6]>
    <link href="http://static.tianyaui.com/global/member/web/static/css/ieUpdate_0f3a22e.css" type="text/css" rel="stylesheet">
<![endif]-->
<script language="JavaScript" type="text/javascript">/* Code removed by ScrapBook */</script>
<script type="text/javascript" charset="utf-8" src="about:blank" async=""></script><script src="about:blank" type="text/javascript" charset="gb2312"></script><script type="text/javascript" charset="utf-8" src="about:blank" async=""></script></head>
<body>
<div class="ads-loc-holder" data-ads-order="04"></div>

<div class="wrap">
    <div id="top_banner">
	   <div class="online-info">
		<div id="top_nav_wrap_login" style="">
         <div class="clearfix" id="top_nav_login">
            <div class="top-nav-logo"><a _tystat="新版顶导航/Logo" ><img src="{{ url('/home-template/img/top-login-logo_87e1fb9.png') }}" /></a></div>
            <div class="ty-info"><img src="{{ url('/home-template/img/login-word_a27ca1b.png') }}" /></div>
            <div class="clearfix">
                <div class="welcome fr">来兄弟，与<b id="spanCounter">132547047</b>位兄弟共同演绎你的网络人生</div>
            </div>
        </div>
    </div>
		</div>
		
	</div>
	
	<div class="bd" id="middle">
	    <div class="middle-content clearfix">
		<!--AD 开始中央广告位-->
			<!--adbox是广告的box-->
			<div id="adsp_center_banner" class="adbox ads-loc-holder" style="display: block;" data-ads-order="01"><div class="adsame-box" style="position: relative;"><a href="http://dol.tianya.cn/c?z=tianya&amp;la=0&amp;si=382&amp;cg=617&amp;c=3111301&amp;ci=1041&amp;or=1677&amp;l=22788&amp;bg=22788&amp;b=23112&amp;u=http%3A%2F%2Ftravel.tianya.cn%2Fs%2Fguizhou%2Findex.shtml" target="_blank"><img src="{{ url('/home-template/img/0_17.jpg') }}" style="vertical-align: middle;" data-baiduimageplus-ignore="" width="560" border="0" height="410"></a><img src="{{ url('/home-template/img/leftbottom.png') }}" style="width: 29px; height: 16px; position: absolute; left: 50%; bottom: 65px; margin-left: -14px;"></div><img src="htm.dat" style="width: 0px; height: 0px; border: medium none; display: none;" border="0"></div>
		<!--结束中央广告位-->
		<!--登录框 begin-->
		  <div class="area">
		    <div class="login-area" id="login_area"><div class="TY-login-window" id="TY_login_window_1504615577480"><div class="login-window-body"><div id="loginWin_content_wrapper" class="loginWin-normal-login-wrapper">	
		    	  
		 <div style="font-size:40px;font-weight:bold;font-family: '楷体';text-align:center;">登录</div><div class="loginWin-form">
		    <form class="loginWin-login-form" id="topguideloginform" name="topguideloginform" method="post" action="{{ url('/home/index') }}" accept-charset="UTF-8" target="_top"><div class="loginWin-form-item loginWin-account-input">
						
			
			
            @if (count($errors) > 0)
                                    <div class="alert alert-danger" id="error">
                                        <ul>
                                            @foreach ($errors->all() as $error)&nbsp;&nbsp;
                                                 {{ $error }}
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

              <!-- 错误提示信息 -->
                              @if (session('info.error'))
                                  <div class="alert alert-danger alert-dismissible" id="alertError">
                                  <h4><i class="icon fa fa-ban"></i>错误!</h4>
                                 {{ session('info.error') }}
                                  </div>
                              @endif
                            <!-- 错误提示信息 -->

                            <!-- 正确提示信息 -->
                            @if (session('info.success'))
                                <div class="alert alert-success alert-dismissible" id = "alertSuccess">
                                  <h4><i class="icon fa fa-check"></i> 成功!</h4>
                                      {{ session('info.success') }}
                                </div>
                            @endif
                             <!-- 正确提示信息 -->
			
			{{ csrf_field() }}
				
		    <input class="input-text" id="vwriter" name="name" placeholder="请输入用户名" autocomplete="off" type="text"></div><div class="loginWin-form-item loginWin-password-input"><input class="input-text" id="vpassword" name="password" placeholder="请输入密码" type="password"></div><div class="loginWin-form-item fs12 cf"><label class="fl"></label><a class="loginWin-password-link fr" href="http://passport.tianya.cn/fp/fp.jsp" target="_blank">忘记密码？</a></div><div class="loginWin-form-item"><button type="submit" class="loginWin-submit-btn">登 录</button></div><div class="fs12 cf"><a class="loginWin-register-link fr" href="{{ url('home/register') }}" target="_blank">立即注册</a></div></form>
				
		    <dl class="loginWin-third-list cf"><dt><div class="loginWin-qrcode"><div class="loginWin-qrcode-box"><img class="loginWin-qrcode-img" src="htm.dat"><div class="loginWin-qrcode-tips"></div></div></p></div></div></div></div></div>
            <div class="onLine-num">
                 <span class="fl online"> 当前在线：<em id="spanOnLine">885419</em></span>
                 <span class="fr"><a href="{{ url('home/index') }}" class="u_line">浏览进入&gt;&gt;</a></span>
            </div>
		  </div>
		<!--登录框 end-->
	    </div>

	</div>
	<div class="ft">
		<div class="tianya-footer">
			<ul class="clearfix">
				<li><a target="_blank" href="http://help.tianya.cn/about/about.html">关于天涯</a></li>
				<li><a target="_blank" href="http://help.tianya.cn/about/service.html">广告服务</a></li>
				<!--<li><a target="_blank" href="http://open.tianya.cn">开放平台</a></li>-->
				<li><a target="_blank" href="http://service.tianya.cn/">天涯客服</a></li>
				<li><a target="_blank" href="http://help.tianya.cn/about/ystl.html">隐私和版权</a></li>
				<li><a target="_blank" href="http://help.tianya.cn/about/contact.html">联系我们</a></li>
				<li><a target="_blank" href="http://join.tianya.cn/">加入天涯</a></li>
				<li style="width: 100px; border-right: 0px none;"><a style="color: rgb(210, 107, 110);" target="_blank" href="http://bbs.tianya.cn/post-complaint-158142-1.shtml">儿童不良信息举报</a></li>
				<li class="footend"><a>© 1999 - <script type="text/javascript">/* Code removed by ScrapBook */</script>2017 天涯社区版权所有</a></li>
			</ul>
		
		</div>
		
			<a target="_blank" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=46010602000002" class="gab"></a>
			<a target="_blank" href="http://www.wenming.cn/" class="wm"></a>
			<a class="gs" href="http://service.tianya.cn/alarm/jbts.do" target="_blank"></a>
			<a target="_blank" href="https://ss.knet.cn/verifyseal.dll?sn=e13062611010041408duli000000&amp;comefrom=verify&amp;trustKey=dn&amp;trustValue=www.tianya.cn" class="kx"></a>
			<a target="_blank" href="http://service.tianya.cn/alarm/jbts.do" class="jb"></a>
			<a target="_blank" href="http://www.12377.cn/" class="bl"></a>
			<a target="_blank" href="http://report.12377.cn:13225/toreportinputNormal_anis.do" class="bl2"></a>
			<a target="_blank" href="http://www.12377.cn/node_548446.htm" class="xz"></a>
			<a target="_blank" href="http://jubao.12377.cn:13225/reportform.do" class="bk"></a>

			
			
		</div>
		<div class="footer-pic-link-gov clearfix">
			
		</div>
	</div>
</div>
<div class="ads-loc-holder" data-ads-order="02"><!--对联广告--></div>
<div class="ads-loc-holder" data-ads-order="03"><!--对联广告--></div>
<div class="ads-loc-holder" data-ads-order="99"><!--性能--></div>
<script type="text/javascript" charset="utf-8" src="about:blank"></script>



<script type="text/javascript">/* Code removed by ScrapBook */</script>
<script language="JavaScript" type="text/javascript" charset="UTF-8" src="about:blank"></script>
<script language="javascript" type="text/javascript" charset="UTF-8" src="about:blank"></script>
   <!-- Start Alexa Certify Javascript -->
<script type="text/javascript">/* Code removed by ScrapBook */</script>
<noscript><img src="https://d5nxst8fruw4z.cloudfront.net/atrk.gif?account=WCmTk1a4eFf2mh" style="display:none" height="1" width="1" alt="" /></noscript>
<!-- End Alexa Certify Javascript --> 

</body>
</html>
