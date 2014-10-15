@extends('layouts.master')
@section('title', "<title>$post->title</title>")

@section('content')

    <h1 class='text-left page-header'>{{{$post->title}}}    <small>{{{$post->created_at->diffForHumans()}}}</small></h1>
    <img src="{{$post->file}}" class='img-responsive'>
    <p class=''>{{{$post->content}}}</p>
    <p class='small'>Created by {{{$post->user->first_name}}} {{{$post->user->last_name}}}</p>
   
    @if(Auth::check() && Auth::Id() == $post->user_id)
        {{ Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'delete', 'id' => 'delete-form']) }}
            <a href="{{{ action('PostsController@edit', $post->id) }}}" class='btn btn-warning btn-sm'>Edit</a>
            {{ Form::submit('Delete Post', array('class' => 'btn btn-danger btn-sm'))  }}
        {{ Form::close() }}
    @endif
@stop

@section('bottom script')
    <script>
        $('#delete-form').submit(function(event){
            if(!confirm('Are you sure you want to delete this post?')){
                event.preventDefault();
            }
        });
    </script>
@stop
