// if(typeof(KD)=="undefined"){KD={};}
if(typeof(KD)=="undefined"){KD={};}

KD.user = {
    titleSuffix: ' - �������� ȫ�������Ӱ���������ۼ�ý��ƽ̨',
    navData: {
      'index':{url:'index_login.asp',title:'�ҵ���ҳ'},
      'fposts':{url:'at.asp',title:'�ᵽ�ҵ�'},
      'reme':{url:'replyme.asp',title:'�ظ��ҵ�'},
      'test_reme':{url:'replyme_test.asp',title:'�ظ��ҵ�'},
	  'topic':{url:'posts.asp?t=1',title:'�ҵ�����'},
	  'reply':{url:'reply.asp',title:'�ҵĻظ�'},
	  'blog':{url:'posts.asp?t=2',title:'�ҵĲ���'},
	  't':{url:'posts.asp?t=3',title:'�ҵ�΢��'},
          'honors':{url:'honors.asp',title:'�ҵ�ѫ��'},
           'honors2':{url:'honors.asp#xt2',title:'�ҵ�ѫ��'},
	  'sms':{url:'control_SMS.asp',title:'�ҵ�˽��'},
          'notice':{url:'control_SMS.asp?t=5',title:'�ҵ�֪ͨ'},
	  'sendSMS':{url:'control_SMS.asp?t=2',title:'����Ϣ'},
	  'collection':{url:'control_collect.asp',title:'�ҵ��ղ�'},
	  'collections':{url:'control_collect_new.asp',title:'�ҵ��ղ�'},
	  'shop':{url:'control_shop.asp',title:'�ҵĶ���'},
	  'setting':{url:'control_base.asp',title:'�ҵ�����'},
	  'password':{url:'control_password.asp',title:'�ҵ�����'},	  
          'face':{url:'control_base.asp?t=3',title:'�ҵ�ͷ��'},
	  'mobile':{url:'control_mobile.asp',title:'�ֻ���'},
	  'bindAccount':{url:'bind_account.asp',title:'�ʺŰ�'},
	  'checkemail':{url:'check_email.asp',title:'�ʼ���֤'},
          'checkphone':{url:'check_phone.asp',title:'�ֻ���֤'},
          'fans':{url:'control_follow.asp?t=1',title:'�ҵķ�˿'},
	  'follow':{url:'control_follow.asp?t=0',title:'�ҹ�ע����'},
	  'black':{url:'control_follow.asp?t=2',title:'�ҵĺ�����'},
	  'visit':{url:'visit_his.asp?t=1',title:'�ҷ��ʹ�˭'},
	  'byVisit':{url:'visit_his.asp',title:'˭���ʹ���'},
	  'post':{url:'posts.asp?userid=' + userid, title:'�ҵ�����'},
	  'info':{url:'info.asp?userid=' + userid, title:'�ҵ���ϸ����'},
	  'fansView':{url:'follow_list.asp?t=1&userid=' + userid,title:'��ע�ҵ���'},
	  'followView':{url:'follow_list.asp?t=0&userid=' + userid,title:'�ҹ�ע����'},
	  'integral':{url:'integral.asp?t=2',title:'�ҵĻ���'},
          'chongzhi':{url:'integral.asp',title:'��ֵ'},
	  'invite':{url:'integral.asp?t=6',title:'�ҵ�����'},
          'record':{url:'recodes.asp',title:'�����¼'},
	  'recycle':{url:'recycle.asp',title:'�ҵĻ���վ'},
		  'vip':{url:'integral.asp?t=7',title:'���ϻ�Ա'},	//sunny modify 20130902 ����
		  'chongzhisuccess':{url:'integral.asp?t=5',title:'���ֳ�ֵ�ɹ�'},	//sunny modify 20130902 ����
		  'couponsearch':{url:'coupon_search.asp',title:'�ֽ�ȯ��ѯ'},	//sunny modify 20130902 ����
  		  'vipsuccess':{url:'integral.asp?t=13',title:'��Ա����ɹ�'},	//sunny modify 20130902 ����
  		  'couponcharge':{url:'integral.asp?t=9',title:'�ֽ�ȯ�һ�'},	//sunny modify 20130902 ����
  		  'integrallog':{url:'integral.asp?t=2',title:'������־'},	//sunny modify 20130902 ����
  		  'paylog':{url:'integral.asp?t=1',title:'���׼�¼'},	//sunny modify 20130902 ����
		  'vipsearch':{url:'vip_search.asp',title:'��Ա��ѯ'},	//sunny modify 20130902 ����
		  'abidingvip':{url:'integral.asp?t=14',title:'���ϻ�Ա'},	//sunny ���û�Ա 20130929
 		  'abidingvipsuccess':{url:'integral.asp?t=15',title:'��Ա����ɹ�'},	//sunny ���û�Ա 20130929
 		  'givelotteryinfo':{url:'lottery.asp?t=1',title:'���Ͳ�Ʊ��Ϣ'},	//sunny 20131106 lottery
		  'goodsordersearch':{url:'goodsorder_search.asp',title:'������ѯ'}, //modify sunny group purchase
		  'givingsearch':{url:'giving_search.asp?t=1',title:'�����ҵ�'} //sunny ����

   },
	init: function(args){
		//if(typeof(args) != 'undefined') {
			//if(typeof(args.submit_name)!='undefined')this.submit_name = args.submit_name;
		//}
		$("#fetch_commend_btn").click(function(){KD.user.fetchCommend()});
		$("#fetch_reply_btn").click(function(){KD.user.fetchReply()});
		$('#post_filter a').each(function(i,it){if (i != 0) $(it).click(function(){KD.user.fetchPost(it)});});
	},
	goto: function (name,el) {
		  KD.user.scrollTop();
		  document.location.hash = name;
		  document.body.className = name;
		  var url = KD.user.navData[name].url;
		  if (name == 'bindAccount' || name == 'integral') url += document.location.search;
		  $(cf).attr('src', url);
		  document.title = KD.user.navData[name].title.replace('��',username) + KD.user.titleSuffix;
	},
	fetchData: function(drawEl,url,data,callback){
		$.ajax({
		  url: url,
		  type: "GET",
		  data: data,
		  cache: false,
		  beforeSend: function(){
		    drawEl.html('<div class="defaultcont"><span class="loading">������...���Ժ�...</span></div>');
		  },
		  onError: function(){
		    drawEl.html('<div class="defaultcont">����ʧ��...������...</div>');
		  },
		  success: function(html){
		    if (html.search("div") == -1) {
		    	drawEl.html(html);
		    } else {
		    	drawEl.html(html);
		    	$("div.describe2 img[rel]").click(function(){$(this).overlay({expose: {color: '#000',opacity: 0.2,closeSpeed: 1000},top:'center',load:true});});
		    }
		  }
	  });
	},
	fetchCommend: function(){
		var drawEl = $('#myfollowact_2');
		if (drawEl.html() == '' || drawEl.html().search('defaultcont') != -1) {
			this.fetchData(drawEl,KDNET_USER_URL+'/ajax.asp',{a:'fetchCommend'});
		}
	},
	fetchReply: function(){
		var drawEl = $('#Active_cont_2');
		if (drawEl.html() == '' || drawEl.html().search('defaultcont') != -1) {
			this.fetchData(drawEl,KDNET_USER_URL+'/ajax.asp',{a:'fetchReply',userid:userid});
		}
	},
	fetchPost: function(el){
		var tab = el.href.split('#')[1];
		var drawEl = $('#'+tab);
		if (drawEl.html() == '' || drawEl.html().search('defaultcont') != -1) {
			this.fetchData(drawEl,KDNET_USER_URL+'/ajax.asp',{a:'fetchPost',t:tab,userid:userid});
		}
	},
	scrollTop: function(){
		$(document).scrollTop(0);
	}
}

$(document).ready(function(){
	KD.user.init({});
});