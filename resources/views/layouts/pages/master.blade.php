<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Top Navigation</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="{!! asset('bootstrap-theme/bootstrap/css/bootstrap.min.css') !!}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{!! asset('bootstrap-theme/dist/css/AdminLTE.min.css') !!}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{!! asset('bootstrap-theme/dist/css/skins/_all-skins.min.css') !!}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>


<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

    <header class="main-header">
        <nav class="navbar navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <a href="{!! url('/') !!}" class="navbar-brand"><b>Middleman</b>Ordering</a>
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                        <i class="fa fa-bars"></i>
                    </button>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="{!! Request::is('/')?'active':' ' !!}"><a href="{!! url('/') !!}">Home <span class="sr-only">(current)</span></a></li>
                        <li class="{!! Request::is('instruction')?'active':' ' !!}"><a href="{!! url('instruction') !!}">How to use</a></li>
                        <li class="{!! Request::is('about')?'active':'' !!}"><a href="{!! url('about') !!}">About</a></li>

                    </ul>

                </div><!-- /.navbar-collapse -->

                {{--Nav Bar right menu--}}
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <li><a href="{!! url('login') !!}" class="btn"><i class="fa fa-sign-in"></i>Login</a></li>
                        <li><a href="{!! url('register') !!}" class="btn"><i class="fa fa-sign-out"></i>Register</a></li>
                    </ul>
                </div><!-- / .navbar-custom-menu-->
            </div><!-- /.container-fluid -->
        </nav>
    </header>

    @yield('content')


<footer class="main-footer">
    <div class="container">
        <div class="pull-right hidden-xs">
            <b>Version</b> 1.0.0
        </div>
        <strong>Copyright &copy; 2015-2016 <a href="http://codesastra.com">CodeSastra</a>.</strong> All rights reserved.
    </div><!-- /.container -->
</footer>
</div><!-- ./wrapper -->

<!-- jQuery 2.1.4 -->
<script src="{!! asset('bootstrap-theme/plugins/jQuery/jQuery-2.1.4.min.js') !!}"></script>
<!-- Bootstrap 3.3.5 -->
<script src="{!! asset('bootstrap-theme/bootstrap/js/bootstrap.min.js') !!}"></script>
<!-- SlimScroll -->
<script src="{!! asset('bootstrap-theme/plugins/slimScroll/jquery.slimscroll.min.js') !!}"></script>
<!-- FastClick -->
<script src="{!! asset('bootstrap-theme/plugins/fastclick/fastclick.min.js') !!}"></script>
<!-- AdminLTE App -->
<script src="{!! asset('bootstrap-theme/dist/js/app.min.js') !!}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{!! asset('bootstrap-theme/dist/js/demo.js') !!}"></script>
</body>
</html>