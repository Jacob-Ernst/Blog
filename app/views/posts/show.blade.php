@extends('layouts.master')

@section('content')

    <h1 class='text-left page-header'>{{{$post->title}}}    <small>{{{$post->created_at->diffForHumans()}}}</small></h1>
    <p class=''>{{{$post->content}}}</p>
    <a href="{{{ action('PostsController@edit', $post->id) }}}" class='btn btn-default'>Edit</a>
    {{ Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'delete', 'id' => 'delete-form']) }}
      {{ Form::submit('Delete Post')  }}
      <!-- <button type="submit">Delete</button> -->
    {{ Form::close() }}
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
