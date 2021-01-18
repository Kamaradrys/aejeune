@extends('layouts.default')

@section('content')

<div class="container-fluid">
                        <h1 class="mt-4">Agences</h1>
                        <ol class="breadcrumb mb-4">
                           {{--  <a href="{{ route('agence.create') }}" class="ml-4 bg-dark text-white hover:bg-gray-700 text-decoration-none text-xs uppercase   border rounded font-semibold  px-4 py-2 "> <i class="fa fa-plus"></i> ajouter</a> --}}  
                         
                        </ol>

                        {!! Form::open(['method' => 'POST', 'route' => 'agence.store', 'class' => 'form-horizontal']) !!}
                            
                            @include('agence.field')
                        
                            <button type="submit" class="btn btn-success">Enregistrer</button>
                        
                        {!! Form::close() !!}
                        
                        


</div>
@endsection