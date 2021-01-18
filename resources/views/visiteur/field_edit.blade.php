<div class="form-group{{ $errors->has('nom') ? ' has-error' : '' }}">
	    	    {!! Form::label('nom', 'Nom visiteur :') !!}
	    	    {!! Form::text('nom', $visiteur->nom, ['class' => 'form-control', 'required' => 'required']) !!}
	    	    <small class="text-danger">{{ $errors->first('nom') }}</small>
	    	</div>

	    	<div class="form-group{{ $errors->has('prenoms') ? ' has-error' : '' }}">
	    	    {!! Form::label('prenoms', 'Prénoms visiteur :') !!}
	    	    {!! Form::text('prenoms', $visiteur->prenoms, ['class' => 'form-control', 'required' => 'required']) !!}
	    	    <small class="text-danger">{{ $errors->first('prenoms') }}</small>
	    	</div>

	    	<div class="form-group{{ $errors->has('sexe_id') ? ' has-error' : '' }}">
	    	    {!! Form::label('sexe_id', 'Sexe :') !!}
	    	   	<select name="sexe_id" id="" class="form-control">
	    	   		@foreach ($sexes as $sexe)
	    	   			<option value="{{ $sexe->id }}"{{ $visiteur->sexe->id ==  $sexe->id ? 'selected':'' }}>{{ $sexe->name }}</option>
	    	   				}
	    	   		@endforeach
	    	   	</select>
	    	    <small class="text-danger">{{ $errors->first('sexe_id') }}</small>
	    	</div>

	    	<div class="form-group{{ $errors->has('structure') ? ' has-error' : '' }}">
	    	    {!! Form::label('structure', 'Structure :') !!}
	    	    {!! Form::text('structure', $visiteur->structure, ['class' => 'form-control', 'required' => 'required']) !!}
	    	    <small class="text-danger">{{ $errors->first('structure') }}</small>
	    	</div>

	    	<div class="form-group{{ $errors->has('contacts') ? ' has-error' : '' }}">
	    	    {!! Form::label('contacts', 'Contact :') !!}
	    	    {!! Form::text('contacts', $visiteur->contacts, ['class' => 'form-control', 'required' => 'required']) !!}
	    	    <small class="text-danger">{{ $errors->first('contacts') }}</small>
	    	</div>

	    	<div class="form-group{{ $errors->has('mail') ? ' has-error' : '' }}">
	    	    {!! Form::label('mail', 'E-mail :') !!}
	    	    {!! Form::text('mail', $visiteur->mail, ['class' => 'form-control', 'required' => 'required']) !!}
	    	    <small class="text-danger">{{ $errors->first('mail') }}</small>
	    	</div>

			<div class="form-group{{ $errors->has('objet_id') ? ' has-error' : '' }}">
	    	    {!! Form::label('objet_id', 'Objet :') !!}
	    	   	<select name="objet_id" id="" class="form-control">
	    	   		@foreach ($objets as $objet)
	    	   			<option value="{{ $objet->id }}">{{ $objet->name }}</option>
	    	   		@endforeach
	    	   	</select>
	    	    <small class="text-danger">{{ $errors->first('objet_id') }}</small>
	    	</div>

	    	<div class="form-group{{ $errors->has('agence_id') ? ' has-error' : '' }}">
	    	    {!! Form::label('agence_id', 'Agence :') !!}
	    	   	<select name="agence_id" id="" class="form-control">
	    	   		@foreach ($agences as $agence)
	    	   			<option value="{{ $agence->id }}"{{ $visiteur->agence->id ==  $agence->id? 'selected':'' }}>{{ $agence->name }}
	    	   			</option>
	    	   		@endforeach
	    	   	</select>
	    	    <small class="text-danger">{{ $errors->first('agence_id') }}</small>
	    	</div>

