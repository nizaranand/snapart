<?php

class Users_Controller extends Base_Controller{
	public $restful = true;

	public function get_signup(){
		return View::make('users.signup');
	}

	public function get_login(){
		return View::make('users.login');
	}

	public function post_validate_registration(){
		$username = Input::get('username');
		$email_address = Input::get('email_address');
		$retype_email = Input::get('retype_email_address');
		$password = Input::get('password');
		$bday_month = Input::get('month');
		$bday_day = Input::get('day');
		$bday_year = Input::get('year');
		$gender = Input::get('gender');

		$birthday = $bday_year.'-'.$bday_month.'-'.$bday_day;

		$user_id = UserAccounts::insert_new_account($username, $email_address, $password, $birthday, $gender);
		Auth::login($user_id);
		return Redirect::to('/?msg=success');
	}

	public function post_validate_login(){
		$username = Input::get('username_login');
		$password = Input::get('password_login');

		$input = array(
			'username' => $username,
			'password' => $password
		);

		$rules = array(
			'username' => 'required|exists:tbl_useraccounts',
			'password' => 'required'
		);

		$messages = array('username_required'=>'Username is required to fill in.', 'username_exists'=>'The username is invalid', 'password_required'=>'Password is required to fill in.');
            
		$validation = Validator::make($input, $rules, $messages);
		if( $validation->fails() ) {
			return Redirect::to('login')->with_errors($validation)->with_input();
		}
    $credentials = array(
			'username' => $username,
			'password' => $password
		);
		if(Auth::attempt($credentials)) {
			return Redirect::to('/');
		} else {
			Session::flash('status_error', 'The username or password you entered was incorrect.');
			return Redirect::to('login')->with_input();
		}
	}

	public function get_logout(){
		Auth::logout();
    return Redirect::to('/');
	}
}

?>