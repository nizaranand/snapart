<?php

class UserAccounts extends Eloquent{
	public static $table = 'tbl_useraccounts';

	public static function insert_new_account($username, $email, $password, $birthday, $gender){
		return DB::table('tbl_accounts')->insert_get_id(array('username'=>$username, 'email'=>$email, 'password'=>Hash::make($password), 'dateofbirth'=>$birthday, 'gender'=>$gender, 'date_registered'=>DB::raw('NOW()')));
	}
}

?>