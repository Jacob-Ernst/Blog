@extends('layouts.master')

@section('content')

    <div class="jumbotron">
        <h1>{{{$post->title}}}</h1>
        <p>{{{$post->content}}}</p>
    </div>


@stop
