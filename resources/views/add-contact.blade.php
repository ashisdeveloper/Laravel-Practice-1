@extends('layout')

@section('content')
<div id="content" class="span10">
	<div class="row-fluid">
		<div class="box-content">
			<form class="form-horizontal" action="{{ url('insert-contact') }}" method="POST">
				<!-- @csrf -->
				{{ csrf_field() }}
				<fieldset>
				  <div class="control-group">
					<label class="control-label" for="focusedInput">Contact Name</label>
					<div class="controls">
					  <input class="input-xlarge focused" id="focusedInput" type="text" name="name">
					</div>
				  </div>
				  <div class="control-group">
					<label class="control-label" for="focusedInput">Contact Email</label>
					<div class="controls">
					  <input class="input-xlarge focused" id="focusedInput" type="text" name="email">
					</div>
				  </div>
				  
				  <div class="form-actions">
					<button type="submit" class="btn btn-primary">Add Contact</button>
					<button class="btn">Cancel</button>
				  </div>
				</fieldset>
			  </form>
		
		</div>
	</div>
</div>
@endsection