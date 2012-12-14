<?php

class Home_Controller extends Base_Controller{
	public $restful = true;

	public function get_index(){
		if(!Auth::guest())
		if(Auth::user()->starters_edit == '0'){
			return Redirect::to('/starters');
		}
		return View::make('home.index');
	}

}

?>