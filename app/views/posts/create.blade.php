@extends('layouts.master')

@section('content')


    {{ Form::open(array('action' => 'PostsController@store')) }}
    <div class="page-header">
      <h1>Create Post:</h1>
    </div>    
    @include ('posts.form')
        <input type="submit" class='btn' value='Create'>
    {{ Form::close() }}

@stop
