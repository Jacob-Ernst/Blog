@extends('layouts.master')

@section('content')

    <div class="jumbotron">
        <h1>{{{$post->title}}}</h1>
        <p>{{{$post->content}}}</p>
        <a href="{{{ action('PostsController@edit', $post->id) }}}">Edit</a>
    </div>


@stop
