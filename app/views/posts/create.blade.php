@extends('layouts.master')

@section('content')

<div class='container'>
    {{ Form::open(array('action' => 'PostsController@store')) }}
    @include ('posts.form')
        <input type="submit" class='btn'>
    {{ Form::close() }}
</div>

@stop
