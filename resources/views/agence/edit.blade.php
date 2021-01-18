@extends('layouts.default')

@section('content')
	
	<div class="container-fluid">

		<h1>Edition d'agence</h1>
		
		<form method="POST" action="{{ route('agence.update', $agence->id) }}" enctype="multipart/data-form">
			@csrf
			@method('PATCH')
	    	@include('agence.field_edit')
	    	
		    <div class="btn-group pull-right">
		        {!! Form::submit('Enregistrer', ['class' => 'btn btn-info pull-right']) !!}

		    </div>
	
		</form>

	</div>
@stop


