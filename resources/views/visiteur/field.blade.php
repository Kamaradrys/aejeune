<div class="form-group{{ $errors->has('nom') ? ' has-error' : '' }}">
    {!! Form::label('nom', 'Nom du Visiteur :') !!}
    {!! Form::text('nom', null, ['class' => 'form-control', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('nom') }}</small>
</div>


<div class="form-group{{ $errors->has('prenoms') ? ' has-error' : '' }}">
    {!! Form::label('prenoms', 'Prenoms du Visiteur :') !!}
    {!! Form::text('prenoms', null, ['class' => 'form-control', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('prenoms') }}</small>
</div>

<div class="form-group{{ $errors->has('sexe_id') ? ' has-error' : '' }}">
    {!! Form::label('sexe_id', 'Sexe :') !!}
    {!! Form::select('sexe_id', $optionsSexes, null, ['id' => 'sexe_id', 'class' => 'form-control', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('sexe_id') }}</small>
</div>

<div class="form-group{{ $errors->has('structure') ? ' has-error' : '' }}">
    {!! Form::label('structure', 'Structure :') !!}
    {!! Form::text('structure', null, ['class' => 'form-control', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('structure') }}</small>
</div>

<div class="form-group{{ $errors->has('contacts') ? ' has-error' : '' }}">
    {!! Form::label('contacts', 'Telephone :') !!}
    {!! Form::text('contacts', null, ['class' => 'form-control', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('contacts') }}</small>
</div>

<div class="form-group{{ $errors->has('mail') ? ' has-error' : '' }}">
    {!! Form::label('mail', 'Email address :') !!}
    {!! Form::email('mail', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'eg: foo@bar.com']) !!}
    <small class="text-danger">{{ $errors->first('mail') }}</small>
</div>

<div class="form-group{{ $errors->has('objet_id') ? ' has-error' : '' }}">
    {!! Form::label('objet_id', 'Objet de la Visite :') !!}
    {!! Form::select('objet_id', $optionsObjets, null, ['id' => 'objet_id', 'class' => 'form-control', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('objet_id') }}</small>
</div>

<div class="form-group{{ $errors->has('agence_id') ? ' has-error' : '' }}">
    {!! Form::label('agence_id', 'Agence :') !!}
    {!! Form::select('agence_id', $optionsAgences, null, ['id' => 'agence_id', 'class' => 'form-control', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('agence_id') }}</small>
</div>


