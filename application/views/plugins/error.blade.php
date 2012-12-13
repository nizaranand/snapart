@if (isset($errors) && count($errors->all()) > 0)
	<div id="error_holder" class="alert alert-error">
		<button type="button" class="close" data-dismiss="alert">×</button>
		@foreach ($errors->all(':message<br/>') as $message)
			{{ $message }}
		@endforeach
	</div>
@elseif (!is_null(Session::get('status_error')))
	<div id="error_holder" class="alert alert-error">
		<button type="button" class="close" data-dismiss="alert">×</button>
		@if (is_array(Session::get('status_error')))
			@foreach (Session::get('status_error') as $error)
				{{ $error }}<br/>
			@endforeach
		@else
			{{ Session::get('status_error') }}
		@endif
</div>
@endif