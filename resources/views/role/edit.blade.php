@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Role Edit</div>
				<div class="panel-body">
					{!! Form::model($role, ['route' => ['Role.update',$role->id], 'method' => 'PUT'])!!}
						{!! Form::label('name', 'Name', ["class" => "control-label"]) !!}
						{!! Form::text('name', null, ["class" => "form-control"]) !!}
                        <br>
                        {!! Form::label('display_name', 'display_name', ["class" => "control-label"]) !!}
						{!! Form::text('display_name', null, ["class" => "form-control"]) !!}
                        <br>
                        {!! Form::label('description', 'description', ["class" => "control-label"]) !!}
						{!! Form::text('description', null, ["class" => "form-control"]) !!}
                        <br>
                        {!! Form::submit('Save Changes', ['class' => 'btn btn-success btn-block' ]) !!}
					{!! Form::close() !!}
				</div>
            </div>
        </div>
    </div>
</div>
@endsection
