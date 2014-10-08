@extends('layouts.master')

@section('content')

<div class='container'>
    {{ Form::model($post, array('action' => ['PostsController@update', $post->id], 'method' => 'PUT')) }}
    @include ('posts.form')
        <input type="submit" class='btn'>
    {{ Form::close() }}
</div>

@stop
