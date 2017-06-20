@extends('layouts.admin')

@section('content')
<div class="row">
	<div class="col-md-12">
		
		<div class="panel panel-primary" data-collapsed="0">
		
			<div class="panel-heading">
				<div class="panel-title">
					Add Role
				</div>
				

			</div>
			
			<div class="panel-body">
				
				<form role="form" class="form-horizontal form-groups-bordered" method="POST" action="{{ url('/role') }}">
					{{ csrf_field() }}
					
					<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
						<label for="name" class="col-sm-3 control-label">Role Name</label>
						
						<div class="col-sm-5">
							<input type="text" class="form-control" id="name" name="name" placeholder="Placeholder">
							
							@if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
						</div>
					</div>

					<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
						<label for="display_name" class="col-sm-3 control-label">Role Display Name</label>
						
						<div class="col-sm-5">
							<input type="text" class="form-control" id="display_name" name="display_name" placeholder="Placeholder">
							
							@if ($errors->has('display_name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('display_name') }}</strong>
                                </span>
                            @endif
						</div>
					</div>

					<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
						<label for="description" class="col-sm-3 control-label">Role Description</label>
						
						<div class="col-sm-5">
							<input type="text" class="form-control" id="description" name="description" placeholder="Placeholder">
							
							@if ($errors->has('description'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('description') }}</strong>
                                </span>
                            @endif
						</div>
					</div>
					
					{{-- <div class="form-group{{ $errors->has('permission') ? ' has-error' : '' }}">
					<label for="permission" class="col-sm-3 control-label">Permission</label>
						<div class="col-sm-5">
							@foreach ($permission as $key => $value)
                                <div class="checkbox checkbox-replace color-primary">
									<input type="checkbox" name="permission[]" value="{{$value->id}}">
									<label>{{$value->name}}</label><br>
                                </div>
							@endforeach

                            @if ($errors->has('permission'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('permission') }}</strong>
                                </span>
                            @endif
						</div>
					</div> --}}
					
					
		
					<div class="form-group">
						<div class="col-sm-offset-3 col-sm-5">
							<button type="submit" class="btn btn-default">Add</button>
						</div>
					</div>
				</form>
				
			</div>
		
		</div>
	
	</div>
</div>

@endsection
