@layout('interface.default')
@section('title') snapArt: where application meets ART! @endsection
@section('internal_css')
<style>
	#starters_main_holder{
    margin: auto;
    min-height: 300px;
  }
  #starters_header{
    text-align: center;
  }
  #starters_choices_holder{
    width: 700px;
    margin: auto;
    margin-top: 30px;
  }
  #starters_choices_holder a{
    text-align: center;
  }
  #later_form{
    padding-top: 160px;
  }
</style>
@endsection

@section('content')
<div id="starters_main_holder">
  <div id="starters_header">
    <h2>Welcome to snap<span class="make_it_red">Art</span>!</h2>
    <h4>Please allow us to know you more better!</h4>
  </div>
  <div id="starters_choices_holder" class="row">
    <a href="/starters/aboutme" class="well white_button span2">
      <h3>About me</h3>
    </a>
    <a href="/starters/avatarpic" class="well blue_button span3">
      <h3>Picture & Avatar</h3>
    </a>
    <a href="/starters/interests" class="well green_button span2">
      <h3>Interests</h3>
    </a>
    {{ Form::open('users/update_starters', 'PUT', array('id'=>'later_form')) }}
      <button type="submit" name="submit_starters_content" id="submit_starters_content" class="btn red_button">I'll finish this later</button>
    {{ Form::close() }}
  </div>
</div>
@endsection