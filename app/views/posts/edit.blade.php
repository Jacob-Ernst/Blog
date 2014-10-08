@extends('layouts.master')

@section('content')

<div class='container'>
    {{ Form::model($post, array('action' => ['PostsController@update', $post->id], 'method' => 'PUT')) }}
    <div class="page-header">
      <h1>Edit:</h1>
    </div>    
    @include ('posts.form')
        <input type="submit" class='btn'>
    {{ Form::close() }}
</div>

@stop
