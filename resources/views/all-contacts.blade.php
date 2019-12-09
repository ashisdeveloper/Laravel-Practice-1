@extends('layout')

@section('content')
<div id="content" class="span10">
	<div class="row-fluid">
		<div class="box-content">
			<table class="table table-bordered table-hover table-condensed">
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Email</th>
					<th>Action</th>
				</tr>
				@foreach($all_contacts as $contact)
				<tr>
					<td>{{$contact->id}}</td>
					<td>{{$contact->name}}</td>
					<td>{{$contact->email}}</td>
					<td>
						<a href="{{ URL::to('view-contact/'.$contact->id) }}">View</a> | 
						<a href="{{ URL::to('edit-contact/'.$contact->id) }}">Edit</a> | 
						<a href="{{ URL::to('delete-contact/'.$contact->id) }}" class="delete-contact">Delete</a>
					</td>
				</tr>
				@endforeach
			</table>
		</div>
	</div>
</div>
@endsection