@extends('layouts.master')
@section('title', "<title>Welcome</title>")

@section('content')

    <div class="jumbotron">
        <h1>Welcome!</h1>
        <ul class='nav nav-pills'>
            <li><a href="{{{ action('PostsController@index') }}}"><i class="fa fa-newspaper-o fa-2x"></i>  Blog</a></li>
            <li><a href="{{{ action('HomeController@showPortfolio') }}}"><i class="fa fa-folder fa-2x"></i>   Portfolio</a></li>
            <li><a href="mailto:jacob.f.ernst@gmail.com"><i class="fa fa-envelope fa-2x"></i>   Email</a></li>
            <li><a href="{{{ action('HomeController@showResume') }}}"><i class="fa fa-briefcase fa-2x"></i>  Resume</a></li>
        </ul>
        <br>
        <p><a class="btn btn-primary btn-lg btn-ap" href="{{{ action('HomeController@showAbout') }}}" role="button">About me</a></p>
    </div>

@stop
