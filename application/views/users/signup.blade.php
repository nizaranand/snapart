@layout('interface.default')
@section('title') Signup for FREE access to snapArt @endsection
@section('internal_css')
<style>
	#signup_message_holder{
    width: 550px;
    margin: auto;
  }
  #signup_message_holder h2{
    text-align: center;
  }
  #signup_form_holder{
    width: 410px;
    margin: auto;
  }
  #form_holder{
    width: 380px;
    margin:auto;
  }
  .control-group .controls input,
  .control-group .controls select{
    margin: 5px auto 0 auto;
  }
  .control-group:last-child{
    margin-top: 15px;
  }
  .control_label{
    text-align: left;
  }
  .notif_holder{
    font-size: 13px;
    display: none;
    color: #982522;
  }
  #bday_label{
    text-align: left;
    font-weight: bold;
  }
  #bday_msg{
    text-align: left;
  }
  #gender_label{
    padding-right: 90px;
    font-weight: bold;
  }
  #gender_msg{
    padding-right: 0px;
  }
  #month{
    width: 100px;
    font-size: 13px;
  }
  #day{
    width: 60px;
    font-size: 13px;
  }
  #year{
    width: 70px;
    font-size: 13px;
  }
  #gender{
    width: 135px;
    font-size: 13px;
  }
  #submit_registration{
    width: 380px;
  }
</style>
@endsection

@section('content')
<div id="signup_holder">
  <div id="signup_message_holder">
    <h2>Signup for FREE access to snap<span class="make_it_red">Art</span></h2>
  </div>
  <div id="signup_form_holder" class="well">
    {{ Form::open('users/validate_registration', 'POST', array('id'=>'form_holder')) }}
      <div class="control-group">
        <div class="controls">
          <input type="text" name="username" id="username" placeholder="Username" class="span5">
          <br/><span id="username_msg" class="notif_holder">aww</span>
        </div>
      </div>
      <div class="control-group">
        <div class="controls">
          <input type="text" name="email_address" id="email_address" placeholder="Email Address" class="span5">
          <br/><span id="email_msg" class="notif_holder"></span>
        </div>
      </div>
      <div class="control-group">
        <div class="controls">
          <input type="text" name="retype_email_address" id="retype_email_address" placeholder="Retype Email Address" class="span5">
          <br/><span id="ret_email_msg" class="notif_holder"></span>
        </div>
      </div>
      <div class="control-group">
        <div class="controls">
          <input type="password" name="password" id="password" placeholder="Password" class="span5">
          <br/><span id="password_msg" class="notif_holder"></span>
        </div>
      </div>
      <div class="control-group">
        <div class="controls">
          <div class="control_label">
            <span id="bday_label">Date of Birth</span>
            <span id="gender_label" class="pull-right">Gender</span>
          </div>
          <select name="month" id="month">
            <option value="">Month:</option>
            <option value="1">January</option>
            <option value="2">February</option>
            <option value="3">March</option>
            <option value="4">April</option>
            <option value="5">May</option>
            <option value="6">June</option>
            <option value="7">July</option>
            <option value="8">August</option>
            <option value="9">September</option>
            <option value="10">October</option>
            <option value="11">November</option>
            <option value="12">December</option>
          </select>
          <select name="day" id="day">
            <option value="">Day:</option>
            <?php for($d=1; $d<=31; $d++){ ?>
            <option value="{{ $d }}">{{ $d }}</option>
            <?php } ?>
          </select>
          <select name="year" id="year">
            <option value="">Year:</option>
            <?php
            $year = date('Y');
            for($y=$year; $y>=1950; $y--){
            ?>
            <option value="{{ $y }}">{{ $y }}</option>
            <?php } ?>
          </select>
          <select name="gender" id="gender">
            <option value="">Select an option:</option>
            <option value="Female">Female</option>
            <option value="Male">Male</option>
          </select>
          <div class="control_label">
            <span id="bday_msg" class="notif_holder"></span>
            <span id="gender_msg" class="pull-right notif_holder"></span>
          </div>
        </div>
      </div>
      <div class="control-group">
        <div class="controls">
          <button type="submit" name="submit_registration" id="submit_registration" class="btn blue_button">Sign up!</button>
        </div>
      </div>
    {{ Form::close() }}
  </div>
</div>
@endsection
@section('js_scripts')
<script type="text/javascript">
  (function(){
    var username = $("#username"),
        email_add = $("#email_address"),
        re_email = $("#retype_email_address"),
        password = $("#password"),
        bday_month = $("#month"),
        bday_day = $("#day"),
        bday_year = $("#year"),
        gender = $("#gender"),
        username_msg = $("#username_msg"),
        email_msg = $("#email_msg"),
        ret_email_msg = $("#ret_email_msg"),
        password_msg = $("#password_msg"),
        bday_msg = $("#bday_msg"),
        gender_msg = $("#gender_msg"),
        form = $("#form_holder"),
        emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/,
        error_count = 0;
    $("#submit_registration").on("click", function(e){
      e.preventDefault();
      error_count = 0;
      if(username.val() == ''){
        username_msg.show().text('Please select a username'); username.parent().parent().addClass('error');
        error_count++;
      }else{
        if(username.val().length < 6){
          username_msg.show().text('Username should be atleast 6 characters long'); username.parent().parent().addClass('error');
          error_count++;
        }else{
          username_msg.hide(); username.parent().parent().removeClass('error');
        }
      }

      if(email_add.val() == ''){
        email_msg.show().text('Please enter an email.'); email_add.parent().parent().addClass('error');
        error_count++;
      }else{
        if(!emailReg.test(email_add.val())){
          email_msg.show().text('Please enter a valid email format.'); email_add.parent().parent().addClass('error');
        }else{
          email_msg.hide(); email_add.parent().parent().removeClass('error');
        }
      }

      if(re_email.val() == ''){
        ret_email_msg.show().text('Please retype your email address'); re_email.parent().parent().addClass('error');
        error_count++;
      }else{
        if(email_add.val() != re_email.val()){
          ret_email_msg.show().text('Email should be the same!'); re_email.parent().parent().addClass('error');  email_add.parent().parent().addClass('error');
          error_count++;
        }else{
          ret_email_msg.hide(); re_email.parent().parent().removeClass('error'); email_add.parent().parent().removeClass('error');
        }
      }

      if(password.val() == ''){
        password_msg.show().text('Password should not be empty and atleast 6 characters long.'); password.parent().parent().addClass('error');
        error_count++;
      }else{
        if(password.val().length < 6){
          password_msg.show().text('Password should be atleast 6 characters long.'); password.parent().parent().addClass('error');
          error_count++;
        }else{
          password_msg.hide(); password.parent().parent().removeClass('error');
        }
      }

      if(bday_month.val() == '' || bday_day.val() == '' || bday_year.val() == ''){
        bday_msg.show().text('Please enter your date of birth');
        bday_month.parent().parent().addClass('error');
        error_count++;
      }else{
        bday_msg.hide(); bday_month.parent().parent().removeClass('error');
      }
      if(gender.val() == ''){
        gender_msg.show().text('Please pick your gender.');
        gender.parent().parent().addClass('error');
        error_count++;
      }else{
        gender_msg.hide(); gender.parent().parent().removeClass('error');
      }
      console.log(error_count);
      if(error_count == 0){
        form.submit();
      }
    });

    username.on("blur", function(){
      if(username.val() == ''){
        username_msg.show().text('Please select a username'); username.parent().parent().addClass('error');
        error_count++;
      }else{
        if(username.val().length < 6){
          username_msg.show().text('Username should be atleast 6 characters long'); username.parent().parent().addClass('error');
          error_count++;
        }else{
          username_msg.hide(); username.parent().parent().removeClass('error');
        }
      }
    });

    email_add.on("blur", function(){
      if(email_add.val() == ''){
        email_msg.show().text('Please enter an email.'); email_add.parent().parent().addClass('error');
        error_count++;
      }else{
        if(!emailReg.test(email_add.val())){
          email_msg.show().text('Please enter a valid email format.'); email_add.parent().parent().addClass('error');
        }else{
          email_msg.hide(); email_add.parent().parent().removeClass('error');
        }
      }
    });

    re_email.on("blur", function(){
      if(re_email.val() == ''){
        ret_email_msg.show().text('Please retype your email address'); re_email.parent().parent().addClass('error');
        error_count++;
      }else{
        if(email_add.val() != re_email.val()){
          ret_email_msg.show().text('Email should be the same!'); re_email.parent().parent().addClass('error');  email_add.parent().parent().addClass('error');
          error_count++;
        }else{
          if(!emailReg.test(re_email.val())){
            ret_email_msg.show().text('Please enter a valid email format.'); re_email.parent().parent().addClass('error');
          }else{
            ret_email_msg.hide(); re_email.parent().parent().removeClass('error');
          }
        }
      }
    });

    password.on("blur", function(){
      if(password.val() == ''){
        password_msg.show().text('Password should not be empty and atleast 6 characters long.'); password.parent().parent().addClass('error');
        error_count++;
      }else{
        if(password.val().length < 6){
          password_msg.show().text('Password should be atleast 6 characters long.'); password.parent().parent().addClass('error');
          error_count++;
        }else{
          password_msg.hide(); password.parent().parent().removeClass('error');
        }
      }
    });
  })();
</script>
@endsection