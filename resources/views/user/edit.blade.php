@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">User</div>
				<div class="panel-heading">
					{!! Form::model($user, ['route' => ['User.update',$user->id], 'method' => 'PUT'])!!}
						{!! Form::label('name', 'Name', ["class" => "control-label"]) !!}
						{!! Form::text('name', null, ["class" => "form-control"]) !!}
                        <br>
                        {{-- {!! Form::label('email', 'email', ["class" => "control-label"]) !!}
                        {!! Form::text('email', null, ["class" => "form-control"]) !!}
                        <br>
                        {!! Form::label('password', 'password', ["class" => "control-label"]) !!}
                        {!! Form::password('password', ["class" => "form-control"]) !!}
                        <br>
                        {!! Form::label('password_confirmation', 'password_confirmation', ["class" => "control-label"]) !!}
                        {!! Form::password('password_confirmation', ["class" => "form-control"]) !!} --}}
                        <br>
                        {!! Form::label('role', 'role', ["class" => "control-label"]) !!}
                        <select name="role" id="role" class="form-control">
                            <option value="0">---pilih---</option>
                            @foreach($roles as $role)
                                <option value="{{ $role->id }}" @if ($role->id == $userrole) selected="selected" @endif>{{ $role->name }}</option>
                            @endforeach
                        </select>
                        <br>
                        {!! Form::submit('Save Changes', ['class' => 'btn btn-success btn-block' ]) !!}
					{!! Form::close() !!}
				</div>
            </div>
        </div>
    </div>
</div>
@endsection
