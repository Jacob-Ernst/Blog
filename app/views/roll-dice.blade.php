@extends('layouts.master')

@section('content')
    <h1>It's {{{ $random }}}</h1>
    <?php if($guess == $random):?>
        <h2>Good Guess</h2>
    <?endif;?>
@stop
