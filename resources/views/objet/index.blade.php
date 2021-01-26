@extends('layouts.default')

@section('content')

 <div class="container-fluid">
                        <h1 class="mt-4">Objets</h1>
                        <ol class="breadcrumb mb-4">
                            <a href="{{ route('objet.create') }}" class="ml-4 bg-dark text-white hover:bg-gray-700 text-decoration-none text-xs uppercase   border rounded font-semibold  px-4 py-2 "> <i class="fa fa-plus"></i> ajouter</a>

                            {{-- <li class="breadcrumb-item active">Liste des Communes</li> --}}

                           {{--  <button type="submit" class=" items-center px-2 py-1 bg-red-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 ml-3" >ezdez<button> --}}
                         
                        </ol>
                        
                         <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                DataTable Example
                            </div>
                            <div class="card-body">
                                @include('objet.table')
                            </div>
                        </div>


                    </div>
@endsection