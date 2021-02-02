@extends('layouts.default')

@section('content')

 <div class="container-fluid">
                        <h1 class="mt-4">User profil</h1>
                         
                        </ol>
                        
                         <div class="card mb-4">
                            <div class="card-body">
                                {!! Form::open(['class' => 'form-horizontal']) !!}

	
									<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
									    {!! Form::label('name', 'Name :') !!}
									    {!! Form::text('name', $user->name, ['class' => 'form-control', 'required' => 'required']) !!}
									    <small class="text-danger">{{ $errors->first('name') }}</small>
									</div>

									<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
									    {!! Form::label('email', 'Email :') !!}
									    {!! Form::text('email', $user->email, ['class' => 'form-control', 'required' => 'required']) !!}
									    <small class="text-danger">{{ $errors->first('email') }}</small>
									</div>

								{!! Form::close() !!}
                            </div>
                        </div>


                    </div>
@endsection
