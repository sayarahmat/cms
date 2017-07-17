@extends('layouts.admin')

@section('content')
<div class="row">
	<div class="col-md-12">		
		<h3>Permission Management</h3>

		<table class="table table-bordered table-striped datatable text-center">
			<thead>
				<tr>
					<th class="text-center">No</th>
					<th class="text-center">Name</th>
					<th class="text-center">Description</th>
					<th class="text-center">Actions</th>
				</tr>
			</thead>
			
			<tbody>
			@foreach ($permission as $key => $value)
				<tr>
					<td>{{ $key +1 }}</td>
					<td>{{$value->display_name}}</td>
					<td>{{$value->description}}</td>
					{{-- <td>
						@foreach($value->permissions as $item)
							{{ $item->name }}
						@endforeach
					</td> --}}
					<td>
						
						<a href="/permission/{{$value->id}}/edit">
							<button type="button" class="btn btn-info"/>
								<i class="entypo-info"></i>
						</a>
									
						<form action="/permission/{{$value->id}}" method="post">
							{{ csrf_field() }}
							<input type="hidden" name="_method" value="delete">
							<button type="submit" class="btn btn-danger"/>
								<i class="entypo-trash"></i>
						</form>
						
						
					</td>
				</tr>
			@endforeach
			</tbody>
		</table>
		<a href="/permission/create" class="btn btn-primary">
			<i class="entypo-plus"></i>
			Add permission
		</a>
		
		
		
	</div>
</div>
@endsection