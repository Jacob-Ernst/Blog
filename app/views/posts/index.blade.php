@extends('layouts.master')

@section('content')
    <div class='container'>
        
            @forelse($posts as $post)
                <div class='container'>
                  <h2>{{ $post->title}}</h2>
                  <article>{{ $post->content}}</article>
                  <p>{{ $post->created_at}}</p>
                  <a href="{{{ action('PostsController@show', $post->id) }}}">View</a>
                </div>
            @empty
              <h1>No Posts</h1>
            @endforelse
        
        {{ $posts->links() }}
    </div>
    
@stop
