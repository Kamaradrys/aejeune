@extends('layouts.default')

@section('content')
	
	<div class="container-fluid">

		<h1>Edition du Objet</h1>
		
		<form method="POST" action="{{ route('objet.update', $objet->id) }}" enctype="multipart/data-form">
			@csrf
			@method('PATCH')
	    	@include('objet.field_edit')
	    	
		    <div class="btn-group pull-right">
		        {!! Form::submit('Enregistrer', ['class' => 'btn btn-info pull-right']) !!}

		    </div>
	
		</form>

	</div>
@stop


