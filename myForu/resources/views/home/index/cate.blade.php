@extends('home.layouts.layouts')

@section('content')

<div class="posted-box-add">
		    	<div class="posted-box clearfix">
				   <a name="71575258"></a>
		    		<div class="posted-info c-sub">
					发帖人：<span class="name" id="userinfo_1" style="z-index: 500;">
				    
					<div class="usertips clearfix box2" id="detailinfo_1" style="display: none;"><div class="gb-t"></div><div class="gb-c clearfix"><div class="userinfo clearfix"><div class="userpic"><a href="http://user.kdnet.net/index.asp?userid=2101217" class="user-pic" title="yunying1976" target="_blank"><span></span><img src="http://qc-cache.kdnet.net//upload/userface/3/2/59829519433069202.jpg?imageMogr2/crop/190x190" onerror="this.src = duf_40_40;" width="40" height="40"></a></div><div class="useridinfo"><div class="userid c-main fB"><img class="male-icon" title="男" src="http://www.kdnet.net/g_images/transparent.gif"><a href="http://user.kdnet.net/index.asp?userid=2101217" target="_blank">yunying1976</a><a href="http://user.kdnet.net/index.asp?userid=2101217" target="_blank"><img class="phone-icon" title="手机绑定用户" src="http://www.kdnet.net/g_images/transparent.gif"></a><a href="javascript:;" onmouseover="Tip(" &lt;div="" class="&quot;gb-lb-tips&quot;><div" clearfix&quot;&gt;&lt;div="" fb&quot;&gt;1&lt;="" span&gt;&nbsp;&nbsp;&nbsp;影响力：="" &lt;span="" fb&quot;&gt;11&lt;="" span&gt;="" &lt;br="" &gt;已收获="" fb&quot;&gt;691246&lt;="" 次点击，&lt;span="" fb&quot;&gt;50&lt;="" 个粉丝。&lt;br="" &gt;&lt;="" div&gt;&lt;="" div&gt;&lt;div="" onmouseout="UnTip()"><img class="lv1-icon" title="影响力" src="http://www.kdnet.net/g_images/transparent.gif"></a></div><ul class="detailed-tips clearfix"><li><a href="http://user.kdnet.net/index.asp?userid=2101217#post" target="_blank"><span>主帖</span><strong>147</strong></a></li><li><a href="http://user.kdnet.net/index.asp?userid=2101217#fansView" target="_blank"><span>粉丝</span><strong>50</strong></a></li><li class="no-line"><a href="http://user.kdnet.net/index.asp?userid=2101217#followView" target="_blank"><span>关注</span><strong>0</strong></a></li></ul></div></div><div class="info">简介：没有任何简介.</div><div class="clearfix"><div class="btn-addfollow" id="follow_id_2101217"><a onclick="openLoginPopup();" href="javascript:;" title="关注此用户">加关注</a></div><div class="btn-sms"><a href="javascript:;" onclick="openLoginPopup();" title="发私信">发私信</a></div></div></div><div class="gb-b"></div></div>
					<span class="name c-main">
					<a href="http://user.kdnet.net/index.asp?userid=2101217" target="_blank">yunying1976</a></span>
					<a href="http://user.kdnet.net/index.asp?userid=2101217" target="_blank"><img class="phone-icon" title="手机绑定用户" src="http://qc-static.kdnet.net/webset/www/g_images/transparent.gif"></a></span>&nbsp;<a href="http://user.kdnet.net/index.asp#vip" target="_blank"><img class="member-icon" title="凯迪会员" src="http://qc-static.kdnet.net/webset/www/g_images/transparent.gif"></a>&nbsp;<a href="http://club.kdnet.net/dispbbs.asp?id=11953659&amp;boardid=13" target="_blank"><img class="author-icon" title="原创作者" src="http://qc-static.kdnet.net/webset/www/g_images/transparent.gif"></a>|&nbsp;
					  <a onclick="openSesPopup_new()" href="javascript:;">只看此人</a>
					</div>

		    		<div class="posted-floor">
					<span class="c-sub"><span id="dispbbs33"><a href="http://super.cat898.com//?c=ad&amp;a=click&amp;aid=1000&amp;sid=0&amp;ident=view&amp;pid=33&amp;adurl=aHR0cDovL3VzZXIua2RuZXQubmV0L2luZGV4LmFzcCN2aXA=" alt="开通会员 广告一扫而光" title="开通会员 广告一扫而光" target="_blank"><span class="c-l-red">开通会员 广告一扫而光</span></a></span>
					</span>&nbsp;&nbsp;&nbsp;楼主
					</div>
		    	</div>

				<div class="c-sub minor-control">
				<!-- sunny add 20130710 begin -->
				<!-- 收藏 -->


				<div class="collection-f prompt-f">
					<span class="collection-btn"><a href="javascript:;" title="收藏" onclick="openLoginPopup();">收藏</a></span>
					<span class="coll-pormpt prompt-ok" style="display:none;"><span class="prompt-content"><i></i>添加分类成功！</span></span>
					<div class="coll-box coll-box-b">
						<a href="javascript:;" class="nav-icon-s2 close-coll"></a>
						<div class="coll-succeed"><i></i>收藏成功</div>
						<div class="add-tag clearfix">
							<div class="input-box-f lf">
								<label id="label1" class="label-msg" onmouseover="overInput('#addTag');" onmouseout="outInput('#addTag')" onclick="checkInput('#label1','#addTag')">分类标签，6个字以内</label>
								<input name="addTag" id="addTag" class="input-text" maxlength="6" onfocus="checkFocus('#label1','#addTag');" onkeyup="checkKeyDownUp('#label1','#addTag');seltag();" onkeydown="checkKeyDownUp('#label1','#addTag');" onblur="checkBlur('#label1','#addTag');" type="text">
							</div>
							<a href="javascript:;" class="add-btn rf" onclick="addtag();">添加</a>
						</div>
						<div id="id_nowtag" class="now-tag">
							添加标签来管理你的收藏吧！
						</div>

						<i class="nav-icon-s2 coll-dot"></i>
					</div>
				</div>
				<!-- 收藏 end -->
				<!-- sunny add 20130710 end -->

				<b class="c-sub">|</b> <a href="javascript:window.location.reload()">刷新</a> <b class="c-sub">|</b> <a href="javascript:doZoom(-2)">字体缩小</a> <b class="c-sub">|</b> <a href="javascript:doZoom(2)">字体变大</a>
				</div>

				<!--针对内容页视频样式-->
				<style>
					.postspecific .posts-cont iframe,
					.replycont-box-r .replycont-text iframe{ display: block; width:100%; height:400px; margin:0 auto;}
				</style>
		    	<div class="postspecific">
		    		<div class="posts-title">[原创]没有那啥，你依然是你！</div>
					

		    		<div class="posts-stat-box">
		    			<div class="posts-stat-t"></div>
		    			<div class="posts-stat-c">
			    			<div><span class="f10px fB c-alarm">12010</span> 次点击</div>
							
						   <div class="forward-wblog"><span class="f10px fB c-alarm">38</span> 个回复</div>
						   
			    			<div>
								
			    			</div>
							<div class="forward-wblog"></div>
		    			</div>
		    			<div class="posts-stat-b"></div>
		    		</div>
					
		    		<div class="posts-posted"><span class="c-main"><a href="http://user.kdnet.net/index.asp?userid=2101217" target="_blank">yunying1976</a></span> 于  2017/9/15 20:48:24 发布在 <span class="c-main"><a href="http://club.kdnet.net">凯迪社区 </a> &gt; <a href="list.asp?boardid=1">猫眼看人</a></span></div>

					

					<div class="posts-cont" style="word-spacing: 2px;">
					&nbsp;&nbsp;&nbsp;&nbsp;随笔<br><br>&nbsp;&nbsp;&nbsp;&nbsp;1 <br><br>&nbsp;&nbsp;&nbsp;&nbsp;那天活动中有一个细节让在场的人触动很大。<br><br>&nbsp;&nbsp;&nbsp;&nbsp;一位柔柔弱弱的清秀女孩安静地坐在一隅，快到上午活动结束的时候（已经延迟到12点了），主持人将话筒交给她，她脸上的神情也很意外。<br><br>&nbsp;&nbsp;&nbsp;&nbsp;看起来女孩并无准备，也不愿意多讲什么，但话筒到了手里，只有一瞬的意外，就复归平和的表情。她清了清嗓子，一出口，便让有点纷扰的现场安静了下来：<br><br>&nbsp;&nbsp;&nbsp;&nbsp;女孩还有一个身份是救援队的志愿者，也是资深的救援队员，掌握专业的救援技能，她简短的讲了两个事，一次在厦门海沧大桥，一个二十几岁的年轻人，跳了海，跳海前，把手机放在桥上，手机上的信息显示，他欠别人一万多块钱，觉得自己生活过不下去了，就跳海身亡。“我们按照既定的仪式说‘兄弟，现在带你回家了 ’这么年轻的生命为了这一万多块钱说没就没了，也许他的成长背景里有太多我们不知道的东西，真的，太不一样了。”<br><br>&nbsp;&nbsp;&nbsp;&nbsp;另一个现场的主人翁也是年轻人，富二代，从小条件太好，想得到的一定要得到。站在大桥上的原因是因为一个女孩不跟他好，他打算通过跳海的方式引发女孩的关注。结果女孩的姐姐来了，只告诉他一句话，女孩和他的关系结束了，“他转头看看桥下的救援船就位了，就跳了下来，当然是获救了，他是很聪明的，也不愿意离开这花花世界，我们也按惯例会去医院再见他一次那天我&nbsp;&nbsp;们带着鲜花去看他，问他以后还跳不跳，他说不会了，那么高跳下去太难受…… ”<br><br>&nbsp;&nbsp;&nbsp;&nbsp;女孩讲完了，她聊到那些救援过程中所看到的景象和因此听到背后的故事时潸然泪下，因为站在那个场景里的个体面临“绝境”，虽然这绝境的含义是不一样的，有的因为一万块钱，有的因为一段感情，有的因为他们自以为过不去的事情，总是有许多生命因为各种理由轻易的离去。<br><br>&nbsp;&nbsp;&nbsp;&nbsp;我们聊生命，绝不是抽象的面相，而是一个个生动而具体的人，但在相当长的时间里，我们所接受的理念里常常是宏大叙事优先，个体生命往往是被轻描淡写的一笔带过 。 <br><br>&nbsp;&nbsp;&nbsp;&nbsp;有过一段时间一个句式蛮流行：“没有那啥， 你什么也不是！”就是这种思维的集中表现。 <br><br>&nbsp;&nbsp;&nbsp;&nbsp;这种价值观导致了个体对于生命价值的认知是不完整的，甚至也是自我看轻的，似乎只有放入某种宏大叙事里面才是有价值的，如果离开某些宏大叙事的背景就失去了存在感，这种语境的泛滥直接导致生命越来越抽象化，抽象成一个面相，一种句式，一种思考模式，甚至连所有的标点符号都是确定的，这个世界这样真的好玩么？<br><br>&nbsp;&nbsp;&nbsp;&nbsp;事实上，绝大多数人的一生基本上是连标点符号都确定的度过，不仅仅是生活形态，更重要的是人的思考方式。生活形态的单一并无什么太大的不妥，而思想的桎梏和单一与夹杂着恐惧才是令人担心的， 因为害怕不确定，于是这个世界充满了确定而粗暴的方式对待，因为确定而粗暴的方式是他们所熟悉的，不怎么需要技术含量的方式 。<br><br>&nbsp;&nbsp;&nbsp;&nbsp;用电影“天下无贼”里黎叔的一句话：“这是最没有技术含量的工作。”可惜， 都在做，而且装得很像。<br><br>&nbsp;&nbsp;&nbsp;&nbsp;2<br><br>&nbsp;&nbsp;&nbsp;&nbsp;那天有人争论要不要聊批判性思维，这原本是一个思维方式， 但因为其对于个体生命带有原生的启蒙，一旦一个人学会了这种技术含量高的思维方式，谎言就会自动坍塌，宏大叙事的控制力明显削弱，通俗的说就是不再有人盲从，敦刻尔克在亚洲也打赏几万的丑剧不会发生，开始越来越真实的思考，这一点竟然也是稀缺品。<br><br>&nbsp;&nbsp;&nbsp;&nbsp;小时候看《皇帝的新装》觉得很好玩，现在再看就不好玩了，因为他不是写给孩子看到，而是给这个依然在沉溺谎言的成人世界读的，可惜，读懂的不多！省略20000字。<br><br>&nbsp;&nbsp;&nbsp;&nbsp;每一个生命的存在无需任何附加的宏大叙事， 本身就是伟大的，自由的，好好珍惜！<br><br>&nbsp;&nbsp;&nbsp;&nbsp;没有那啥，你依然是你！<br><br>&nbsp;&nbsp;&nbsp;&nbsp;生命，自己就是意义！ <br><br><br>

		    		</div>

				

				<!--转贴-->
				<!-- sunny 20131021 share begin -->
				<!--分享、app下载 S-->
				<div class="new-share-main">
					<div class="new-share">
						<span class="lf">分享：</span>
						<a href="javascript:void(0)" onclick="postToWb('sina', '1', '12415266');" title="分享到新浪微博" class="ico-newshare ico-sina">分享到新浪微博</a>
						<a href="javascript:void(0)" onclick="postToWb('tx', '1',  '12415266');" title="分享到腾讯微博" class="ico-newshare ico-qqt">分享到腾讯微博</a>
						<span class="code-main">
							<a href="javascript:;" title="分享给朋友" class="ico-newshare ico-shareurl" id="qrcodebtn">分享给朋友</a>
							<div class="shareurl-code close-code" style="display: none;">
								<b class="ico-newshare close" title="关闭" onclick="$(this).parent('.close-code').hide();"></b>
								<div class="shareurl-text clearfix">
								<script type="text/javascript">
								$(function(){
									var qrcode = new QRCode(document.getElementById('qrcodeimg'), {
									text:'http://m.kdnet.net/share-12415266.html?sfrom=clubclick',
									width:74,
									height:74,
									correctLevel:0
									});
									$('#qrcodebtn').click(function(){
										//$('#qrcodeimg').attr('src', 'http://app.kdnet.net/2weima/create.php?data=http%3A%2F%2Fclub.kdnet.net%2Fdispbbs.asp%3Fid%3D12415266%26boardid%3D1%26sfrom=club');
										$('.shareurl-code').show();
									});
								});
								</script>
									<div src="" width="74" height="74" id="qrcodeimg" title="http://m.kdnet.net/share-12415266.html?sfrom=clubclick"><canvas width="74" height="74" style="display: none;"></canvas><img alt="Scan me!" style="display: block;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEoAAABKCAYAAAAc0MJxAAACN0lEQVR4nO2UwY7DQAhD8/8/3b10DxsF5tlDonZlpDkVjHmEHsdxvNz3G27dOZwaGjtzvl9ASaCcplOGulrHT6ftzBlQUPcSlDKQC0ep2/FFYcKeAfUYqC6mzF/pkAED6ttBOQOqgAIqoP4hKBLEWGfI0XEhVDnKnAEF5/wDauccpsw/kbPxAgq913BUMLvc3ZzOw1QEFNfU//Q6GFU9OQdo2Do9Mt/CX0ARnYBqftsGpTS9elUOrSfLcHot9AIK6VXJpGkXUxDIeSow1fqAckEpxhyjBPgdoJTX6gaUCapr7pifHoYskSyFREAF1IOgHIN3wFR87XindQGlgiLNdw1N91qBV6G0uQElgiKCJNcxONWL6NnLVQZzzBODXwVKMe/kXg10V6iLQJ4d8YAKqM6zP2A3sHT/Qi91gYrXRa+AQr2IkDK8Y351GpU/RU9ZakBNgCJwiHkSZAgFONVXIQbUDiiUPPQq7Q7UVQ3xSnoh4AEVUPeAcsyTpsS8bHp4Kav5AqroUdSwRp1p8psKbHopJDegJkCthFTzCiASSq2yXOIroBxQO6eifL4uhI3B8KsioALqRlBllhDGdjBMJcf1Q7wGFP8yvc+VnmJnrDuBndMhyzDmDSgJlBJdjaOn9HIXVenSnIByQSlnBMRvfVO9oU5ABdQng6qiM+YOqtST3ID6FFBKjaqz40v1ungBZYEi0dWshqFmq1ylZ1dHck75ASWBcp7b9FxHchxd9zwLnYAKqEFQP5ReKZbwbWxaAAAAAElFTkSuQmCC"></div>
									<p>用手机看帖文，请扫一扫。用微信/易信等扫描还可以分享至好友和朋友圈。</p>
								</div>
							</div>
						</span>
					</div>
					<div class="kd-app-download"><a href="http://3g.kdnet.net/app.php" target="_blank" title="凯迪社区APP下载"><img src="http://qc-static.kdnet.net/webset/club/include/images/kd_app_download.gif" alt="凯迪社区APP下载"></a></div>
				</div>
				<!--分享、app下载 E-->
				<!-- sunny 20131021 share end -->

				<!-- Sunny Modify Begin
				<div align=right>
					<span>分享到</span>
					<a href="javascript:void(0)" onclick="postToWb('tx', '1',  '12415266');" title="分享到腾讯微博"><img src="http://v.t.qq.com/share/images/s/weiboicon16.png" style="margin-bottom:-4px"></a>
					<a href="javascript:void(0)" onclick="postToWb('sina', '1', '12415266');" title="分享到新浪微博"><img src="http://www.sinaimg.cn/blog/developer/wiki/LOGO_16x16.png" style="margin-bottom:-4px"></a>
					<span class="change_btn"><span class="type3 showNum"><span id="count_p" class="number"><em id="count">0</em><img src="http://simg.sinajs.cn/platformstyle/images/common/transparent.gif" class="arrow" alt="" /></span></span></span>
				</div>
				Sunny Modify End -->
	           <!--转贴结束-->
				

					<!--sunny 打赏 B -->
					

					<!--chung 打赏 B -->




    <!-- 赞赏 -->
    <div id="re_test">
        <style>
			.reward-fixed-main {height: auto;}
			.donate-cont {padding: 40px 50px;background: #efffff;font-size: 14px;}
			.donate-cont .donate-input-wrap {border: 1px solid #C0DFE1;border-radius: 4px;background: #fff;overflow: hidden;margin-bottom: 20px;}
			.donate-cont .donate-input-wrap .donate-input {padding: 10px;border-bottom: 1px solid #C0DFE1;}
			.donate-cont .donate-input-wrap .donate-input label {height: 30px;}
			.donate-cont .donate-input-wrap .donate-input label i {display: inline-block;background: url("donate-ico.jpg") no-repeat;width: 30px;height: 30px;margin-right: 10px;vertical-align: middle;}
			.donate-cont .donate-input-wrap .donate-input input { color: #FF9326; font-size: 18px; border: none;}
			.donate-textarea textarea { padding: 12px 15px; border: none; width: 100%; color: #C1C4CB; height: 70px;}
			.donate-btn-warp { text-align: center;}
			.donate-Main .donate-btn { height: 50px; line-height: 50px; text-align: center; color: #fff; font-size: 22px; width: 150px; display: block; background: #d95f4c; margin: 0 auto 20px; border-radius: 30px;}
			.donate-btn-warp p { font-size: 14px; margin-bottom: 16px;}
			.donate-btn-warp span b { color: #E53C0F;}
			.donate-more { width: 490px; margin: 20px auto;}
			.donate-more h2 { font-size: 12px; margin-bottom: 10px;}
			.donate-more ul li { float: left; width: 40px; height: 40px; border-radius: 50%; margin: 0 10px 10px 0; overflow: hidden; background: #eee;}
			.donate-more .last { background: url("donate-more.jpg") no-repeat;}
			.reward-cont { padding: 20px; margin: 0 auto; background: #efffff; border-radius: 0 0 5px 5px;}
			.reward-cont .reward-user-head { text-align: center; margin: 20px 0 30px;}
			.reward-cont .reward-img-box { display: inline-block; width: 60px; height: 60px; border-radius: 60px; border: 1px solid #ccc; text-align: center; margin-bottom: 10px;}
			.reward-cont .reward-head-img { width: 60px; height: 60px; border-radius: 60px;}
			.reward-cont .reward-user-name { font-size: 14px;}
			.reward-cont .reward-in { margin: 20px 0 30px;}
			.reward-cont .reward-money { text-align: center; margin: 0 40px;}
			.reward-cont .reward-money li { display: inline-block; margin: 0 10px 10px;}
			.reward-cont .reward-money li a { display: inline-block; width: 90px; height: 34px; border-radius: 4px; border: 1px solid #5DAFBC; background-color: #fff; line-height: 34px; text-align: center; font-size: 16px; font-family: 'Arial'; font-weight: bold;}
			.reward-cont .reward-money li a:hover { background-color: #5DAFBC; text-decoration: none; color: #fff;}
			.reward-cont .reward-custom { display: none; position: relative;}
			.reward-cont #rewardTip { font-size: 12px; position: absolute; top: 5px; left: 340px; width: 100px; line-height: 24px; color: #e63922;}
			.reward-cont .reward-custom-input { position: relative; width: 200px; margin: 0 auto 10px; border: 1px solid #5DAFBC; background-color: #fff; border-radius: 4px; line-height: 34px; font-size: 18px; font-weight: bold; font-family: 'Arial'; vertical-align: middle;}
			.reward-cont .icon-mon { display: inline-block; position: relative; width: 32px; height: 34px; text-align: center; line-height: 34px;}
			.reward-cont .reward-num { width: 160px; background: none; position: relative; height: 34px; line-height: 34px; outline: none; border: none; font-size: 18px; font-weight: bold;}
			.reward-cont .reward-pay { display: block; width: 200px; margin: 0 auto; height: 34px; background-color: #D95F4C; text-align: center; border-radius: 4px; color: #fff; font-size: 14px; line-height: 34px; text-decoration: none;}
			.reward-cont .reward-pay:hover { background-color: #EC6854;}
			.reward-cont .reward-pay-bt { margin: 10px 20px;}
		</style>
        <!-- ?????? -->
        <!-- 赞赏html -->
        <div class="donate-Main clearfix">
            <div class="donate-btn-warp">
                <p>有启发就赞赏一下</p>
                <a onclick="donateBtn();" class="reward-btn-big  donate-btn " href="javascript:void(0);">赞赏</a>
                <!--span>?? <b class="donate">23</b> ???</span-->
            </div>
            <div class="donate-more">

            <h2>赞赏楼主的人</h2><ul><li><img src="http://qc-static.kdnet.net/upload/userface/NoPic_40_40.jpg" alt=""></li><li><img src="http://qc-static.kdnet.net/upload/userface/NoPic_40_40.jpg" alt=""></li><li><a target="_blank" href="http://user.kdnet.net/index.asp?userid=2101217"><img src="http://qc-static.kdnet.net/upload/userface/2101217_40_40.jpg" onerror="this.src= duf_40_40"></a></li></ul></div>
        </div>
        <div class="reward-fixed-box reward-fixed" style="display:none;">
            <form id="donate_form" name="t_form" method="post" action="http://qianbao.kdnet.net/pay/donate" target="_blank">
                <div class="reward-fixed-main">
					<div class="reward-fixed-cont">
						<div class="reward-title">赞赏<b class="REclose donate-close"></b></div>
						<div class="reward-cont">
					<div class="reward-user-head">

						<a class="reward-img-box" href="http://user.kdnet.net/index.asp?userid=2101217" target="_blank">
							<img class="reward-head-img" src="http://qc-cache.kdnet.net//upload/userface/3/2/59829519433069202.jpg?imageMogr2/crop/190x190" onerror="this.src='http://qc-static.kdnet.net/upload/userface/NoPic_190_190.jpg'">
						</a>
						<p class="reward-user-name"><a href="http://user.kdnet.net/index.asp?userid=2101217" target="_blank">yunying1976</a></p>

					</div>
					<div class="reward-in">
						<ul class="reward-money">
							<li><a class="donate-money" href="javascript:void(0);" data-money="5">5元</a></li>
							<li><a class="donate-money" href="javascript:void(0);" data-money="10">10元</a></li>
							<li><a class="donate-money" href="javascript:void(0);" data-money="20">20元</a></li>
							<li><a class="donate-money" href="javascript:void(0);" data-money="50">50元</a></li>
							<li><a class="donate-money" href="javascript:void(0);" data-money="100">100元</a></li>
							<li><a href="javascript:void(0);" id="rewardCus">其他</a></li>
						</ul>
						<div class="reward-custom">
							<div class="reward-custom-input">
								<label class="icon-mon" for="rewardNum">￥</label><input id="rewardNum" class="reward-num" name="money" value="8.80" type="text">
							</div>
							<span id="rewardTip" style="display:none"></span>
							<a href="javascript:void(0);" class="reward-pay" action-type="submit">立即支付</a>
							<input name="tid" value="12415266" type="hidden">
						</div>
					</div>
					<div class="reward-pay-bt">
						<label>
							<input name="is_guest" value="1" type="checkbox"> 匿名赞赏
						</label>
					</div>
				</div>
					</div>

               </div>
            </form>
        </div>

        <!-- 赞赏html -->
    </div>
    
	<script src="http://qc-static.kdnet.net/resource/jquery-1.12.0.min.js"></script>
	<script src="http://qc-static.kdnet.net/resource/js/jquery.qrcode.min.js"></script>
	<script>



    $(function(){
        $('a[action-type="submit"]').click( function () {
            var money = $('#rewardNum').val() * 100;
            if (money && money >= 1 ) {
                $('#donate_form')[0].submit();
            } else {
                alert('请输入有效金额');
            }
        });

		$('.donate-close').click( function() {
			$('.reward-fixed').fadeOut(300);
		});

		$('#rewardCus').click(
			function () {
				$('.reward-in .reward-money').hide();
				$('.reward-in .reward-custom').fadeIn();
			}
		);

		$('.donate-money').click(function () {
			var money = $(this).attr('data-money'),
				regex = /^\d+$/;

			if (regex.test(money))
			{
				$('#rewardNum').val(money);
				$('#donate_form')[0].submit();
			} else {
				alert("金额输入有误");
			}
		});

		// ????
		var m = document.getElementById("rewardNum");
        m.onkeyup = function() {
            var regex = /^\d+\.?\d{0,2}$/;
            if (!regex.test(this.value))
            {
                document.getElementById("rewardTip").innerHTML = "金额输入有误";
                document.getElementById("rewardTip").style.display="";
                this.value = "";
                this.focus();
            } else {
            	document.getElementById("rewardTip").style.display="none";
            }
        };

$.get("http://qianbao.kdnet.net/api/donate/aspinit.json?tid=12415266&page=1", function(data){
	if (data.data.personal) {
		$('.donate-more').append('<h2>赞赏楼主的人</h2>').append('<ul></ul>');
		$.each(data.data.personal, function (key, value) {
			if (value.is_guest) {
				var html = '<li><img src="http://qc-static.kdnet.net/upload/userface/NoPic_40_40.jpg" alt="" /></li>';
			} else {
				var html = '<li><a target="_blank" href="http://user.kdnet.net/index.asp?userid=' + value.UserID +'"><img src="http://qc-static.kdnet.net/upload/userface/' + value.UserID + '_40_40.jpg" onerror="this.src= duf_40_40" /></a></li>';
			}
			$('.donate-more ul').append(html);
		});
		if (data.data.personal_count >= 17) {
			$('.donate-more ul').append('<li class="last" id="donate_last" data-tid="12415266"><a href="javascript:void(0);"></a></li>');
		}
	}
}, 'jsonp');

$('#donate_last').click(function () {
	$.get('donate_more.asp', {tid: 12415266}, function (json) {
		if (json.data.personal) {
			$('#donate_last').remove();
			$('.donate-more ul').empty();
			$.each(json.data.personal, function (key, value) {
				if (value.is_guest) {
					var html = '<li><img src="http://qc-static.kdnet.net/upload/userface/NoPic_40_40.jpg" alt="" /></li>';
				} else {
					var html = '<li><a href="http://user.kdnet.net/index.asp?userid=' + value.UserID +'" target="_blank"><img src="http://qc-static.kdnet.net/upload/userface/' + value.UserID + '_40_40.jpg?t=14:15:50" alt="" onerror="this.src = duf_40_40;" /></a></li>';
				}
				$('.donate-more ul').append(html);
			});
		}
	}, 'json');
});

});

    function donateBtn(){
        $('.reward-fixed-box').fadeIn(300);
        $('.reward-fixed-main').css({'margin-left':'-'+($('.reward-fixed-main').outerWidth()/2)+'px','margin-top':'-'+($('.reward-fixed-main').height()/2)+'px'});
    }

    function closeR(){
        $('.reward-fixed').fadeOut(300);
    }
</script>



					<!--chung 打赏 E -->



					<!--sunny 打赏 E -->
		    	</div>

				<!--优秀帖文推荐-->
				<style>
					/*优秀帖文推荐*/
					.post-superb{font-size:16px; overflow: hidden; display:none;}
					.post-superb p{position:relative; text-align:center; line-height:30px;}
					.post-superb p:before{content:""; position:absolute; width:100%; height:1px; background:#bad8d8; left:0; top:15px;}
					.post-superb p span{display:inline-block; padding:0 20px; background:#dceced; z-index: 1; position: relative;}
					.post-superb div{margin:50px 0; padding:0 50px 50px; border-bottom:1px #bad8d8 solid; overflow:hidden;}
					.post-superb img{float:left; width:150px; height:150px;}
					.post-superb ul{float:left; line-height:30px; margin-left: 30px;}
					.post-superb li{height:30px; overflow:hidden;}
					.post-superb li:before{content:"·"; margin-right:13px;}
				</style>

				<div class="post-superb">
					<p><span>优秀帖文推荐</span></p>
					<div>
						<!--<img src="" alt="">-->
						<ul class="post-superb-ul"></ul>
					</div>
				</div>

				<script>
					/*$(function(){
						$.ajax({
							type:'post',
							url:'http://clubdev.test.kdnet.net/api/huiyuan/zhuanqu.json',
							data: {},
							success: function(json) {
								if(json.data.length < 1){
									$('.post-superb').remove();
									return;
								}
								for(var i=0;i<json.data.length;i++){
									var li = $('<li></li>');
									li.append('<a href="http://club.kdnet.net/dispbbs.asp?id='+json.data[i].id+'">'+json.data[i].title+'</a>');
									$('.post-superb-ul').append(li);
								}
							}
						});
					});*/
				</script>
				<!--优秀帖文推荐End-->

		    	<div class="posts-control c-sub manange-panel">

				<!-- IP,曾用名 -->
				<div style="float:left;">
				 

				</div>
				<!-- // IP,曾用名 -->
				<!--sunny local 20131112 B-->
				

				<script language="javascript">
					//sunny local 20131112 B
					function push(boardid, rootid,posttable,t,div) {
						$.ajax({
							url: "push_dispbbs.asp?boardid="+boardid+"&rootid="+rootid+'&posttable='+posttable+'&t='+t+'&div='+rootid,
							type: "GET",
							cache: false,
							success: function(html){
							$('[id=push_'+rootid+']').html(html);
							}
						});
					}
					//sunny local 20131112 E

				</script>
				<!--sunny local 20131112 E-->

				<span id="result"></span>
				<span id="ding_71575258"><a href="javascript:;" onclick="openLoginPopup();" onmouseover="cancelAgreewxf(this);" title="赞" class="agree"><span>赞</span><span class="c-alarm">(6)</span></a><b class="c-sub"> | </b></span>
				
				<!--<b class="c-sub">|</b>-->
				<a href="#Preply" title="回复">回复</a>
				 |
				<a href="http://upfile1.kdnet.net/textareaeditor/quote.asp?boardid=1&amp;followup=71575258&amp;rootid=12415266&amp;lay=1">引用</a>
                
                <b class="c-sub">|</b> <span class="c-alarm fB" title="举报"><a href="javascript:;" onclick="openLoginPopup();" title="举报">举报</a></span>
				

				</div>
		    	</div>

@endextent