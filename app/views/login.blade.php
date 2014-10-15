@extends('layouts.master')
@section('title', '<title>Login</title>')
@section('content')
    {{ Form::open(array('action' => 'HomeController@doLogin')) }}
        <div class="page-header">
          <h1>Login</h1>
        </div>    
        <div class="input-group form-group">
            {{ Form::label('email', 'Email:', array('class' => 'input-group-addon')) }}
            {{ Form::text('email', Input::old('email') , array('class' => 'form-control')) }}
        </div>
        <div class="input-group form-group">
            {{ Form::label('password', 'Password:', array('class' => 'input-group-addon')) }}
            {{ Form::password('password', array('class' => 'form-control')) }}
        </div>
            <input type="submit" class='btn' value='Submit'>
    {{ Form::close() }}
@stop
