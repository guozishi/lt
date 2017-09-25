@extends('admin.layouts.layout')

@section('content')
    <div class="hbox hbox-auto-xs hbox-auto-sm">
        <div class="col">
            <div style="background:url(admin-template/img/c4.jpg) center center; background-size:cover">
                <div class="wrapper-lg bg-white-opacity">
                    <div class="row m-t">
                        <div class="col-sm-7">
                            <a href class="thumb-lg pull-left m-r">
                                <img src="admin-uploads/{{ session('master')->img }}" class="img-circle">
                            </a>
                            <div class="clear m-b">
                                <div class="m-b m-t-sm">
                                    <span class="h3 text-black">{{ session('master')->name }}</span>
                                    <small class="m-l">中国, 北京</small>
                                </div>
                                <p class="m-b">
                                    <a href class="btn btn-sm btn-bg btn-rounded btn-default btn-icon"><i class="fa fa-twitter"></i></a>
                                    <a href class="btn btn-sm btn-bg btn-rounded btn-default btn-icon"><i class="fa fa-facebook"></i></a>
                                    <a href class="btn btn-sm btn-bg btn-rounded btn-default btn-icon"><i class="fa fa-google-plus"></i></a>
                                </p>
                                <a href class="btn btn-sm btn-success btn-rounded">Follow</a>
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="pull-right pull-none-xs text-center">
                                <a href class="m-b-md inline m">
                                    <span class="h3 block font-bold">2k</span>
                                    <small>Followers</small>
                                </a>
                                <a href class="m-b-md inline m">
                                    <span class="h3 block font-bold">250</span>
                                    <small>Following</small>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wrapper bg-white b-b">
                <ul class="nav nav-pills nav-sm">
                    <li class="active"><a href>流动</a></li>
                    <li><a href>侧面</a></li>
                    <li><a href>信息</a></li>
                </ul>
            </div>
            <div class="padder">
                <div class="streamline b-l b-info m-l-lg m-b padder-v">
                    <div>
                        <a class="pull-left thumb-sm avatar m-l-n-md">
                            <img src="admin-uploads/{{ session('master')->img }}" class="img-circle" alt="...">
                        </a>
                        <div class="m-l-lg">
                            <div class="m-b-xs">
                                <a href class="h4">{{ session('master')->name }}</a>
                                <span class="text-muted m-l-sm pull-right">
                当下
              </span>
                            </div>
                            <div class="m-b">
                                <div>时常在想，究竟是怎样的束缚让我们原本纯净灵魂沾染俗世的黑暗与不堪；也时常在想，我们在生命最后一刻时会不会觉得是一种解脱。 </div>
                                <div class="m-t-sm">
                                    <a href class="text-muted m-xs"><i class="icon-action-redo"></i></a>
                                    <a href class="text-muted m-xs"><i class="icon-star"></i></a>
                                    <a href class="text-muted m-xs"><i class="icon-refresh"></i> 13</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- .comment-reply -->
                    <div class="m-l-lg">
                        <a class="pull-left thumb-sm avatar">
                            <img src="admin-uploads/15055394652141.jpg" alt="...">
                        </a>
                        <div class="m-l-xxl panel b-a">
                            <div class="panel-heading pos-rlt">
                                <span class="arrow left pull-up"></span>
                                <span class="text-muted m-l-sm pull-right">
                10m 前
              </span>
                                <a href>{{ session('master')->name }}</a>
                                九月，梦一场秋色的烟雨
                            </div>
                        </div>
                    </div>
                    <!-- / .comment-reply -->
                    <div>
                        <a class="pull-left thumb-sm avatar m-l-n-md">
                            <img src="admin-uploads/{{ session('master')->img }}" alt="...">
                        </a>
                        <div class="m-l-lg m-b-lg panel b-a bg-light lt">
                            <div class="panel-heading pos-rlt b-light">
                                <span class="arrow arrow-light left"></span>
                                <a href>回复我</a>
                                <span class="text-muted m-l-sm pull-right">
                1h 前
              </span>
                            </div>
                            <div class="panel-body">
                                <div>菩提本无树，明镜亦非台，本就无一物，何处惹尘埃。</div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <a class="pull-left thumb-sm avatar m-l-n-md">
                            <img src="admin-uploads/15055401385431.jpg" class="img-circle" alt="...">
                        </a>
                        <div class="m-l-lg m-b-lg">
                            <div class="m-b-xs">
                                <a href class="h4">Jessica</a>
                                <span class="text-muted m-l-sm pull-right">
                3h 前
              </span>
                            </div>
                            <div class="m-b">
                                <div class="m-b">人间九月芳菲尽，流年弹指一挥间，待到浮生繁华落尽后，择一处依山傍水静然之地，盖一间不大不小的茅屋，烹煮一壶远离世俗的清茶，打坐在窗前檐下，听一场绵绵青雨的对话。 </div>
                                <img src="admin-uploads/15055401385431.jpg" class="b b-a wrapper-xs bg-white img-responsive">
                                <div class="m-t-sm">
                                    <a href class="text-muted m-xs"><i class="icon-action-redo"></i></a>
                                    <a href class="text-muted m-xs"><i class="icon-star"></i></a>
                                    <a href class="text-muted m-xs"><i class="icon-refresh"></i> 13</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <a class="pull-left thumb-sm avatar m-l-n-md">
                            <img src="admin-uploads/15055395724046.jpg" class="img-circle" alt="...">
                        </a>
                        <div class="m-l-lg m-b-lg">
                            <div class="m-b-xs">
                                <a href class="h4">Fisio</a>
                                <span class="text-muted m-l-sm pull-right">
                4h 前
              </span>
                            </div>
                            <div>
                                <div class="m-b">也许我也是自以为是的固执的人们之一,我或许也有许多数不清的秘密的大门,但是,这就是我眼中所谓的人生,这就够了</div>
                                <div class="panel panel-default m-t-md m-b-n-sm pos-rlt">
                                    <form>
                                        <textarea class="form-control no-border" rows="3" placeholder="你的回复..."></textarea>
                                    </form>
                                    <div class="panel-footer bg-light lter">
                                        <button class="btn btn-info pull-right btn-sm">回复</button>
                                        <ul class="nav nav-pills nav-sm">
                                            <li><a href><i class="fa fa-camera text-muted"></i></a></li>
                                            <li><a href><i class="fa fa-video-camera text-muted"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <a class="pull-left thumb-sm avatar m-l-n-md">
                            <img src="admin-uploads/15055394652140.jpg" alt="...">
                        </a>
                        <div class="m-l-lg panel b-a">
                            <div class="panel-heading pos-rlt b-b b-light">
                                <span class="arrow left"></span>
                                <a href>Peter</a>
                                <label class="label bg-light m-l-xs">VIP</label>
                                <span class="text-muted m-l-sm pull-right">
                9h 前
              </span>
                            </div>
                            <div class="panel-body">
                                <blockquote>
                                    <p>愿我们都不是平庸的过完此生，而是在舒适区之外，不断地努力创造真正属于自己的舒适。</p>
                                    <small>甘于舒适，甘于平庸， <cite title="Source Title">人生只有充满后悔</cite></small>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col w-lg bg-light lter b-l bg-auto">
            <div class="wrapper">
                <div class="">
                    <h4 class="m-t-xs m-b-xs">推荐关注</h4>
                    <ul class="list-group no-bg no-borders pull-in">
                        <li class="list-group-item">
                            <a herf class="pull-left thumb-sm avatar m-r">
                                <img src="admin-uploads/{{ session('master')->img }}" alt="..." class="img-circle">
                                <i class="on b-white bottom"></i>
                            </a>
                            <div class="clear">
                                <div><a href>{{ session('master')->name }}</a></div>
                                <small class="text-muted">Designer, Blogger</small>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <a herf class="pull-left thumb-sm avatar m-r">
                                <img src="admin-uploads/15055395724046.jpg" alt="..." class="img-circle">
                                <i class="on b-white bottom"></i>
                            </a>
                            <div class="clear">
                                <div><a href>Mogen Polish</a></div>
                                <small class="text-muted">Writter, Mag Editor</small>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <a herf class="pull-left thumb-sm avatar m-r">
                                <img src="admin-uploads/15055401385431.jpg" alt="..." class="img-circle">
                                <i class="busy b-white bottom"></i>
                            </a>
                            <div class="clear">
                                <div><a href>Joge Lucky</a></div>
                                <small class="text-muted">Art director, Movie Cut</small>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <a herf class="pull-left thumb-sm avatar m-r">
                                <img src="admin-uploads/15055394652140.jpg" alt="..." class="img-circle">
                                <i class="away b-white bottom"></i>
                            </a>
                            <div class="clear">
                                <div><a href>Folisise Chosielie</a></div>
                                <small class="text-muted">Musician, Player</small>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="panel b-a">
                    <h4 class="font-thin padder">最新消息</h4>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <p>欢迎 <a href class="text-info">@ {{ session('master')->name }}</a> 越努力,越幸运</p>
                            <small class="block text-muted"><i class="fa fa-fw fa-clock-o"></i> 2 minuts 前</small>
                        </li>
                        <li class="list-group-item">
                            <p>南辞<a href class="text-info">@Jonathan George</a> 不去做任何的改变，继而，这种舒适区便渐渐地形成了。</p>
                            <small class="block text-muted"><i class="fa fa-fw fa-clock-o"></i> 1 hour 前</small>
                        </li>
                        <li class="list-group-item">
                            <p><a href class="text-info">@Josh Long</a> 倘若你不想在平庸中过一辈子，那为什么不逼自己一把，去改变现状，遇见更好的自己呢？</p>
                            <small class="block text-muted"><i class="fa fa-fw fa-clock-o"></i> 2 hours 前</small>
                        </li>
                    </ul>
                </div>
                <div class="panel b-light clearfix">
                    <div class="panel-body">
                        <a href class="thumb pull-left m-r">
                            <img src="" class="img-circle">
                        </a>
                        <div class="clear">
                            <a href class="text-info">@Mike Mcalidek <i class="fa fa-twitter"></i></a>
                            <small class="block text-muted">兄弟论坛,你我同在</small>
                            <a href class="btn btn-xs btn-success m-t-xs">Follow</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection