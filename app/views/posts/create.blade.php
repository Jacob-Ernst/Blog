@extends('layouts.master')

@section('content')

<div class='container'>
    {{ Form::open(array('action' => 'PostsController@store')) }}
    <div class="page-header">
      <h1>Create Post:</h1>
    </div>    
    @include ('posts.form')
        <input type="submit" class='btn'>
    {{ Form::close() }}
</div>

@stop
