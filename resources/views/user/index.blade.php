@extends('layouts.admin')

@section('content')
<div class="row">
	<div class="col-md-12">		
		<h3>User Management</h3>

		<table class="table table-bordered table-striped datatable" id="dataEvent" name="table-2">
			<thead>
				<tr>
					<th style="text-align:center">No</th>
					<th style="text-align:center">Name</th>
					<th style="text-align:center">Email</th>
                    <th style="text-align:center">Action</th>

				</tr>
			</thead>
			
			<tbody>
			@foreach ($user as $key => $value)
				<tr>
					<td>{{ $key +1 }}</td>

					<td>{{$value->name}}</td>
					<td>{{$value->email}}</td>
					<td style="text-align:center">
						<a href="{{ route('User.edit',$value->id)}}">
							<button type="button" class="btn btn-danger"/>
								<i class="entypo-cancel"></i>
						</a>	
						<form action="/user/{{$value->id}}" method="post">
							{{ csrf_field() }}
							<input type="hidden" name="_method" value="delete">
							<button type="submit" class="btn btn-white"/>
								<i class="entypo-trash"></i>
						</form>
					</td>
				</tr>
			@endforeach
			</tbody>
		</table>
        {{-- <hr> --}}
		<a href="/user/create" class="btn btn-primary">
			<i class="entypo-plus"></i>
			Add New User
		</a>

        {{-- <form class="form-horizontal" role="form" method="POST" action="{{ url('/user') }}">
            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
                <label for="nama" class="col-md-2 control-label">Nama</label>

                <div class="col-md-6">
                    <input id="nama" type="text" class="form-control" name="nama" value="{{ old('nama') }}" required autofocus>

                    @if ($errors->has('nama'))
                        <span class="help-block">
                            <strong>{{ $errors->first('nama') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('content') ? ' has-error' : '' }}">
                <label for="email" class="col-md-2 control-label">Email</label>

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control autogrow" name="email" value="{{ old('email') }}">

                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <label for="password" class="col-md-2 control-label">Password</label>

                <div class="col-md-6">
                    <input id="password" type="password" class="form-control autogrow" name="password" value="{{ old('password') }}">

                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            
            <div class="form-group">
                <div class="col-md-6 col-md-offset-2">
                    <button type="submit" class="btn btn-primary">
                        Tambah
                    </button>
                </div>
            </div>
        </form>
		 --}}
	</div>
</div>

@endsection