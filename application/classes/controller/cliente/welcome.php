<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Cliente_Welcome extends Controller {

	public function action_index()
	{
		$this->response->body(View::factory('cliente/welcome'));
	}

	public function action_dump() {
		$this->response->body(URL::site('cliente/teste'));
	}

} // End Welcome
