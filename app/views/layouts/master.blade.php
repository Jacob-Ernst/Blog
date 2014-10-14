<html>
<head>
    <title>Bloggy Wog</title>
    <!--add bootstrap and jquery-->
    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src='/jquery-1.11.1.min.js'></script>
    <script type="text/javascript" src="/bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/font-awesome-4.2.0/css/font-awesom.min.css">
    <style type="text/css" media="screen">
        body{
            background-image: url('/img/congruent_pentagon/congruent_pentagon.png')
        }
        nav{
            background-image: url('/img/sprinkles/sprinkles.png')
        }
    </style>
    @yield('top-script')
</head>
<body>
    <!-- standard heading -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{{ action('PostsController@index') }}}">Bloggy Wog</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li><a href="#">Link</a></li>
          </ul>
          <form class="navbar-form navbar-left" role="search" method='GET' action="{{ action('PostsController@index')}}">
              <input type="text" id='search' name='search'class="form-control" placeholder="Search">
            <div class="form-group">
                <span>
                    <button class='btn btn-default'><i class='fa fa-search'></i></button>
                </span>
            </div>
          </form>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Link</a></li>
            
              @if(Auth::check())
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{{Auth::user()->first_name}}} {{{Auth::user()->last_name}}}<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="{{{ action('HomeController@doLogout') }}}">Logout</a></li>
                        <li class="divider"></li>
                        <li><a href="{{{ action('PostsController@create') }}}">New Post</a></li>
                    </ul>
                </li>    
              @else
                <li><a href="{{{ action('HomeController@showLogin') }}}">Login</a></li>
              @endif
          </ul>
        </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    
    
    <div class= 'container'>
        <div class='row'>
            <div class='col-md-8 col-md-offset-2'>
                @if (Session::has('successMessage'))
                    <div class="alert alert-success">{{{ Session::get('successMessage') }}}</div>
                @endif
                @if (Session::has('errorMessage'))
                    <div class="alert alert-danger">{{{ Session::get('errorMessage') }}}</div>
                @endif
                @if (Session::has('warningMessage'))
                    <div class="alert alert-danger">{{{ Session::get('warningMessage') }}}</div>
                @endif
                @if (Session::has('infoMessage'))
                    <div class="alert alert-danger">{{{ Session::get('infoMessage') }}}</div>
                @endif
                @yield('content')
            </div>
        </div>
    </div>
    
    
    
    @yield('bottom script')

</body>
</html>
