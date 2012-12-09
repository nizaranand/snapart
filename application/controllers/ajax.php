<?php

class Ajax_Controller extends Base_Controller{
	public $restful = true;

	public function post_check_username(){
		$username = Input::get('username');

		if(empty($username)){
			$errors[] = 'Please select a username';
		}else{
			if(strlen($username) < 6){
				$errors[] = 'Username should be atleast 6 characters long';
			}else{
				
			}
		}
		if(!empty($errors)){
			foreach($errors as $error){
				$return['error'] = true;
				$return['msg'] = $error;
			}
		}else{
			$return = array('error'=>false, 'msg'=>null);
		}
		echo json_encode($return);
	}
}

?>