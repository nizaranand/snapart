<?php

class Users_Controller extends Base_Controller{
	public $restful = true;

	public function get_index(){
		return View::make('users.index');
	}

	public function post_validation_registration(){
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

}

?>