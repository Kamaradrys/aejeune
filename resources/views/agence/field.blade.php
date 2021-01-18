@csrf
<div class="form-group{{ $errors->has('inputname') ? ' has-error' : '' }}">
    {!! Form::label('name', 'Agences') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('name') }}</small>
</div>

<div class="form-group{{ $errors->has('inputname') ? ' has-error' : '' }}">
    {!! Form::label('name', 'Communes') !!}
    {!! Form::select('id', $communes, null, ['id' => 'name', 'class' => 'form-control', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('name') }}</small>
</div>