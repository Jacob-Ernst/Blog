@extends('layouts.master')

@section('content')
        
            @forelse($posts as $post)
                <div class='page-header'>
                    <h3><a href="{{{ action('PostsController@show', $post->id) }}}">{{ $post->title}}</a></h3>
                </div>
                    <p>{{ $post->content}}</p>
                    <p class='small'>created {{{$post->created_at->diffForHumans()}}} by {{{$post->user->email}}}</p>
            @empty
              <h1>No Posts</h1>
            @endforelse
        
        {{ $posts->links() }}
    
@stop
