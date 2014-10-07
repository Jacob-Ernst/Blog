@extends('layouts.master')

@section('content')
    <div class='container'>
        <ul>
            @forelse($posts as $post)
              <li>{{ $post->title}}</li>
              <li>{{ $post->content}}</li>
              <li>{{ $post->created_at}}</li>
              <li><a href="{{{ action('PostsController@show', $post->id) }}}">View</a></li>
            @empty
              <li>No Posts</li>
            @endforelse
        </ul>
    </div>
@stop
