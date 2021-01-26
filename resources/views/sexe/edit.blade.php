@extends('layouts.default')

@section('content')
	
	<div class="container-fluid">

		<h1>Edition du sexe</h1>
		
		<form method="POST" action="{{ route('sexe.update', $sexe->id) }}" enctype="multipart/data-form">
			@csrf
			@method('PATCH')
	    	@include('sexe.field_edit')
	    	
		    <div class="btn-group pull-right">
		        {!! Form::submit('Enregistrer', ['class' => 'btn btn-info pull-right']) !!}

		    </div>
	
		</form>

	</div>
@stop


