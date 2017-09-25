<!DOCTYPE html>
<html lang="zh-CN">
<head><script charset="utf-8" src="about:blank" async="" mod_name="tanxssp-probe"></script>
    <meta charset="UTF-8">
    <title>凯迪网络 - 主流声音，全球知名华人网络互动媒体</title>
    <link rel="stylesheet" type="text/css" href="{{ url('/home-template/style/common.43b90947.css') }}"><link rel="stylesheet" type="text/css" href="{{ url('/home-template/style/jquery.webui-popover.ace6c896.css') }}"><link rel="stylesheet" type="text/css" href="{{ url('/home-template/style/home.88dc8a1c.css') }}"><script type="text/javascript" async="" id="ac_js86_$3088794952" src="about:blank"></script></head>

<div class="header">
    <a class="kd-logo" href="#">
        <img src="logo.e2694c41.png">
    </a>
    <ul class="moremenu-list">
        @foreach($web as $webs)
        <li>
            <a href="{{ $webs->web_url }}">{{ $webs->web_title }}</a>
        </li>
            @endforeach
    </ul>
    <div class="pull-right">
        <div class="search-wrap">
            <form class="search-form" action="	" target="_blank">
                <input class="form-control" placeholder="" value="" name="q" type="text">
                <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
        <ul class="nav navbar-nav login-nav">
            @if(empty(session('master')))
                <li><a href="{{ url('/home/login') }}">登录</a></li>
                <li><a href="{{ url('/home/register') }}">注册</a></li>
            @else
                <div style="color: white" >
                    <li><a target="_blank" href="{{ '/home/users' }}/{{ session('master')->id }}">{{ session('master')->name }}</a> </li>
                    <li><a target="_blank" href="{{ url('/home/logout') }}">&nbsp;退出</a></li>
                </div>
            @endif
        </ul>
    </div>
</div>
<div class="shortcut-wrap">
    <div class="shortcut">
        <div class="pull-left">
            <ul class="shortcut-list">
                <li><em>社区快捷入口：</em></li>
                <li><a target="_blank" href="">猫眼看人</a></li>
                <li><a target="_blank" href="">原创评论</a></li>
                <li><a target="_blank" href="">经济风云</a></li>
                <li><a target="_blank" href="">文化散论</a></li>
                <li><a target="_blank" href="">会员阅读</a></li>
                <li><a target="_blank" href="">以案说法</a></li>
                <li><a target="_blank" href="">网络剧场</a></li>
                <li><a target="_blank" href="">图画人生</a></li>
                <li class="hover" id="shortcut-show">
                    <a>更多版块<em class="fa fa-caret-down"></em></a>
                </li>
            </ul>
        </div>
        <div class="shortcut-right">
            <img src="{{ url('/home-template/style/slogan_2x.810e56d0.png') }}">
        </div>
    </div>
</div>
<div class="layout">
    <div class="location">
        <div class="location-tips">
            2017年09月18日星期一注册用户<em class="reguser">14299795</em>位，目前在线<em class="onlineuser">145382</em>人</div>

        <div class="c_spread">
            <script type="text/javascript">/* Code removed by ScrapBook */</script>
            <span style="overflow: visible; position: relative; display: block; width: 1200px; height: 120px; background: rgba(0, 0, 0, 0) none repeat scroll 0% 0%; border: 0px none; text-align: left;"><span style="overflow: hidden; position: absolute; display: block; width: 1200px; height: 120px; background: rgba(0, 0, 0, 0) none repeat scroll 0% 0%; border: 0px none; text-align: left;"><span style="overflow: hidden; position: absolute; display: block; width: 1200px; height: 120px; background: rgba(0, 0, 0, 0) none repeat scroll 0% 0%; border: 0px none; text-align: left;"><a href="http://afptrack.alimama.com/clk?bid=0bfbf7cd000059bf79ea71311f26ea6d&amp;pid=mm_34021018_13540158_78486697&amp;cid=223640&amp;mid=211778&amp;oid=29353&amp;productType=1&amp;qytInfoMTime=1505675675&amp;e=G3pLYerWpX9fumWCnJqSgdUmuK9UnPi3fFnzTASaI1TDnWfU8z%2FzeGEOSy0fytdwNK24Yh6tbteCqiwD88CuWQbYBVYyoQfyd%2F3eeVsO2GI%3D&amp;k=109" target="_blank" style="position: absolute; display: block; top: 0px; left: 0px; margin: 0px; padding: 0px; width: 1200px; height: 120px; text-decoration: none; opacity: 0; z-index: 1; cursor: pointer; background: rgb(255, 255, 255) none repeat scroll 0% 0%;"></a><img src="309bd827a05e34cc288bc219a95ef24f.png" style="z-index: 2; border: medium none; margin: 0px !important; position: absolute; width: 24px !important; height: 14px !important; bottom: 0px; left: 0px;"><img id="ac_cs_mm_34021018_13540158_78486697_1" src="{{ url('/home-template/style/2b3a926bb5cbae16d38aebba156554ff.jpg') }}" style="width: 1200px; height: 120px;" border="0"></span></span></span><ins id="ac_js86_mm_34021018_13540158_78486697" style="display: none;"></ins><script type="text/javascript" src="about:blank"></script><script></script><script type="text/javascript" src="about:blank" id="ac_js86_$5253366671"></script>
        </div>
        <div class="topnews-box">
            <div class="topnews">
                <ul>
                    <li>
                        <img src="59bf67882dbae.jpg">
                        <a target="_blank" href="">
                            <p class="topnews-title">推荐阅读</p>
                            <p class="topnews-content">这步棋，习近平落子“创新驱动”</p>
                        </a>
                    </li>
                    <li>
                        <img src="59bf67a673bd6.jpg">
                        <a  href="">
                            <p class="topnews-title">国际观察</p>
                            <p class="topnews-content">一带一路擘画宏伟蓝图</p>
                        </a>
                    </li>
                </ul>
            </div>
            <a href="http://www.kdnet.net/site/history">以往头条</a>
        </div>
        <div class="mainbox">
            <div class="mainbox-left">
                <div class="layout-floor">
                    <div class="flashbox">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <a target="_blank" href="http://club.kdnet.net/dispbbs.asp?boardid=1&amp;id=12417245">
                                        <img src="{{ url('/home-template/style/59bf11409e41b.jpg') }}" alt="原谅我这一生的不羁放纵">
                                        <p>原谅我这一生的不羁放纵</p>
                                    </a>
                                </div>
                                <div class="item ">
                                    <a target="_blank" href="http://club.kdnet.net/dispbbs.asp?boardid=1&amp;id=12417077">
                                        <img src="{{ url('/home-template/style/59bf10eeb2613.jpg') }}" alt="医者仁心救不了人心">
                                        <p>医者仁心救不了人心</p>
                                    </a>
                                </div>
                                <div class="item ">
                                    <a target="_blank" href="http://club.kdnet.net/dispbbs.asp?boardid=1&amp;id=12417063">
                                        <img src="{{ url('/home-template/style/59bf0f6fe18e2.jpg') }}" alt="不按套路走的周亚夫 经历了怎样的人生悲喜剧">
                                        <p>不按套路走的周亚夫 经历了怎样的人生悲喜剧</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="layout-floor">
                    <div class="indexlist">
                        <div class="indexlist-box indexlist-box-read">
                            <div class="indexlist-box-title">
                                <a target="_blank" href="">财经·创富</a>
                            </div>
                            @foreach($data as $item)
                                <ul>
                                    <li>
                                        <a class="title-read" href="" target="_blank" title="">[阅读]</a>
                                        <a href="{{ url('/home/list	') }}" target="_blank">{{ $item->title }}</a>
                                    </li>
                                </ul>
                            @endforeach()
                        </div>
                        <div class="indexlist-box indexlist-box-read">
                            <div class="indexlist-box-title">
                                <a target="_blank" href="">文化·影视</a>
                            </div>
                            @foreach($data as $item)
                                <ul>
                                    <li>
                                        <a class="title-read" href="" target="_blank" title="">[阅读]</a>
                                        <a href="" target="_blank">{{ $item->title }}</a>
                                    </li>
                                </ul>
                            @endforeach()
                        </div>
                    </div>
                    <div class="indexlist">
                        <div class="indexlist-box indexlist-box-read">
                            <div class="indexlist-box-title">
                                <a target="_blank" href="">财经·创富</a>
                            </div>
                            @foreach($data as $item)
                                <ul>
                                    <li>
                                        <a class="title-read" href="" target="_blank" title="">[阅读]</a>
                                        <a href="{{ url('/home/list	') }}" target="_blank">{{ $item->title }}</a>
                                    </li>
                                </ul>
                            @endforeach()
                        </div>
                        <div class="indexlist-box indexlist-box-read">
                            <div class="indexlist-box-title">
                                <a target="_blank" href="">文化·影视</a>
                            </div>
                            @foreach($data as $item)
                                <ul>
                                    <li>
                                        <a class="title-read" href="" target="_blank" title="">[阅读]</a>
                                        <a href="" target="_blank">{{ $item->title }}</a>
                                    </li>
                                </ul>
                            @endforeach()
                        </div>
                    </div>
                </div>
                <div class="layout-floor">
                   <div class="indexlist">
                        <div class="indexlist-box indexlist-box-read">
                            <div class="indexlist-box-title">
                                <a target="_blank" href="">地产·家居</a>
                            </div>
                            @foreach($data as $item)
                                <ul>
                                    <li>
                                        <a class="title-read" href="" target="_blank" title="">[阅读]</a>
                                        <a href="" target="_blank">{{ $item->title }}</a>
                                    </li>
                                </ul>
                            @endforeach()
                        </div>
                        <div class="indexlist-box indexlist-box-read">
                            <div class="indexlist-box-title">
                                <a target="_blank" href="">汽车·出行</a>
                            </div>
                            @foreach($data as $item)
                                <ul>
                                    <li>
                                        <a class="title-read" href="" target="_blank" title="">[阅读]</a>
                                        <a href="" target="_blank">{{ $item->title }}<br></a>
                                    </li>
                                </ul>
                            @endforeach()
                        </div>
                    </div>
                </div>
                <div class="layout-floor">
                    <div class="indexlist">
                    </div>
                </div>
                <div class="layout-floor">

                </div>
            </div>
            <div class="mainbox-right">
                <div class="layout-floor">
                    <div class="mainbox-right-panel">
                        <dl>
                            <dt>活动</dt>
                            @foreach($web as $con)
                            <dd>
                                <a target="_blank" href="" title="">{{ $con->web_con }}</a>
                            </dd>
                                @endforeach
                        </dl>
                        <ul>
                            <li>
                                <a target="_blank" href="http://weibo.com/5026206496/profile?topnav=1&wvr=6">
                                    <span class="ico-wb-bg"><i class="fa fa-weibo"></i></span>

                                </a>
                            </li>
                            <li>
                                <a class="j-follow-qrcode">
                                    <span class="ico-wx-bg"><i class="fa fa-weixin"></i></span>

                                </a>
                            </li>
                            <li>
                                <a target="_blank" href="{{ url('') }}">
                                    <span class="ico-app-bg"><i class="fa fa-mobile"></i></span>

                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="layout-floor">
                    <div class="indexside">
                        <div class="indexside-box indexside-box-group" id="indexside-box-group">
                            <div class="indexside-box-top">
                                <a target="_blank" href="">群组</a>
                            </div>
                            <input id="groupcid" value="100141,100364" type="hidden">
                            <input id="grouptid" value="31740,31741,31738,31739" type="hidden">
                            @foreach($data as $art)
                            <dl class="indexside-list1"><dt><a target="_blank" href="" class="pic"><img src="58c635893d5043285.jpg"></a><p class="indexside-title"><a target="_blank" href="">{{ $art->title }}</a></p><p class="indexside-content"><a target="_blank" href="">{{ $art->content }}</a></p></dt>
                            @endforeach
                        </div>
                        <div class="indexside-bottom">
                            <dl>
                                <dt>实用资讯</dt>
                                <dd>
                                    <a target="_blank" href="http://flight.qunar.com/status/alphlet_order.jsp"><em class="fa fa-plane"></em>航班查询</a>
                                    <a target="_blank" href="http://www.12306.cn/"><em class="fa fa-subway"></em>火车时刻</a>
                                    <a target="_blank" href="http://www.nmc.gov.cn/"><em class="fa fa-umbrella"></em>天气预报</a>
                                    <a target="_blank" href="http://price.xcar.com.cn/"><em class="fa fa-car"></em>汽车报价</a>
                                </dd>
                            </dl>
                        </div>
                        <div class="indexside-box indexside-box-dynamic">
                            <div class="indexside-box-top">
                                <a target="_blank" href="">兄弟动态</a>
                            </div>
                            <dl class="indexside-list2">
                                <dd>
                                    @foreach($web as $stat)
                                    <p>
                                        <a href="" target="_blank" title="凯迪社区技术升级公告">{{ $stat->web_status }}</a>
                                    </p>
                                        @endforeach
                                </dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="friendslink">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#firends1" data-toggle="tab" aria-expanded="true">友情链接</a></li>
            </ul>
            <div id="myTabContent" class="tab-content">

                    @foreach($link as $links)
                        <a target="_blank" href="{{ $links->url }}">{{ $links->name }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                    @endforeach
            </div>
        </div>
        <div class="footer-layout">
            <div class="footer">
                <div class="footer-slogan">
                </div>
                <div class="footer-links">
                    @foreach($web as $title)
                    <a target="_blank" href="{{ $title->url }}">{{ $title->web_title }}</a>
                        @endforeach
                </div>
                <div class="copyright">
                    <p class="copyright-link">
                        <a target="_blank" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=46010802000011">琼ICP备09005089号-1</a>
                        |<a target="_blank" href="http://about.kdnet.net/qualifications.php">增值电信业务经营许可证琼B2-20170044</a>
                        |
                        <a target="_blank" href="http://about.kdnet.net/qualifications.php">网络文化经营许可证 琼网文（2017）5780-224号</a>
                    </p>
                    <p>违法和不良信息举报电话：12377 0898-68555596 举报邮箱：jubao@12377.cn 广州广告热线：020-87386049</p>
                    <p>Copyright ©2017&nbsp;kdnet.net corporation. All Rights Reserved</p>
                </div>
</html>
