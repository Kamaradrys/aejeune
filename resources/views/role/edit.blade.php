@extends('layouts.default')

@section('content')
	
	<div class="container-fluid">

		<h1>Edition de role</h1>
		
		<form method="POST" action="{{ route('role.update', $role->id) }}" enctype="multipart/data-form">
			@csrf
			@method('PATCH')
	    	@include('role.field_edit')
	    	
		    <div class="btn-group pull-right">
		        {!! Form::submit('Enregistrer', ['class' => 'btn btn-info pull-right']) !!}

		    </div>
	
		</form>

	</div>
@stop


