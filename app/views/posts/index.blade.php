@extends('layouts.master')

@section('content')
            @if(Input::has('search'))
                <h1>Posts containing the word(s) "{{{Input::get('search')}}}":</h1>
            @endif
            @forelse($posts as $post)
                <div class='page-header'>
                    <h3><a href="{{{ action('PostsController@show', $post->id) }}}">{{ $post->title}}</a></h3>
                </div>
                    <p>{{ $post->content}}</p>
                    <p class='small'>created {{{$post->created_at->diffForHumans()}}} by {{{$post->user->first_name}}} {{{$post->user->last_name}}}</p>
            @empty
              <div class="jumbotron">
                  <h2 class='text-center'>No posts</h2>
              </div>
            @endforelse
        
        {{ $posts->links() }}
        {{ $posts->appends(array('search' => Input::get('search')))->links()}}
    
@stop
