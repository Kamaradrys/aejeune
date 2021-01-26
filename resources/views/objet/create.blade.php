@extends('layouts.default')

@section('content')

<div class="container-fluid">
                        <h1 class="mt-4">Objets</h1>
                        <ol class="breadcrumb mb-4">
                           {{--  <a href="{{ route('commune.create') }}" class="ml-4 bg-dark text-white hover:bg-gray-700 text-decoration-none text-xs uppercase   border rounded font-semibold  px-4 py-2 "> <i class="fa fa-plus"></i> ajouter</a> --}}  
                         
                        </ol>

                        {!! Form::open(['method' => 'POST', 'route' => 'objet.store', 'class' => 'form-horizontal']) !!}
                            @csrf
                            @include('objet.field')
                        
                            {{-- <div class="btn-group pull-right">
                                {!! Form::reset("Reset", ['class' => 'btn btn-warning']) !!}
                                {!! Form::submit("Add", ['class' => 'btn btn-success']) !!}
                            </div> --}}
                            <button type="submit" class="btn btn-success">Enregistrer</button>
                        
                        {!! Form::close() !!}
                        
                        


</div>
@endsection