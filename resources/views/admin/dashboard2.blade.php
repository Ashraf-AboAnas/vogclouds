<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> فوق كلاود</title>
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/icon.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/ar.css')}}" rel="stylesheet" class="lang_css arabic">
    @yield('style')

    <!-- HTML5 shim and Respond.js')}} for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js')}} doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js')}}"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js')}}"></script>
    <![endif]-->
</head>
<body>
<div class="container-fluid">
    <!--Start header-->
    <div class="row header_section">
        <div class="col-sm-3 col-xs-12 logo_area bring_right">
            <h1 class="inline-block"><img src="{{asset('img/logo.png')}}" alt="">لوحة تحكم</h1>
            <span class="glyphicon glyphicon-align-justify bring_left open_close_menu" data-toggle="tooltip"
                  data-placement="right" title="Tooltip on left"></span>
        </div>
        <div class="col-sm-3 col-xs-12 head_buttons_area bring_right hidden-xs">
            <div class="inline-block messages bring_right">
                <span class="glyphicon glyphicon-envelope" data-toggle="tooltip" data-placement="left"
                      title="الرسائل"><span class="notifications">9</span></span>
            </div>
            <div class="inline-block full_screen bring_right hidden-xs">
                <span class="glyphicon glyphicon-fullscreen" data-toggle="tooltip" data-placement="left"
                      title="شاشة كاملة"></span>
            </div>
        </div>
        <div class=" col-sm-4 col-xs-12 user_header_area bring_left left_text">

            <div class="user_info inline-block">
                <img src="{{asset('img/user.jpg')}}" alt="" class="img-circle">
                <span class="h4 nomargin user_name">{{Auth::user()->name}}</span>
                <span class="glyphicon glyphicon-cog"></span>
            </div>
        </div>
    </div>
    <!--/End header-->

    <!--Start body container section-->
    <div class="row container_section">

        <!--Start left sidebar-->
        <div class="user_details close_user_details  bring_left">
            <div class="user_area">
                <img class="img-thumbnail img-rounded bring_right" src="{{asset('img/user.jpg')}}">

            <h1 class="h3">{{Auth::user()->name}}</h1>

                <p><a href="">بيانات المستخدم</a></p>

                <p><a href="">تغيير كلمة المرور</a></p>

                <p><a href="">المساعدة</a></p>
            </div>

        </div>
        <!--/End left sidebar-->

        <!--Start Side bar main menu-->
        <div class="main_sidebar bring_right">
            <div class="main_sidebar_wrapper">
                <form class="form-inline search_box text-center">
                    <div class="form-group">
                        <input type="search" class="form-control" placeholder="كلمة البحث">
                        <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span>
                        </button>
                    </div>
                </form>

                <ul>
                <li><span class="glyphicon glyphicon-home"></span><a href="{{route('dashboard')}}">الصفحة الرئيسية</a></li>
                    <li><span class="glyphicon glyphicon-user"></span><a href="">إدارة محتوى الموقع</a>
                        <ul class="drop_main_menu">
                            <li><a href="#">صفحات</a></li>
                            <li><a href="view_all_users.html">بيانات الموقع</a></li>
                        </ul>
                    </li>
                    <li><span class="glyphicon glyphicon-user"></span><a href="">إدارة التذاكر </a>
                        <ul class="drop_main_menu">
                            <li><a href="add_new_user.html">إضافة جديد</a></li>
                            <li><a href="view_all_users.html">عرض الكل</a></li>
                        </ul>
                    </li>
                    <li><span class="glyphicon glyphicon-edit"></span><a href="">المواضييع والمقالات</a>
                        <ul class="drop_main_menu">
                            <li><a href="add_new_topic.html">إضافة جديد</a></li>
                            <li><a href="view_all_topics.html">عرض الكل</a></li>
                        </ul>
                    </li>
                    <li><span class="glyphicon glyphicon-picture"></span><a href="">البوم الصور</a>
                        <ul class="drop_main_menu">
                            <li><a href="add_new_photo.html">إضافة جديد</a></li>
                            <li><a href="view_all_photos.html">عرض الكل</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!--/End side bar main menu-->

        <!--Start Main content container-->
        <div class="main_content_container">
            <div class="main_container  main_menu_open">
            @yield('content')
                <!--Start system bath-->
    </div>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script type="text/javascript" src="{{asset('js/jquery-2.1.4.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/js.js')}}"></script>
@yield('script')

</body>

</html>
