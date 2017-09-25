<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>天涯社区账号_注册</title>
	<meta name="description" content="天涯社区，全球华人的网上家园。">
	<meta name="keywords" content="天涯社区，帐号，账号，注册，登录，忘记密码，找回密码，Account，Sign in，登陆，二维码登录，下次自动登录，">
	<link rel="icon" type="image/x-icon" href="favicon.ico">
	<link rel="stylesheet" type="text/css" href="{{ url('/home-template/css/TY.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ url('/home-template/css/register_7f0dd5c.css') }}">
	<script type="text/javascript" charset="utf-8" src="about:blank"></script>
<script type="text/javascript" charset="utf-8" src="about:blank" async=""></script></head>

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
					
					<a id="regist" class="active">注册</a>
					<!-- <a id="sign" class="">登录</a> -->
					<span class="nav-slider-bar"></span>
					
					
				</div>
			</div>
			<div class="content clearfix">
			 <div class="form-wrapper" id="sign_up">

				<form id="vForm" name="vForm" action="{{ url('/home/register') }}" method="post">
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
				<!-- <input name="forwardUrl" value="" type="hidden"> -->
				<!-- <input name="sourceURL" value="http://www.tianya.cn/132371474" type="hidden"> -->
				<!-- <input name="preSourceURL" value="" type="hidden"> -->
				<!-- <input name="_sid" id="__sid" value="0#1#1.0#a55ad658-d9a9-4774-a03b-4a5b41682646" type="hidden"> -->
					<div class="form-item">
						<label class="form-label" for="userName">用户名:</label>
						<div class="form-field">
							<input placeholder="请输入用户名" class="form-text" name="name" id="userName" value="{{ old('name') }}" type="text">
							<!-- <input id="user_action" name="action" value="b3.1.6888|9164517d0c97e72be9c73b7e163e7e5e|d41d8cd98f00b204e9800998ecf8427e|Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:55.0) Gecko/20100101 Firefox/55.0|0|4|v2.2" type="hidden"> -->
							<!-- <span id="userName_tips" class="form-tips tips-error">请输入用户名</span> -->
							<span id="password_tips" class="form-tips tips-des">请输入用户名</span>
							<!-- <span id="userName_tips" class="form-tips tips-error">该用户名已被使用，请使用其他用户名注册</span> -->
						</div>
					</div>
					<div class="form-item">
                    	<label class="form-label" for="password">密码:</label>
                    	<div class="form-field">
                    		<input placeholder="请输入密码" class="form-text" name="password" id="password" type="password">
                    		<span id="password_tips" class="form-tips tips-des">至少包含字母和数字，最短6位字符，区分大小写。</span>
                    	</div>
                    </div>
                    <!--<div class="form-item">
						<label class="form-label" for="mobile">手机号:</label>
						<div class="form-field">
							<div class="mobile-text">
								<select class="form-select" name="area" id="area"><option value="">0086&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;中国内地(China)</option><option value="00852">00852&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;香港地区(Hong Kong)</option><option value="00853">00853&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;澳门地区(Macao)</option><option value="00886">00886&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;台湾地区(Taiwan)</option><option value="001">001&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;美国(United States)</option><option value="001">001&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;加拿大(Canada)</option><option value="001868">001868&nbsp;&nbsp;&nbsp;&nbsp;特立尼达和多巴哥(Trinidad)</option><option value="0020">0020&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;埃及(مصر)</option><option value="00211">00211&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;南苏丹(South Sudan)</option><option value="00212">00212&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;摩洛哥(Morocco)</option><option value="00213">00213&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;阿尔及利亚(Alger)</option><option value="00218">00218&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;利比亚(Libya)</option><option value="00221">00221&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;塞内加尔(Senegal)</option><option value="00223">00223&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;马里(Mali)</option><option value="00225">00225&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;科特迪瓦(Cote divoire)</option><option value="00227">00227&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;尼日尔(Niger)</option><option value="00230">00230&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;毛里求斯(Mauritius)</option><option value="00231">00231&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;利比里亚(Liberia)</option><option value="00233">00233&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;加纳(Ghana)</option><option value="00234">00234&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;尼日利亚(Nigeria)</option><option value="00235">00235&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;乍得(Chad)</option><option value="00236">00236&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;中非(République Centrafricaine)</option><option value="00237">00237&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;喀麦隆(Cameroun)</option><option value="00240">00240&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;赤道几内亚(Equatorial Guinea)</option><option value="00241">00241&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;加蓬(Gabonese)</option><option value="00242">00242&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;刚果（布）(Congo)</option><option value="00243">00243&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;刚果（金）(Congo)</option><option value="00244">00244&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;安哥拉(Republica de Angola)</option><option value="00249">00249&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;苏丹(Sudan)</option><option value="00250">00250&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;卢旺达(Rwanda)</option><option value="00251">00251&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;埃塞俄比亚(Ethiopia)</option><option value="00254">00254&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;肯尼亚(Kenya)</option><option value="00255">00255&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;坦桑尼亚(Tanzania)</option><option value="00256">00256&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;乌干达(Uganda)</option><option value="00258">00258&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;莫桑比克(Mozambique)</option><option value="00260">00260&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;赞比亚(Zambia)</option><option value="00261">00261&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;马达加斯加(Madagascar)</option><option value="00263">00263&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;津巴布韦(Zimbabwe)</option><option value="00265">00265&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;纳米比亚(Namibia)</option><option value="00265">00265&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;马拉维(Malawi)</option><option value="00266">00266&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;莱索托(Lesotho)</option><option value="00267">00267&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;博茨瓦纳(Botswana)</option><option value="00269">00269&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;科摩罗(Comoros)</option><option value="0027">0027&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;南非(South Africa)</option><option value="00299">00299&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;格陵兰(Nunaat)</option><option value="0030">0030&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;希腊(Ελλάς)</option><option value="0031">0031&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;荷兰(Nederland)</option><option value="0032">0032&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;比利时(België)</option><option value="0033">0033&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;法国(France)</option><option value="0034">0034&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;西班牙(Spain)</option><option value="00351">00351&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;葡萄牙(Portugal)</option><option value="00352">00352&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;卢森堡(Luxembourg)</option><option value="00353">00353&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;爱尔兰(Ireland)</option><option value="00354">00354&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;冰岛(Iceland)</option><option value="00356">00356&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;马耳他(Malta)</option><option value="00357">00357&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;塞浦路斯(Cyprus)</option><option value="00358">00358&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;芬兰(Suomi)</option><option value="00359">00359&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;保加利亚(Bulgaria)</option><option value="0036">0036&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;匈牙利(Magyarország)</option><option value="00370">00370&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;立陶宛(Lithuania)</option><option value="00371">00371&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;拉脱维亚(Latvia)</option><option value="00375">00375&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;白俄罗斯(Belarus)</option><option value="00380">00380&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;乌克兰(Ukraine)</option><option value="00381">00381&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;塞尔维亚(Serbia)</option><option value="00386">00386&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;斯诺文尼亚(Slovenija)</option><option value="0039">0039&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;意大利(Italia)</option><option value="0040">0040&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;罗马尼亚(Romania)</option><option value="0041">0041&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;瑞士(Schweiz)</option><option value="00420">00420&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;捷克(The Czech Republic)</option><option value="00421">00421&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;斯洛伐克(Slovak)</option><option value="0043">0043&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;奥地利(Österreich)</option><option value="0044">0044&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;英国(United Kingdom)</option><option value="0045">0045&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;丹麦(Danmark)</option><option value="0046">0046&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;瑞典(Sverige)</option><option value="0047">0047&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;挪威(Norge)</option><option value="0048">0048&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;波兰(Polska)</option><option value="0049">0049&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;德国(Deutschland)</option><option value="00502">00502&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;危地马拉(Guatemala)</option><option value="00506">00506&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;哥斯达黎加(Costa Rica)</option><option value="00507">00507&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;巴拿马(Panamá)</option><option value="0051">0051&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;秘鲁(Peru)</option><option value="0052">0052&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;墨西哥(México)</option><option value="0053">0053&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;古巴(Cuba)</option><option value="0054">0054&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;阿根廷(Argentina)</option><option value="0055">0055&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;巴西(Brasil)</option><option value="0056">0056&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;智利(Chile)</option><option value="0057">0057&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;哥伦比亚(Colombia)</option><option value="0058">0058&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;委内瑞拉(Venezuela)</option><option value="00592">00592&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;圭亚那(Guyana)</option><option value="00593">00593&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;厄瓜多尔(Ecuador)</option><option value="00598">00598&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;乌拉圭(Uruguay)</option><option value="0060">0060&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;马来西亚(Malaysia)</option><option value="0061">0061&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;澳大利亚(Australia)</option><option value="0062">0062&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;印度尼西亚(Indonesia)</option><option value="0063">0063&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;菲律宾(Pilipinas)</option><option value="0064">0064&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;新西兰(New Zealand)</option><option value="0065">0065&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;新加坡(Singapura)</option><option value="0066">0066&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;泰国(ราชอาณาจักรไทย)</option><option value="00674">00674&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;瑙鲁(The Republic of Nauru)</option><option value="00675">00675&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;巴布亚新几内亚(Papua)</option><option value="00677">00677&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;所罗门群岛(Solomon Islands)</option><option value="00679">00679&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;斐济(FiJi)</option><option value="00682">00682&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;库克群岛(The Cook Islands)</option><option value="00686">00686&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;基里巴斯(The Republic of Kiribati)</option><option value="00691">00691&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;密克罗尼西亚(Federated States of Micronesia)</option><option value="00692">00692&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;马绍尔群岛共和国(Aolepān Aorōkin Majeļ)</option><option value="007">007&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;哈萨克斯坦(Қазақстан Республикасы)</option><option value="007">007&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;俄罗斯(Россия)</option><option value="0081">0081&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;日本(日本の)</option><option value="0082">0082&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;韩国(한국)</option><option value="0084">0084&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;越南(Việt Nam)</option><option value="00850">00850&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;朝鲜(조선)</option><option value="00855">00855&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;柬埔寨(Kampuchea)</option><option value="00856">00856&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;老挝(Laos)</option><option value="00880">00880&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;孟加拉(Bangladesh)</option><option value="0090">0090&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;土耳其(Turkey)</option><option value="0091">0091&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;印度(India)</option><option value="0092">0092&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;巴基斯坦(Pakistan)</option><option value="0094">0094&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;斯里兰卡(Sri Lanka)</option><option value="0095">0095&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;缅甸(Myanmar)</option><option value="00960">00960&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;马尔代夫(Maldives)</option><option value="00962">00962&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;约旦(Jordan)</option><option value="00964">00964&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;伊拉克(Iraq)</option><option value="00965">00965&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;科威特(Kuwait)</option><option value="00966">00966&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;沙特阿拉伯(Saudi Arabia)</option><option value="00968">00968&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;阿曼苏丹国(Oman)</option><option value="00971">00971&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;阿联酋(Arab Emirates)</option><option value="00972">00972&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;以色列(Israel)</option><option value="00973">00973&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;巴林(Bahrain)</option><option value="00974">00974&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;卡塔尔(Qatar)</option><option value="00976">00976&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;蒙古(Монгол Улс)</option><option value="00977">00977&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;尼泊尔(Nepal)</option><option value="0098">0098&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;伊朗(Iran)</option><option value="00993">00993&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;土库曼斯坦(Turkmenistan)</option><option value="00994">00994&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;阿塞拜疆(Azerbaijan)</option><option value="00995">00995&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;格鲁吉亚(Georgia)</option><option value="00996">00996&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;吉尔吉斯斯坦(Kyrgyz)</option><option value="00998">00998&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;乌兹别克斯坦(Uzbekistan)</option></select>
								<input class="form-text" name="tel" id="mobile" value="{{ old('tel') }}" type="text">
								<input name="countryCode" id="area_code" value="" type="hidden">
								<input name="token" id="token" value="" type="hidden">
							</div>
							<span id="mobile_tips" class="form-tips tips-des">一个手机30天内只能认证一个账号。</span>
						</div>
					</div>
					<div id="mobile_vcode_item" class="form-item">
						<label class="form-label" for="mobileVcode">短信验证码:</label>
						<div class="form-field">
							<div class="mobile-vcode-text">
								<input class="form-text" name="smsCode" id="mobileVcode" value="" type="text">
								<a id="get_mobile_vcode" class="get-mobile-vcode">获取验证码</a>
							</div>
							<span id="mobileVcode_tips" class="form-tips tips-des">请填写验证码。</span>
						</div>
					</div>-->
					
                    <div class="form-item" id="guize">
                    	<div class="form-field">
                        	<label>
                        		<input  value="1" class="form-checkbox" name="agree" id="agree" type="checkbox">
                        		<span>我已经阅读并同意<a target="_blank" href="http://service.tianya.cn/guize/regist.do">《天涯社区用户注册协议》</a></span>
                        	</label>
                        </div>
                    </div>
                    <div class="form-action">
                    	<button type="submit" id="register_btn" class="register-btn btn btn-blue">立即注册</button>
                    </div>
				</form>
			 </div>
        
		</div>
		</div>
		<script type="text/javascript" charset="utf-8" src="about:blank"></script><div class="footer"><p><a target="_blank" href="http://help.tianya.cn/about/about.html">关于天涯</a> | <a target="_blank" href="http://help.tianya.cn/about/service.html">广告服务</a> | <a target="_blank" href="http://service.tianya.cn/">天涯客服</a> | <a target="_blank" href="http://help.tianya.cn/about/ystl.html">隐私和版权</a> | <a target="_blank" href="http://help.tianya.cn/about/contact.html">联系我们</a> | <a target="_blank" href="http://join.tianya.cn/">加入天涯</a> | <a target="_blank" href="http://www.tianya.cn/mobile/">手机版</a> | <a target="_blank" href="http://service.tianya.cn/alarm/jbts.do">举报投诉</a></p><p>© 1999 - 2017 天涯社区</p></div>
	</div>
	<script type="text/javascript" charset="utf-8" src="about:blank"></script>
	<script type="text/javascript" charset="utf-8" src="about:blank"></script>
	<script type="text/javascript" charset="utf-8" src="about:blank"></script>
	


</body>
</html>
