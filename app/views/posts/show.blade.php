@extends('layouts.master')
@section('title', "<title>$post->title</title>")

@section('content')
    <div class='holder'>
        <h1 class='text-left page-header'>{{{$post->title}}}</h1>
        @if($post->file)
            <img src="{{$post->file}}" class='img-responsive'>
        @endif
        <p class=''>{{{$post->content}}}</p>
        <ul class="nav nav-pills">
            @foreach ($post->tags as $tag)
                <li>
                    <a href="{{{ action('PostsController@index', ['tag' => $tag->tag]) }}}">
                    <i class="fa fa-tag"></i> {{{ $tag->tag }}}
                    </a>
                </li>
            @endforeach
        </ul> 
        <p class='small'>Created by {{{$post->user->first_name}}} {{{$post->user->last_name}}} {{{$post->created_at->diffForHumans()}}}</p>
       
        @if(Auth::check() && Auth::Id() == $post->user_id)
            {{ Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'delete', 'id' => 'delete-form']) }}
                <a href="{{{ action('PostsController@edit', $post->id) }}}" class='btn btn-warning btn-sm'>Edit</a>
                {{ Form::submit('Delete Post', array('class' => 'btn btn-danger btn-sm'))  }}
            {{ Form::close() }}
        @endif
    </div>
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
