<?php

class Base_Controller extends Controller {

	/**
	 * Catch-all method for requests that can't be matched.
	 *
	 * @param  string    $method
	 * @param  array     $parameters
	 * @return Response
	 */
	public function __construct(){
		//Assets
		Asset::add('jquery', 'js/jquery/jquery.min.js');
		Asset::add('bootstrap-css', 'css/bootstrap/bootstrap.css');
		parent::__construct();
  	}
	public function __call($method, $parameters)
	{
		return Response::error('404');
	}

}