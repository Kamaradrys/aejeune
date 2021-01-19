<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    {!! Form::label('name', 'Name :') !!}
    {!! Form::text('name', $user->name, ['class' => 'form-control', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('name') }}</small>
</div>

<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
    {!! Form::label('email', 'Email address :') !!}
    {!! Form::email('email', $user->email, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'eg: foo@bar.com']) !!}
    <small class="text-danger">{{ $errors->first('email') }}</small>
</div>

@foreach($roles as $role)
			<div class="form-group form-check">
				<input type="checkbox" class="form-check-input" name="roles[]" value="{{$role->id}}" id="{{$role->id}}" @if($user->roles->pluck('id')->contains($role->id)) checked @endif >

				<label for="{{$role->id}}" class="form-check-label">{{$role->name}}</label>
			</div>
@endforeach

