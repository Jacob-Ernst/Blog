@extends('layouts.master')
@section('title', "<title>About</title>")

@section('content')
    <div class="jumbotron">
        <h1>Jumbotron heading</h1>
        <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
        
        <div class="row">
            <div class="col-xs-3 col-md-5 col-md-offset-3">
                <a href="#" class="thumbnail">
                  <img data-src="holder.js/100%x100" alt="..." src='/img/me_cropped.jpg'>
                </a>
            </div>
        </div>
    </div>

    <div class="row marketing">
            <div class="col-lg-6">
                <h4>Subheading</h4>
                <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>

                <h4>Subheading</h4>
                <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum.</p>
            </div>
    </div>
@stop
