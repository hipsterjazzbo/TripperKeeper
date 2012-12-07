<?php

class Base_Controller extends Controller {

	public function __construct()
	{
		Asset::add('styles', 'css/styles.css');
		Asset::add('ajax', 'js/ajax.js', 'jquery');
	}

	/**
	 * Catch-all method for requests that can't be matched.
	 *
	 * @param  string    $method
	 * @param  array     $parameters
	 * @return Response
	 */
	public function __call($method, $parameters)
	{
		return Response::error('404');
	}

}