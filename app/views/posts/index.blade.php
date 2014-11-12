@extends('layouts.master')
@section('title')
    @if (Input::has('search'))
        <title>Search "{{{Input::get('search')}}}"</title>
    @else
        <title>Posts</title>
    @endif
@stop

@section('content')
            @if(Input::has('search'))
                <h1>Posts containing the word(s) "{{{Input::get('search')}}}":</h1>
            @endif
            @forelse($posts as $post)
                <div class='col-md-6'>
                    <div class='page-header'>
                        <h3><a href="{{{ action('PostsController@show', $post->id) }}}">{{ $post->title}}</a><small> by {{{$post->user->first_name}}} {{{$post->user->last_name}}}</small></h3>
                    </div>
                        <p class='small'>created {{{$post->created_at->diffForHumans()}}}</p>
                            <img src="{{$post->file}}" class='img-responsive'>
                        <p>{{ substr($post->content, 0, 255) . "..."}}</p>
                        <a href="{{ action('PostsController@show', $post->id)}}" class='btn btn-primary btn-sm'>Read more</a>
                </div>
                
            @empty
              <div class="jumbotron">
                  <h2 class='text-center'>No posts</h2>
              </div>
            @endforelse
        
        <div class="text-center">
            {{ $posts->appends(array('search' => Input::get('search')))->links()}}
        </div>
    
@stop
