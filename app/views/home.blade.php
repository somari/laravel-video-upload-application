@extends('layouts.default')

@section('all_users')
<div class="col-md-9 well admin-content" id="allUsers">
	Display all registered users 

	@if(is_null($users))
	{{ 'No users available at the moment' }}
	@else
	<table class="table table-bordered table-hover">

		<thead>
			<tr>
				<th>#</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>email</th>
				<th>type</th>
			</tr>
		</thead>


		<tbody>

			@foreach($users as $user)
				<tr>
					<td>{{ $user->id }}</td>
					<td>{{ $user->first_name }}</td>
					<td>{{ $user->last_name }}</td>
					<td>{{ $user->email }}</td>
					<td>user</td>
				</tr>
			@endforeach

		</tbody>


	</table>

	@endif


</div> <!-- END .col-md-9 #allUsers -->  
@stop

@section('modals')

@include('partials.login_modal')

@include('partials.register_modal')

@stop
