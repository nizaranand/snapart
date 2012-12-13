@layout('interface.default')
@section('title') snapArt: Log In @endsection
@section('internal_css')
<style>
	#error_holder{
		width: 450px;
		margin: auto;
		font-size: 14px;
		margin-top: 10px;
	}
	#login_form_container{
		width: 450px;
		margin: auto;
		margin-top: 10px;
	}
	#login_form_container form{
		width: 410px;
		margin:auto;
		margin-left: -80px;
		margin-bottom: -10px;
	}
</style>
@endsection
@section('content')
	<div id="login_holder">
		{{ render('plugins.error') }}
		<div id="login_form_container" class="well">
			{{ Form::open('users/validate_login', 'POST', array('class'=>'form-horizontal')) }}
				<div class="control-group">
					<label class="control-label" for="username_login"><strong>Username</strong></label>
	        <div class="controls">
	        	{{ Form::text('username_login', Input::old('username_login'), array('id'=>'username_login', 'class'=>'input-xlarge')) }}
	        </div>
	      </div>
	      <div class="control-group">
					<label class="control-label" for="password_login"><strong>Password</strong></label>
	        <div class="controls">
	          {{ Form::password('password_login', array('id'=>'password_login', 'class'=>'input-xlarge')) }}
	        </div>
	      </div>
	      <div class="control-group">
        <div class="controls">
          <button type="submit" name="submit_login" id="submit_login" class="btn blue_button">Log in</button>
        </div>
      </div>
			{{ Form::close() }}
		</div>
	</div>
@endsection