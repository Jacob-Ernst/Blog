<html>
<head>
    <title>Bloggy Wog</title>
    <!--add bootstrap and jquery-->
    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript">"/bootstrap/js/bootstrap.min.js"</script>
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
            <li><a href="{{{ action('PostsController@create') }}}">New Post</a></li>
            <li><a href="#">Link</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
                <li class="divider"></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
          <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Search">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
          </form>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Link</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
              </ul>
            </li>
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
