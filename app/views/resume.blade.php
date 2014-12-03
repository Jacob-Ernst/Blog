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
                    <li><a href="https://github.com/Jacob-Ernst" target='_blank'><i class="fa fa-github fa-2x"></i>  GitHub</a></li>
                    <li><a href="http://www.linkedin.com/pub/jacob-ernst/a3/3aa/497/" target='_blank'><i class="fa fa-linkedin-square fa-2x"></i>  LinkedIn</a></li>
                    <li><a href="mailto:jacob.f.ernst@gmail.com"><i class="fa fa-envelope fa-2x"></i>   Email</a></li>
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
