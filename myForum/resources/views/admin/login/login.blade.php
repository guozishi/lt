<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>兄弟论坛终端管理系统 1.3</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <script type="text/javascript" src="{{ asset('assets/js/jquery.min.js') }}"></script>

   <!--  <link rel="stylesheet" href="assets/css/style.css"> -->
    <link rel="stylesheet" href="{{ asset('assets/css/loader-style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/signin.css') }}">

    <link rel="shortcut icon" href="{{ asset('assets/ico/minus.png') }}">
</head>

<body> 
    <!-- Preloader -->
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>
    
    <div class="container">



        <div class="" id="login-wrapper">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div id="logo-login">
                        <h1>兄弟论坛管理系统
                            <span>v1.3</span>
                        </h1>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="account-box"> 
                        <form role="form" action="{{ url('/admin/login') }}" method="post">
                            <div class="form-group">
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

                                <!--a href="#" class="pull-right label-forgot">Forgot email?</a-->
                                 {{ csrf_field() }}
                                <label for="inputUsernameEmail">用户名</label>
                                <input type="text" id="inputUsernameEmail" class="form-control" name="name" value="{{ old('name') }}">
                            </div>
                            <div class="form-group">
                                <!--a href="#" class="pull-right label-forgot">Forgot password?</a-->
                                <label for="inputPassword">密码</label>
                                <input type="password" id="inputPassword" class="form-control" name="password">
                            </div>
                            <div class="checkbox pull-left">
                                <label>
                                    <input type="checkbox" name="rem">记住用户名</label>
                            </div>
                            <button class="btn btn btn-primary pull-right" type="submit">
                                登 录
                            </button>
                        </form>
                        <a class="forgotLnk" href="index.html"></a>
                        <div class="or-box">
                          
                            <center><span class="text-center login-with">登录 或<b> 注册</b></span></center>
                            <div class="row">
                                <div class="col-md-6 row-block">
                                    <a href="index.html" class="btn btn-facebook btn-block">
                                        <span class="entypo-facebook space-icon"></span>Facebook</a>
                                </div>
                                <div class="col-md-6 row-block">
                                    <a href="index.html" class="btn btn-twitter btn-block">
                                        <span class="entypo-twitter space-icon"></span>Twitter</a>
                                        
                                </div>

                            </div>
                            <div style="margin-top:25px" class="row">
                                <div class="col-md-6 row-block">
                                    <a href="index.html" class="btn btn-google btn-block"><span class="entypo-gplus space-icon"></span>Google +</a>
                                </div>
                                <div class="col-md-6 row-block">
                                    <a href="index.html" class="btn btn-instagram btn-block"><span class="entypo-instagrem space-icon"></span>Instagram</a>
                                </div>

                            </div>
                        </div>
                        <hr>
                        <div class="row-block">
                            <div class="row">
                                <div class="col-md-12 row-block">
                                    <a href="index.html" class="btn btn-primary btn-block">第三方登录</a>
                                </div>
                            </div>
                        </div
                        <div class="row-block">
	                        <div class="row">
		                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

 		<p>&nbsp;</p>
        <div style="text-align:center;margin:0 auto;">
            <h6 style="color:#fff;">
				北京兄弟网络科技有限公司 版权所有 京IP备07021605号</h6>
        </div>

    </div>
    <div id="test1" class="gmap3"></div>



    <!--  END OF PAPER WRAP -->




    <!-- MAIN EFFECT -->
    <script type="text/javascript" src="{{ asset('assets/js/preloader.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/bootstrap.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/load.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/main.js') }}"></script>

    <script type="text/javascript" src="assets/js/map/gmap3.js"></script>
    <script type="text/javascript">
    $(function() {

        $("#test1").gmap3({
            marker: {
                latLng: [-7.782893, 110.402645],
                options: {
                    draggable: true
                },
                events: {
                    dragend: function(marker) {
                        $(this).gmap3({
                            getaddress: {
                                latLng: marker.getPosition(),
                                callback: function(results) {
                                    var map = $(this).gmap3("get"),
                                        infowindow = $(this).gmap3({
                                            get: "infowindow"
                                        }),
                                        content = results && results[1] ? results && results[1].formatted_address : "no address";
                                    if (infowindow) {
                                        infowindow.open(map, marker);
                                        infowindow.setContent(content);
                                    } else {
                                        $(this).gmap3({
                                            infowindow: {
                                                anchor: marker,
                                                options: {
                                                    content: content
                                                }
                                            }
                                        });
                                    }
                                }
                            }
                        });
                    }
                }
            },
            map: {
                options: {
                    zoom: 15
                }
            }
        });

    });
    $("#alertError").fadeOut(3000);
    $("#alertSuccess").fadeOut(3000);
    $("#error").fadeOut(3000);
    </script>




</body>

</html>
