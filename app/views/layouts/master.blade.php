<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('title')
    <!--add bootstrap and jquery-->
    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src='/jquery-1.11.1.min.js'></script>
    <link rel="stylesheet" type="text/css" href="/font-awesome-4.2.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/css/jquery.tagsinput.css" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:600' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/js/Markdown.Converter.js"></script>
    <script type="text/javascript" src="/js/Markdown.Sanitizer.js"></script>
    <script type="text/javascript" src="/js/Markdown.Editor.js"></script>
    <link rel="stylesheet" type="text/css" href="/css/blog.css" />
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
          <a class="navbar-brand orange" href="{{{ action('PostsController@index') }}}">Bloggy Wog</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          @if (Auth::check())
          <ul class="nav navbar-nav">
            <li><a data-toggle="modal" type="button" data-target="#modal-newpost" id="about" class="btn btn-lg">Post</a></li>
          </ul>
          @endif
          <form class="navbar-form navbar-left" role="search" method='GET' action="{{ action('PostsController@index')}}">
              <input type="text" id='search' name='search'class="form-control" placeholder="Search">
            
          </form>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#" class='orange'>Link</a></li>
            
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
                <li><a data-toggle="modal" type="button" data-target="#modal-login" id="about" class="btn btn-lg">Login</a></li>
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
    
    
    <!-- --------------------- Modal for new post --------------------- -->

        <div class="container">
            <div id="modal-newpost" class="modal fade lg" tabindex="-1" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                            {{ Form::open(array('action' => 'PostsController@store', 'role' => 'form', 'files' => 'true')) }}
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            {{ Form::text('title', Input::old('title'), array('class' => 'form-control', 'required' => 'required','placeholder' => 'Title')) }}
                        </div>
                        {{ $errors->first('title', '<span class="help-block">:message</span>')}}
                        <div class="modal-body">
                            <h3>Write A New Post</h3>
                            <div class="form-group">
                                {{ Form::textarea('content', Input::old('content'), array('class' => 'form-control', 'required' => 'required','placeholder' => 'content')) }}
                            </div>
                            {{$errors->first('content', '<span class="help-block">:message</span>')}}
                            <div class="form-group">
                                {{ Form::label('file', 'Image:', array('class' => '')) }}
                                {{ Form::file('file', Input::old('file'), array('class' => 'form-control')) }}
                                <p class="help-block">Upload image here</p>
                            </div>
                            {{$errors->first('file', '<span class="help-block">:message</span>')}}
                        </div> 
                        <div class="modal-footer">
                            
                            <div class='tag-holder'>                               
                                <h5 class="tags">Create Tags</h5>
                                <input id="tags" class="tags"  name='tags' placeholder="Create tags" class="form-control">
                            </div>
                            {{Form::submit('Post', array('class' => 'btn btn-default'))}}

                 
                        </div>
                        {{ Form::close() }}
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dalog -->
            </div><!-- /.modal -->
        </div>
<!-- --------------------- Modal end --------------------- -->

<!-- --------------------- Modal for login --------------------- -->

        <div class="container">
            <div id="modal-login" class="modal fade lg" tabindex="-1" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        {{ Form::open(array('action' => 'HomeController@doLogin', 'class' => 'post')) }}                        
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h3>Login</h3>
                        </div>
                        <div class="modal-body">
                            <div class="input-group form-group">
                                {{ Form::label('email', 'Email:', array('class' => 'input-group-addon')) }}
                                {{ Form::text('email', Input::old('email') , array('class' => 'form-control')) }}
                            </div>                        
                            <div class="input-group form-group">
                                {{ Form::label('password', 'Password:', array('class' => 'input-group-addon')) }}
                                {{ Form::password('password', array('class' => 'form-control')) }}
                            </div>
                        </div> 
                        <div class="modal-footer">
                            {{Form::submit('Login', array('class' => 'btn btn-default'))}}
                        </div>
                        {{ Form::close() }}
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dalog -->
            </div><!-- /.modal -->
        </div>
<!-- --------------------- Modal end --------------------- -->
    
    <script src="/js/following.js"></script>
    <script src="/js/jquery.tagsinput.js"></script>
    <script type="text/javascript">
            $('#tags').tagsInput({
            }); 
            $( '#dl-menu' ).dlmenu();
    </script>
    @yield('bottom script')

</body>
</html>
