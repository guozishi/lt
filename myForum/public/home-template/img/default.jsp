










<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>天涯社区账号_注册</title>
	<meta name="description" content="天涯社区，全球华人的网上家园。" />
	<meta name="keywords" content="天涯社区，帐号，账号，注册，登录，忘记密码，找回密码，Account，Sign in，登陆，二维码登录，下次自动登录，" />
	<link rel="icon" type="image/x-icon" href="/favicon.ico" />
	<link rel="stylesheet" type="text/css" href="https://static.tianyaui.com/global/ty/TY.css" />
	<link rel="stylesheet" type="text/css" href="https://static.tianyaui.com/global/member/web/static/css/register_7f0dd5c.css" />
	<script type="text/javascript" charset="utf-8" src="/loginapi/countryTel.do?var=countryCodes"></script>
</head>

<body>
	<div id="container">
		<div class="header clearfix">
            <h1 class="logo"></h1>
            <h2 class="logo-des"></h2>
		</div>
		<div class="content-login">
			<div class="l-line"> </div>
			<div class="r-line"> </div>
			<div class="tab-navs">
				<div class="navs-slider">
					
					<a href="javaScript:void(0);" id="regist" class="active">注册</a>
					<a href="javaScript:void(0);" id="sign" class="">登录</a>
					<span class="nav-slider-bar"></span>
					
					
				</div>
			</div>
			<div class="content clearfix">
			 <div class="form-wrapper" id="sign_up">
				<form id="vForm" name="vForm" action="/register/account.do" method="post">
				<input type="hidden" name="forwardUrl" value="" />
				<input type="hidden" name="sourceURL" value="http://www.tianya.cn/132371474" />
				<input type="hidden" name="preSourceURL" value="" />
				<input type="hidden" name="_sid" id="__sid" value="0#1#1.0#51fd5951-95c8-4160-922f-c283ade784fb" />
					<div class="form-item">
						<label class="form-label" for="userName">用户名:</label>
						<div class="form-field">
							<input type="text" placeholder="请输入用户名" class="form-text" name="userName" id="userName" value="" />
							<span id="userName_tips" class="form-tips tips-des">长度不超过8个中文，注册成功后不可修改。</span>
							<!-- <span id="userName_tips" class="form-tips tips-error">该用户名已被使用，请使用其他用户名注册</span> -->
						</div>
					</div>
					<div class="form-item">
                    	<label class="form-label" for="password">密码:</label>
                    	<div class="form-field">
                    		<input type="password" placeholder="请输入密码" class="form-text" name="password" id="password" />
                    		<span id="password_tips" class="form-tips tips-des">至少包含字母和数字，最短6位字符，区分大小写。</span>
                    	</div>
                    </div>
                    <div class="form-item">
						<label class="form-label" for="mobile">手机号:</label>
						<div class="form-field">
							<div class="mobile-text">
								<select class="form-select" name="area" id="area"></select>
								<input type="text" class="form-text" name="mobile" id="mobile" value="" />
								<input type="hidden" name="countryCode" id="area_code" value="" />
								<input type="hidden" name="token" id="token" value="" />
							</div>
							<span id="mobile_tips" class="form-tips tips-des">一个手机30天内只能认证一个账号。</span>
						</div>
					</div>
					<div id="mobile_vcode_item" class="form-item">
						<label class="form-label" for="mobileVcode">短信验证码:</label>
						<div class="form-field">
							<div class="mobile-vcode-text">
								<input type="text" class="form-text" name="smsCode" id="mobileVcode" value="" />
								<a id="get_mobile_vcode" class="get-mobile-vcode" href="javascript:void(0);">获取验证码<!-- 重新发送(60) --></a>
							</div>
							<span id="mobileVcode_tips" class="form-tips tips-des">请填写验证码。</span>
						</div>
					</div>
					
                    <div class="form-item" id="guize">
                    	<div class="form-field">
                        	<label>
                        		<input type="checkbox" checked="checked" value="1" class="form-checkbox" name="agree" id="agree" />
                        		<span>我已经阅读并同意<a target="_blank" href="http://service.tianya.cn/guize/regist.do">《天涯社区用户注册协议》</a></span>
                        	</label>
                        </div>
                    </div>
                    <div class="form-action">
                    	<button type="button" id="register_btn" class="register-btn btn btn-blue">立即注册</button>
                    </div>
				</form>
			 </div>
             <div class="form-wrapper" id="sign_in" _type="login" style="display:none;">
             		<form method="post" target="_top" accept-charset="UTF-8" action="/login" id="loginform" name="loginform">
             		<input type="hidden" name="fowardURL" value='' />
					<input type="hidden" name="from" value='' />
					<input type="hidden" name="__sid" id="__sid" value="1#1#1.0#e6274478-4807-4f86-96ad-99bcfbc3849d" />
             			<div class="login-form-item">
             				<div class="form-field">
             					<span class="user-ico"></span> 
             					<input type="text" class="form-text" id="vwriter" name="vwriter" placeholder=" 请输入用户名/手机/邮箱" tabindex="1" value="" />
             				</div>
             			</div>
             			<div class="login-form-item">
             				<div class="form-field">
             					<span class="password-ico"></span> 
             					<input type="password" class="form-text" id="vpassword" name="vpassword" placeholder=" 请输入密码" tabindex="2" />
             				</div>
             			</div>
             			
             			<div class="login-form-item">
             				<div class="form-item-field">
             					<label><input type="checkbox" class="input-checkbox" id="rmflag" name="rmflag" value="1" checked="checked"><span>下次自动登录</span>
             						<a class="jump-passport" href="http://passport.tianya.cn/fp/fp.jsp" target="_blank" tabindex="4">忘记密码</a>
             					</label>

             				</div>
            			</div>
             			<div class="form-login-action">
             				<button id="loginBtn" class="submit-btn" title="登录" type="submit">登录</button>
             			</div>
             		</form>
             		<div class="other-login">社交帐号登录：
             			<a title="微信账号登录" href="https://open.weixin.qq.com/connect/qrconnect?appid=wx160fa51254add6be&redirect_uri=https%3A%2F%2Fpassport.tianya.cn%2Flogin%2Fweixin.do&response_type=code&scope=snsapi_login#wechat_redirect" class="wxlogin"><em></em></a>
             			<a title="新浪微博帐号登录" href="https://api.weibo.com/oauth2/authorize?client_id=482040646&response_type=code&with_offical_account=1&redirect_uri=https%3A%2F%2Fpassport.tianya.cn%2Flogin%2Fsinaweibo.do" class="weibologin"><em></em></a>	
             			<a title="QQ帐号登录" href="https://graph.qq.com/oauth2.0/authorize?client_id=100253980&response_type=code&redirect_uri=https%3A%2F%2Fpassport.tianya.cn%2Flogin%2Fqq.do" class="qqlogin"><em></em></a>
             		</div>
             		<i class="iconfont login-quick"></i>
             	
             </div>
             <div class="form-wrapper" id="qrcode_login_in" style="display:none;">
               	<img class="qrcode-img" src="" />
               	<a class="app-link" href="http://www.tianya.cn/mobile/" target="_blank">请打开<span>天涯社区</span>客户端<br>扫描登录</a>
                <i class="iconfont login-pc"></i>
                <div class="tips" id="tips">
					<i class="icon icon-tips"></i>
					<div class="inner">
						<h4>二维码失效</h4>
						<p><a id="refrashQrcode" href="javascript:">刷新页面或点击链接重新获取</a></p>
					</div>
				</div> 
            </div>
		</div>
		</div>
		<script type="text/javascript" charset="utf-8" src="https://static.tianyaui.com/global/member/web/static/js/footer_e087fa5.js"></script>
	</div>
	<script type="text/javascript" charset="utf-8" src="https://static.tianyaui.com/global/ty/TY.js"></script>
	<script type="text/javascript" charset="utf-8" src="https://static.tianyaui.com/global/member/web/static/js/register_65e1a66.js"></script>
	<script type="text/javascript" charset="utf-8" src="https://static.tianyaui.com/global/ty/util/TY.util.userActionRl.js"></script>
	
</body>

</html>