@extends('layouts.master')
@section('title', '<title>Portfolio</title>')
@section('content')
    
    <a href="{{{ action('HomeController@showResume') }}}">Resume</a>
    
@stop
