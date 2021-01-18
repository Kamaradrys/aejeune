<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    {!! Form::label('name', 'Agence :') !!}
    {!! Form::text('name', $agence->name, ['class' => 'form-control', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('name') }}</small>
</div>

<div class="form-group{{ $errors->has('id') ? ' has-error' : '' }}">
    {!! Form::label('name', 'Commune :') !!}
    {!! Form::select('id', $communes, null, ['id' => 'name', 'class' => 'form-control', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('id_commune') }}</small>
</div>
