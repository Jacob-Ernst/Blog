@extends('layouts.master')
@section('title', '<title>Edit</title>')
@section('content')


    {{ Form::model($post, array('action' => ['PostsController@update', $post->id], 'method' => 'PUT', 'files' => 'true')) }}
    <div class="page-header">
      <h1>Edit:</h1>
    </div>    
    @include ('posts.form')
        <input type="submit" class='btn' value='Done'>
    {{ Form::close() }}


@stop
