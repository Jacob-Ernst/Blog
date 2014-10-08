@extends('layouts.master')

@section('content')

    <h1 class='text-left page-header'>{{{$post->title}}}    <small>{{{$post->created_at->diffForHumans()}}}</small></h1>
    <p class=''>{{{$post->content}}}</p>
    <a href="{{{ action('PostsController@edit', $post->id) }}}" class='btn btn-default'>Edit</a>
    
@stop
