<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>兄弟论坛 - {{ $title }}</title>

  <meta name="csrf-token" content="{{ csrf_token() }}">

  <meta name="description" content="app, web app, responsive, responsive layout, admin, admin panel, admin dashboard, flat, flat ui, ui kit, AngularJS, ui route, charts, widgets, components" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <link rel="stylesheet" href="{{ url('/admin-template/css/bootstrap.css') }}" type="text/css" />
  <link rel="stylesheet" href="{{ url('/admin-template/css/animate.css') }}" type="text/css" />
  <link rel="stylesheet" href="{{ url('/admin-template/css/font-awesome.min.css') }}" type="text/css" />
  <link rel="stylesheet" href="{{ url('/admin-template/css/simple-line-icons.css') }}" type="text/css" />
  <link rel="stylesheet" href="{{ url('/admin-template/css/font.css') }}" type="text/css" />
  <link rel="stylesheet" href="{{ url('/admin-template/css/app.css') }}" type="text/css" />
</head>
<body>
  <div class="app app-header-fixed" id="app">
    <!-- navbar -->
    <div class="app-header navbar">
      <!-- navbar header -->
      <div class="navbar-header bg-dark">
        <button class="pull-right visible-xs dk" data-toggle="class:show" data-target=".navbar-collapse">
          <i class="glyphicon glyphicon-cog"></i>
        </button>
        <button class="pull-right visible-xs" data-toggle="class:off-screen" data-target=".app-aside" ui-scroll="app">
          <i class="glyphicon glyphicon-align-justify"></i>
        </button>
        <!-- brand -->
        <a href="#/" class="navbar-brand text-lt">
          <img src="{{ url('/admin-template/img/logo.png') }}" alt="." class="hide">
          <span class="hidden-folded m-l-xs">{{ $title }}</span>
        </a>
        <!-- / brand -->
      </div>
      <!-- / navbar header -->

      <!-- navbar collapse -->
      <div class="collapse pos-rlt navbar-collapse box-shadow bg-white-only">
        <!-- buttons -->
        <div class="nav navbar-nav hidden-xs">
          <a href="#" class="btn no-shadow navbar-btn" data-toggle="class:app-aside-folded" data-target=".app">
            <i class="fa fa-dedent fa-fw text"></i>
            <i class="fa fa-indent fa-fw text-active"></i>
          </a>
          <a href class="btn no-shadow navbar-btn" data-toggle="class:show" data-target="#aside-user">
            <i class="icon-user fa-fw"></i>
          </a>
        </div>
        <!-- / buttons -->

        <!-- link and dropdown -->
        <ul class="nav navbar-nav hidden-sm">
          <li class="dropdown pos-stc">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle">
              <span>更多</span> 
              <span class="caret"></span>
            </a>
            <div class="dropdown-menu wrapper w-full bg-white">
              <div class="row">
                <div class="col-sm-4">
                  <div class="m-l-xs m-t-xs m-b-xs font-bold">Pages <span class="badge badge-sm bg-success">10</span></div>
                  <div class="row">
                    <div class="col-xs-6">
                      <ul class="list-unstyled l-h-2x">
                        <li>
                          <a href><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Profile</a>
                        </li>
                        <li>
                          <a href><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Post</a>
                        </li>
                        <li>
                          <a href><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Search</a>
                        </li>
                        <li>
                          <a href><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Invoice</a>
                        </li>
                      </ul>
                    </div>
                    <div class="col-xs-6">
                      <ul class="list-unstyled l-h-2x">
                        <li>
                          <a href><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Price</a>
                        </li>
                        <li>
                          <a href><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Lock screen</a>
                        </li>
                        <li>
                          <a href><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Sign in</a>
                        </li>
                        <li>
                          <a href><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Sign up</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4 b-l b-light">
                  <div class="m-l-xs m-t-xs m-b-xs font-bold">UI Kits <span class="label label-sm bg-primary">12</span></div>
                  <div class="row">
                    <div class="col-xs-6">
                      <ul class="list-unstyled l-h-2x">
                        <li>
                          <a href><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Buttons</a>
                        </li>
                        <li>
                          <a href><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Icons <span class="badge badge-sm bg-warning">1000+</span></a>
                        </li>
                        <li>
                          <a href><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Grid</a>
                        </li>
                        <li>
                          <a href><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Widgets</a>
                        </li>
                      </ul>
                    </div>
                    <div class="col-xs-6">
                      <ul class="list-unstyled l-h-2x">
                        <li>
                          <a href><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Bootstap</a>
                        </li>
                        <li>
                          <a href><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Sortable</a>
                        </li>
                        <li>
                          <a href><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Portlet</a>
                        </li>
                        <li>
                          <a href><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Timeline</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4 b-l b-light">
                  <div class="m-l-xs m-t-xs m-b-sm font-bold">Analysis</div>
                  <div class="text-center">

                    <div class="inline"></div>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle">
              <i class="fa fa-fw fa-plus visible-xs-inline-block"></i>
              <span translate="header.navbar.new.NEW">新的</span> <span class="caret"></span>
            </a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#" translate="header.navbar.new.PROJECT">项目</a></li>
              <li>
                <a href>
                  <span class="badge bg-info pull-right">5</span>
                  <span translate="header.navbar.new.TASK">工作</span>
                </a>
              </li>
              <li><a href translate="header.navbar.new.USER">用户</a></li>
              <li class="divider"></li>
              <li>
                <a href>
                  <span class="badge bg-danger pull-right">4</span>
                  <span translate="header.navbar.new.EMAIL">邮箱</span>
                </a>
              </li>
            </ul>
          </li>
        </ul>
        <!-- / link and dropdown -->

        <!-- search form -->
        <form class="navbar-form navbar-form-sm navbar-left shift" ui-shift="prependTo" data-target=".navbar-collapse" role="search" ng-controller="TypeaheadDemoCtrl">
          <div class="form-group">
            <div class="input-group">
              <input type="text" ng-model="selected" typeahead="state for state in states | filter:$viewValue | limitTo:8" class="form-control input-sm bg-light no-border rounded padder" placeholder="搜索项目...">
              <span class="input-group-btn">
                <button type="submit" class="btn btn-sm bg-light rounded"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </div>
        </form>
        <!-- / search form -->

        <!-- nabar right -->
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle">
              <i class="icon-bell fa-fw"></i>
              <span class="visible-xs-inline">通告</span>
              <span class="badge badge-sm up bg-danger pull-right-xs">2</span>
            </a>
            <!-- dropdown -->
            <div class="dropdown-menu w-xl animated fadeInUp">
              <div class="panel bg-white">
                <div class="panel-heading b-light bg-light">
                  <strong>你有 <span>两条</span>公告</strong>
                </div>
                <div class="list-group">
                  <a href class="media list-group-item">
                    <span class="pull-left thumb-sm">
                      <img src="/admin-uploads/{{ session('master')->img }}" alt="..." class="img-circle">
                    </span>
                    <span class="media-body block m-b-none">
                      两条未读消息<br>
                      <small class="text-muted">十分钟前</small>
                    </span>
                  </a>
                  <a href class="media list-group-item">
                    <span class="media-body block m-b-none">
                      1.0初步发布<br>
                      <small class="text-muted">3天前</small>
                    </span>
                  </a>
                </div>
                <div class="panel-footer text-sm">
                  <a href class="pull-right"><i class="fa fa-cog"></i></a>
                  <a href="#notes" data-toggle="class:show animated fadeInRight">看到所有的通知</a>
                </div>
              </div>
            </div>
            <!-- / dropdown -->
          </li>
          <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle clear" data-toggle="dropdown">
              <span class="thumb-sm avatar pull-right m-t-n-sm m-b-n-sm m-l-sm">
                <img src="/admin-uploads/{{ session('master')->img }}" alt="...">
                <i class="on md b-white bottom"></i>
              </span>
              <span class="hidden-sm hidden-md">{{ session('master')->name }}</span> <b class="caret"></b>
            </a>
            <!-- dropdown -->
            <ul class="dropdown-menu animated fadeInRight w">
              <li class="wrapper b-b m-b-sm bg-light m-t-n-xs">
                <div>
                  <p>全栈工程师</p>
                </div>
                <progressbar value="60" class="progress-xs m-b-none bg-white"></progressbar>
              </li>
              <li>
                <a href>
                  <span class="badge bg-danger pull-right">30%</span>
                  <span>设置</span>
                </a>
              </li>
              <li>
                <a ui-sref="app.page.profile">外形</a>
              </li>
              <li>

                <a ui-sref="app.docs" href="{{ asset('/admin/pass') }}">
                  <span class="label bg-info pull-right">新的</span>
                  密码修改
              </li>

                <a ui-sref="app.docs">
                  <span class="label bg-info pull-right">新的</span>
                  帮助
                </a>
              </li>
              <li class="divider"></li>
               <li>
                  <a ui-sref="app.page.profile" href="{{ url('/admin/wait') }}">挂起</a>
                </li>
              <li>
                <a ui-sref="access.signin" href="{{ url('/admin/logout') }}">退出</a>
              </li>
            </ul>
            <!-- / dropdown -->
          </li>
        </ul>
        <!-- / navbar right -->

      </div>
      <!-- / navbar collapse -->
    </div>
    <!-- / navbar -->

    <!-- menu -->
    <div class="app-aside hidden-xs bg-dark">
      <div class="aside-wrap">
        <div class="navi-wrap">
          <!-- user -->
          <div class="clearfix hidden-xs text-center hide" id="aside-user">
            <div class="dropdown wrapper">
              <a ui-sref="app.page.profile">
                <span class="thumb-lg w-auto-folded avatar m-t-sm">
                  <img src="/admin-uploads/{{ session('master')->img }}" class="img-full" alt="...">
                </span>
              </a>
              <a href="#" data-toggle="dropdown" class="dropdown-toggle hidden-folded">
                <span class="clear">
                  <span class="block m-t-sm">
                    <strong class="font-bold text-lt">{{ session('master')->name }}</strong> 
                    <b class="caret"></b>
                  </span>
                  <span class="text-muted text-xs block">全栈工程师</span>
                </span>
              </a>
              <!-- dropdown -->
              <ul class="dropdown-menu animated fadeInRight w hidden-folded">
                <li class="wrapper b-b m-b-sm bg-info m-t-n-xs">
                  <span class="arrow top hidden-folded arrow-info"></span>
                  <div>
                    <p>WEB  架构师</p>
                  </div>
                  <progressbar value="60" type="white" class="progress-xs m-b-none dker"></progressbar>
                </li>
                <li>
                  <a href>设置</a>
                </li>
                <li>
                  <a ui-sref="app.page.profile">外形</a>
                </li>
                <li>
                  <a href>
                    <span class="badge bg-danger pull-right">3</span>
                    公告
                  </a>
                </li>
                <li class="divider"></li>
                <li>
                <li>

                  <a ui-sref="app.page.profile" href="{{ url('/admin/pass') }}">密码修改</a>
                </li>
                <li>
                  <a ui-sref="app.page.profile" href="{{ url('/admin/wait') }}">挂起</a>
                </li>
                <li>
                  <a ui-sref="access.signin" href="{{ url('/admin/logout') }}">退出</a>
                </li>
              </ul>
              <!-- / dropdown -->
            </div>
            <div class="line dk hidden-folded"></div>
          </div>
          <!-- / user -->

          <!-- nav -->
          <nav ui-nav class="navi">
            <ul class="nav">
              <li class="hidden-folded padder m-t m-b-sm text-muted text-xs">

              <li class="line dk"></li>
              <li class="hidden-folded padder m-t m-b-sm text-muted text-xs">
                <span translate="aside.nav.components.COMPONENTS">后台模块</span>
              </li>
              <li>
                <a href class="auto">      
                  <span class="pull-right text-muted">
                    <i class="fa fa-fw fa-angle-right text"></i>
                    <i class="fa fa-fw fa-angle-down text-active"></i>
                  </span>
                  <i class="fa icon-users"></i>
                  <span>用户管理</span>
                </a>
                <ul class="nav nav-sub dk">
                    <li ui-sref-active="active">
                    <a ui-sref="layout.app">
                      <i class="fa fa-plus"></i>
                      <span>用户添加</span>
                    </a>
                  </li>   
                  <li ui-sref-active="active">
                    <a ui-sref="layout.app">
                     <i class="fa fa-columns"></i>
                      <span>用户浏览</span>
                    </a>
                  </li>     
                </ul>
              </li>
              <li>
                <a href class="auto">      
                  <span class="pull-right text-muted">
                    <i class="fa fa-fw fa-angle-right text"></i>
                    <i class="fa fa-fw fa-angle-down text-active"></i>
                  </span>
                  <i class="glyphicon glyphicon-folder-open"></i>

                  <span>帖子管理</span>
                </a>
                <ul class="nav nav-sub dk">
                  <li ui-sref-active="active">
                    <a href="{{ url('/admin/article') }}">
                    <i class="fa fa-columns"></i>
                      <span>帖子浏览</span>
                    </a>
                  </li>     
                </ul>
              </li>            

              </li>                                         
                    <li>
                <a href class="auto">      
                  <span class="pull-right text-muted">
                    <i class="fa fa-fw fa-angle-right text"></i>
                    <i class="fa fa-fw fa-angle-down text-active"></i>
                  </span>
                 <i class="icon-briefcase"></i>
                  <span>评论管理</span>
                </a>
                <ul class="nav nav-sub dk">
                  <li ui-sref-active="active">
                    <a  href="{{url('/admin/comment')}}">
                     <i class="icon-briefcase"></i>
                      <span>评论浏览</span>
                    </a>
                  </li>     
                </ul>
              </li>
                <li>
                <a href class="auto">      
                  <span class="pull-right text-muted">
                    <i class="fa fa-fw fa-angle-right text"></i>
                    <i class="fa fa-fw fa-angle-down text-active"></i>
                  </span>
                  <i class="glyphicon glyphicon-tasks"></i>
                  <span>分类管理</span>
                </a>
                <ul class="nav nav-sub dk">
                    <li ui-sref-active="active">
                    <a ui-sref="layout.app"  href="{{ url('/admin/category/create') }}">
                     <i class="fa fa-plus"></i>
                      <span>分类添加</span> 
                    </a>
                  </li>   
                  <li ui-sref-active="active">
                    <a ui-sref="layout.app" href="{{ url('/admin/category') }}">

                    <i class="fa fa-columns"></i>
                      <span>分类浏览</span>
                    </a>
                  </li>     
                </ul>
              </li>              
              <li>
                <a href class="auto">      
                  <span class="pull-right text-muted">
                    <i class="fa fa-fw fa-angle-right text"></i>
                    <i class="fa fa-fw fa-angle-down text-active"></i>
                  </span>
                  <i class="fa fa-chain"></i>
                  <span>友情链接</span>
                </a>
                <ul class="nav nav-sub dk">
                    <li ui-sref-active="active">
                    <a ui-sref="layout.app" href="{{ url('/admin/link/create') }}">
                     <i class="fa fa-plus"></i>
                      <span>添加链接</span>
                    </a>
                  </li>   
                  <li ui-sref-active="active">

                    <a ui-sref="layout.app" href="{{ url('/admin/link') }}">
                     <i class="fa fa-columns"></i>
                      <span>链接浏览</span>
                    </a>
                  </li>     
                </ul>
              </li>             
               <li>
                <a href class="auto">      
                  <span class="pull-right text-muted">
                    <i class="fa fa-fw fa-angle-right text"></i>
                    <i class="fa fa-fw fa-angle-down text-active"></i>
                  </span>
                  <i class="glyphicon glyphicon-compressed"></i>

                  <span>广告管理</span>
                </a>
                <ul class="nav nav-sub dk">
                    <li ui-sref-active="active">

                    <a ui-sref="layout.app" href="{{ url('/admin/advert/add') }}">
                    <span>添加广告</span>
                    </a>
                  </li>   
                  <li ui-sref-active="active">
                    <a ui-sref="layout.app" href="{{ url('/admin/advert/index') }}">
                    <span>浏览广告</span>

                    </a>
                  </li>     
                </ul>
              </li>
              <li>
                <a href class="auto">      
                  <span class="pull-right text-muted">
                    <i class="fa fa-fw fa-angle-right text"></i>
                    <i class="fa fa-fw fa-angle-down text-active"></i>
                  </span>


                  <i class="glyphicon glyphicon-bullhorn"></i>
                  <span>举报管理</span>
                </a>
                <ul class="nav nav-sub dk">
                  <li ui-sref-active="active">
                    <a ui-sref="layout.app">
                     <i class="fa fa-columns"></i>
                      <span>浏览举报</span>
                    </a>
                  </li>     
                </ul>
              </li>
              <li>
                <a href class="auto">
                  <span class="pull-right text-muted">
                    <i class="fa fa-fw fa-angle-right text"></i>
                    <i class="fa fa-fw fa-angle-down text-active"></i>
                  </span>
                  <i class="icon-wrench"></i>
                  <span>系统设置</span>
                </a>
                <ul class="nav nav-sub dk">
                  <li ui-sref-active="active">
                    <a ui-sref="layout.app" href="{{ asset('/admin/config/create') }}">
                      <i class="fa fa-plus"></i>
                      <span>添加网站配置</span>
                    </a>
                  </li>
                  <li ui-sref-active="active">
                    <a ui-sref="layout.app" href="{{ asset('/admin/config') }}">
                      <i class="fa fa-columns"></i>
                      <span>网站配置</span>
                    </a>
                  </li>
                </ul>
              </li>

              <li class="line dk hidden-folded"></li>

              <li class="hidden-folded padder m-t m-b-sm text-muted text-xs">          
                <span translate="aside.nav.your_stuff.YOUR_STUFF">你的东西</span>
              </li>  
              <li>
                <a ui-sref="app.page.profile">
                  <i class="icon-user icon text-success-lter"></i>
                  <b class="badge bg-success pull-right">30%</b>
                  <span translate="aside.nav.your_stuff.PROFILE">外形</span>
                </a>
              </li>
              <li>
                <a ui-sref="app.docs">
                  <i class="icon-question icon"></i>
                  <span translate="aside.nav.your_stuff.DOCUMENTS">文档</span>
                </a>
              </li>
            </ul>
          </nav>
          <!-- nav -->

          <!-- aside footer -->
          <div class="wrapper m-t">
            <div class="text-center-folded">
              <span class="pull-right pull-none-folded">60%</span>
              <span class="hidden-folded" translate="aside.MILESTONE">里程碑</span>
            </div>
            <div class="progress progress-xxs m-t-sm dk">
              <div class="progress-bar progress-bar-info" style="width: 60%;">
              </div>
            </div>
            <div class="text-center-folded">
              <span class="pull-right pull-none-folded">35%</span>
              <span class="hidden-folded" translate="aside.RELEASE">发布</span>
            </div>
            <div class="progress progress-xxs m-t-sm dk">
              <div class="progress-bar progress-bar-primary" style="width: 35%;">
              </div>
            </div>
          </div>
          <!-- / aside footer -->
        </div>
      </div>
    </div>
    <!-- / menu -->

    <!-- content -->
    <div class="app-content">
      <div ui-butterbar></div>
      <a href class="off-screen-toggle hide" data-toggle="class:off-screen" data-target=".app-aside" ></a>
      <div class="app-content-body fade-in-up">
        <!-- COPY the content from "tpl/" -->

@yield('content')

        <!-- PASTE above -->
      </div>
    </div>
    <!-- /content -->

    <!-- aside right -->
    <div class="app-aside-right pos-fix no-padder w-md w-auto-xs bg-white b-l animated fadeInRight hide">
      <div class="vbox">
        <div class="wrapper b-b b-t b-light m-b">
          <a href class="pull-right text-muted text-md" data-toggle="class:show" data-target=".app-aside-right"><i class="icon-close"></i></a>
          Chat
        </div>
        <div class="row-row">
          <div class="cell">
            <div class="cell-inner padder">
              <!-- chat list -->
              <div class="m-b">
                <a href class="pull-left thumb-xs avatar"><img src="img/a2.jpg" alt="..."></a>
                <div class="clear">
                  <div class="pos-rlt wrapper-sm b b-light r m-l-sm">
                    <span class="arrow left pull-up"></span>
                    <p class="m-b-none">Hi John, What's up...</p>
                  </div>
                  <small class="text-muted m-l-sm"><i class="fa fa-ok text-success"></i> 2 minutes ago</small>
                </div>
              </div>
              <div class="m-b">
                <a href class="pull-right thumb-xs avatar"><img src="img/a3.jpg" class="img-circle" alt="..."></a>
                <div class="clear">
                  <div class="pos-rlt wrapper-sm bg-light r m-r-sm">
                    <span class="arrow right pull-up arrow-light"></span>
                    <p class="m-b-none">Lorem ipsum dolor :)</p>
                  </div>
                  <small class="text-muted">1 minutes ago</small>
                </div>
              </div>
              <div class="m-b">
                <a href class="pull-left thumb-xs avatar"><img src="img/a2.jpg" alt="..."></a>
                <div class="clear">
                  <div class="pos-rlt wrapper-sm b b-light r m-l-sm">
                    <span class="arrow left pull-up"></span>
                    <p class="m-b-none">Great!</p>
                  </div>
                  <small class="text-muted m-l-sm"><i class="fa fa-ok text-success"></i>Just Now</small>
                </div>
              </div>
              <!-- / chat list -->
            </div>
          </div>
        </div>
        <div class="wrapper m-t b-t b-light">
          <form class="m-b-none">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Say something">
              <span class="input-group-btn">
                <button class="btn btn-default" type="button">SEND</button>
              </span>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- / aside right -->


    <!-- footer -->
    <div class="app-footer wrapper b-t bg-light">
      <span class="pull-right">1.0.0 <a href="#app" class="m-l-sm text-muted"><i class="fa fa-long-arrow-up"></i></a></span>
      &copy; 2017  兄弟模板  ❤ 用爱去收集 <a href="http://www.guozishi.shop/" target="_blank" title="兄弟模板">
    </div>
    <!-- / footer -->
  </div>
  <!-- jQuery -->
  <script src="{{ url('/admin-template/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ url('/admin-template/vendor/jquery/bootstrap.js') }}"></script>
  <script src="{{ url('/layer/layer.js') }}"></script>

  <script type="text/javascript">
    +function ($) {
      $(function(){
        // class
        $(document).on('click', '[data-toggle^="class"]', function(e){
          e && e.preventDefault();
          console.log('abc');
          var $this = $(e.target), $class , $target, $tmp, $classes, $targets;
          !$this.data('toggle') && ($this = $this.closest('[data-toggle^="class"]'));
          $class = $this.data()['toggle'];
          $target = $this.data('target') || $this.attr('href');
          $class && ($tmp = $class.split(':')[1]) && ($classes = $tmp.split(','));
          $target && ($targets = $target.split(','));
          $classes && $classes.length && $.each($targets, function( index, value ) {
            if ( $classes[index].indexOf( '*' ) !== -1 ) {
              var patt = new RegExp( '\\s' + 
                  $classes[index].
                    replace( /\*/g, '[A-Za-z0-9-_]+' ).
                    split( ' ' ).
                    join( '\\s|\\s' ) + 
                  '\\s', 'g' );
              $($this).each( function ( i, it ) {
                var cn = ' ' + it.className + ' ';
                while ( patt.test( cn ) ) {
                  cn = cn.replace( patt, ' ' );
                }
                it.className = $.trim( cn );
              });
            }
            ($targets[index] !='#') && $($targets[index]).toggleClass($classes[index]) || $this.toggleClass($classes[index]);
          });
          $this.toggleClass('active');
        });

        // collapse nav
        $(document).on('click', 'nav a', function (e) {
          var $this = $(e.target), $active;
          $this.is('a') || ($this = $this.closest('a'));
          
          $active = $this.parent().siblings( ".active" );
          $active && $active.toggleClass('active').find('> ul:visible').slideUp(200);
          
          ($this.parent().hasClass('active') && $this.next().slideUp(200)) || $this.next().slideDown(200);
          $this.parent().toggleClass('active');
          
          $this.next().is('ul') && e.preventDefault();

          setTimeout(function(){ $(document).trigger('updateNav'); }, 300);      
        });
      });
    }(jQuery);
  </script>


@yield('script')


@yield('js')

</body>
</html>

<script type="text/javascript">
       $('#ale').hide(3000);
    </script>

</body>
</html>


