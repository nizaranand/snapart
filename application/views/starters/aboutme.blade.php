@layout('interface.default')
@section('title') snapArt : About You! @endsection
@section('internal_css')
<style>
	#starters_main_holder{
    margin: auto;
    min-height: 300px;
  }
  #starters_header{
    text-align: center;
  }
  #aboutme_holder{
    width: 700px;
    margin: auto;
    /*margin-top: 30px;*/
  }
  #know_artist{
    background-color: #eeeeee;
    padding: 10px 30px;
  }
  #know_artist h4{
    display: inline-block;
  }
  #an_artist{
    margin-bottom: 10px;
    margin-left: 10px;
  }
  #specialty{
    margin-left: 25px;
  }
</style>
@endsection

@section('content')
<div id="starters_main_holder">
  <div id="starters_header">
    <h2>Welcome to snap<span class="make_it_red">Art</span>!</h2>
    <h4>Please allow us to know you more better!</h4>
  </div>
  <div id="aboutme_holder" class="row">
    <h4>Tell us about yourself</h4>
    {{ Form::open('users/update_aboutme', 'PUT') }}
      <div id="know_artist">
        <h4>I am an Artist!</h4>
        <input type="checkbox" name="an_artist" id="an_artist"/>
        <select name="specialty" id="specialty">
          <option value="0">Select Specialty</option>
          <option value="Artisan Crafts">Artisan Crafts</option>
          <option value="Design & Interface">Design & Interface</option>
          <option value="Digital Art">Digital Art</option>
          <option value="Film & Animation">Film & Animation</option>
          <option value="Literature">Literature</option>
          <option value="Photography">Photography</option>
          <option value="Traditional Art">Traditional Art</option>
          <option value="Other">Other</option>
          <option value="Varied">Varied</option>
        </select>
      </div>
    {{ Form::close() }}
  </div>
</div>
@endsection