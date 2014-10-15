@extends('layouts.master')
@section('title', 'Portfolio')
@section('content')
    
    <a href="{{{ action('HomeController@showResume') }}}">Resume</a>
    
@stop
