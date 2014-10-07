@extends('layouts.master')

@section('content')

<form action="{{{ action('PostsController@store') }}}" method='POST'>
    <label for='title'></label>
    <input type="text" name="title" placeholder="Title" id='title' value="{{{Input::old('title')}}}">
    <label for='content'></label>
    <textarea id='content' name='content' placeholder='Content'>{{{Input::old('content')}}}</textarea>
    <input type="submit">
</form>

@stop
