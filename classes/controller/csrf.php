<?php
class Controller_Csrf extends Controller {
	public function action_generate()
	{
            header('Content-Type: text/javascript');
	    $this->request->response = json_encode(array('token'=>CSRF::token(true)));
	}
        
	public function action_javascript($type='jquery.js')
	{
            header('Content-Type: text/javascript');
	    $this->request->response = View::factory('csrf/javascript');
	}
}
