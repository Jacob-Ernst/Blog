@extends('layouts.master')
@section('title', 'Resume')
@section('content')


    <div class="jumbotron">
      <h2 class='text-center'>Jacob Ernst <small>Full Stack Software Developer</small></h2>
      <p class='text-center'>Contact:
        <a href="">fsfaf</a>
        <a href="">fasfaf</a>
        <a href="">asfaf</a>
      </p>
      <p><a class="btn btn-primary btn-lg" role="button">Learn more</a></p>
    </div>



    <h1>Jacob Ernst <small>Full Stack Software Developer</small></h1>

    <h2>Work Experience</h2>
    <h3>Job 1</h3>
    <p>What you do</p>
    <p>Time</p>

    <h3>Job 2</h3>
    <p>What you did</p>
    <p>time</p>


    <h2>Education</h2>
    <h3>LAMP+J Software Development Bootcamp</h3>
    <a href="">Codeup</a>
    <p>San Antonio, TX</p>
    <p>Graduating in November 2014</p>

    <h3>school</h3>
    <p>awesome school</p>
    <p>4 years</p>
    <p>May 2013</p>

    <a href="{{{ action('HomeController@showPortfolio') }}}">Portfolio</a>
    
@stop
