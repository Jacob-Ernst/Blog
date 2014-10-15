<div class="input-group form-group">
    {{ Form::label('title', 'Title:', array('class' => 'input-group-addon')) }}
    {{ Form::text('title', Input::old('title'), array('class' => 'form-control')) }}
</div>
    {{ $errors->first('title', '<span class="help-block">:message</span>')}}


<div class="input-group form-group">
    {{ Form::label('content', 'Content:', array('class' => 'input-group-addon')) }}
    {{ Form::textarea('content', Input::old('content'), array('class' => 'form-control')) }}
</div>
    {{$errors->first('content', '<span class="help-block">:message</span>')}}
    
<div class="form-group">
    {{ Form::label('file', 'Image:', array('class' => '')) }}
    {{ Form::file('file', Input::old('file'), array('class' => 'form-control')) }}
    <p class="help-block">Upload image here</p>
</div>
{{$errors->first('file', '<span class="help-block">:message</span>')}}
