@extends('layouts.master')
@section('title', '<title>Resume</title>')
@section('content')


<div class="jumbotron">
    <h2 class='text-center'>Jacob Ernst <small>Full Stack Software Developer</small></h2>
    <p class='text-center'>Download:    
        <a href="/JacobErnstResume.pdf" target='_blank'><i class="fa fa-file-pdf-o fa-lg"></i></a>
        <a href="/JacobErnstResume.pdf" target='_blank'><i class="fa fa-file-word-o fa-lg"></i></a>
    </p>
    <div class="row">
            <div class="col-xs-3 col-md-5 col-md-offset-4">
                <ul >
                    <LH class='text-left'>Contact me</LH>
                    <li>Pikachu</li>
                    <li>Bill</li>
                </ul>
            </div>
    </div>
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
