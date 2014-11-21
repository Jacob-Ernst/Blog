@extends('layouts.master')
@section('title', "<title>Welcome</title>")

@section('content')

    <div class="jumbotron">
        <h1>Hello, world!</h1>
        <p>My Info:</p>
        <ul>
            <li><a href=""><i class="fa fa-linkedin-square fa-2x"></i>  LinkedIn</a></li>
            <li><a href=""><i class="fa fa-github fa-2x"></i>   GitHub</a></li>
            <li><a href="mailto:jacob.f.ernst@gmail.com"><i class="fa fa-envelope fa-2x"></i>   Email</a></li>
        </ul>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
    </div>

@stop
