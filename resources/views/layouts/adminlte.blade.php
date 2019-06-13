<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Illusix Test Task</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/bower_components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/bower_components/Ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="/dist/css/skins/skin-blue.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        <header class="main-header">
            <a href="/" class="logo">
                <span class="logo-mini">TT</span>
                <span class="logo-lg">Test Task</span>
            </a>
            <nav class="navbar navbar-static-top" role="navigation">
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        @guest
                            <li>
                                <a href="{{ route('login') }}">Войти</a>
                            </li>
                            <li>
                                <a href="{{ route('register') }}">Регистрация</a>
                            </li>
                        @else
                            <li>
                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    Выйти
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        @endguest
                    </ul>
                </div>
            </nav>
        </header>
        <aside class="main-sidebar">
            <section class="sidebar">
                <ul class="sidebar-menu" data-widget="tree">
                    <li class="header">&nbsp;</li>
                    <li><a href="/recipes"><i class="fa fa-link"></i> <span>Мои рецепты</span></a></li>
                    <li><a href="/ingredients"><i class="fa fa-link"></i> <span>Ингредиенты</span></a></li>
                </ul>
            </section>
        </aside>
        <div class="content-wrapper">
            <section class="content-header">
                <div class="col-xs-12">
                    <div class="col-xs-6">
                        <h4>@yield('title')</h4>
                    </div>
                    <div class="col-xs-6 text-right">
                        @yield('addbutton')
                    </div>
                </div>
            </section>
            <section class="content container-fluid">
                <div class="col-xs-12">
                    @yield('content')
                </div>
            </section>
        </div>
        <footer class="main-footer">
            Illusix Test Task (Tarkaev)
        </footer>
        <div class="control-sidebar-bg"></div>
    </div>
    @yield('modals')
    <script src="/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="/dist/js/adminlte.min.js"></script>
    <script src="/js/create_ingredient.js"></script>
</body>
</html>