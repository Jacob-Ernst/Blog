@extends('layouts.master')

@section('content')

<div class='container'>
    <form action="{{{ action('PostsController@store') }}}" method='POST'>
        <div class="input-group input-group-lg">
            <span class="input-group-addon">Title:</span>
            <input type="text" class="form-control" name="title" placeholder="Title" id='title' value="{{{Input::old('title')}}}">
        </div>
        
        
        <div class="input-group input-group-lg">
            <span class="input-group-addon">Content:</span>
            <textarea id='content' name='content' placeholder='Content' class='form-control'>{{{Input::old('content')}}}</textarea>
        </div>
        <input type="submit" class='btn'>
    </form>
</div>

@stop
