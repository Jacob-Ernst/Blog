@extends('layouts.master')

@section('content')


    {{ Form::open(array('action' => 'PostsController@store')) }}
    <div class="page-header">
      <h1>Create Post:</h1>
    </div>    
    @include ('posts.form')
        <div class="form-group">
            <label for="exampleInputFile">Image input</label>
            <input type="file" id="exampleInputFile">
            <p class="help-block">Upload image here</p>
        </div>
        <input type="submit" class='btn' value='Create'>
    {{ Form::close() }}

@stop
