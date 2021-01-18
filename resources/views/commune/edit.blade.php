@extends('layouts.default')

@section('content')
	
	<div class="container-fluid">

		<h1>Edition de commune</h1>
		
		<form method="POST" action="{{ route('commune.update', $commune->id) }}" enctype="multipart/data-form">
			@csrf
			@method('PATCH')
	    	@include('commune.field_edit')
	    	
		    <div class="btn-group pull-right">
		        {!! Form::submit('Enregistrer', ['class' => 'btn btn-info pull-right']) !!}

		    </div>
	
		</form>

	</div>
@stop


