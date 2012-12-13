<?php

class Profile_Controller extends Base_Controller{
	
	public $restful = true;

	public function get_index($username){
		return View::make('profile.index');
	}

	public function get_gallery($username){
		return View::make('profile.gallery');
	}
}

?>