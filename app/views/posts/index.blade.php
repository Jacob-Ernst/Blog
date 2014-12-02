@extends('layouts.master')
@section('title')
    @if (Input::has('search'))
        <title>Search "{{{Input::get('search')}}}"</title>
    @else
        <title>Posts</title>
    @endif
@stop

@section('content')
        <div class='row'>
            @if(Input::has('search'))
                <h1>Posts containing the word(s) "{{{Input::get('search')}}}":</h1>
            @endif
            @forelse($posts as $post)
                <div class='col-md-6 holder'>
                    <div class='page-header'>
                        <h3><a href="{{{ action('PostsController@show', $post->id) }}}">{{ $post->title}}</a><small> by {{{$post->user->first_name}}} {{{$post->user->last_name}}}</small></h3>
                    </div>
                        <p class='small'>created {{{$post->created_at->diffForHumans()}}}</p>
                        @if($post->file)
                            <img src="{{$post->file}}" class='img-responsive'>
                        @endif
                        <p>{{ substr($post->content, 0, 255) . "..."}}</p>
                        <a href="{{ action('PostsController@show', $post->id)}}" class='btn btn-primary btn-sm'>Read more</a>
                        <ul class="nav nav-pills">
                        @foreach ($post->tags as $tag)
                            <li>
                                <a href="{{{ action('PostsController@index', ['tag' => $tag->tag]) }}}">
                                <i class="fa fa-tag"></i> {{{ $tag->tag }}}
                                </a>
                            </li>
                        @endforeach
                       </ul> 
                </div>
                
            @empty
              <div class="jumbotron">
                  <h2 class='text-center'>No posts</h2>
              </div>
            @endforelse
        
        <div class="text-center">
            {{ $posts->appends(array('search' => Input::get('search')))->links()}}
        </div>
    </div>
@stop
