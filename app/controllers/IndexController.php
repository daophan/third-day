<?php

use Phalcon\Mvc\Controller;

class IndexController extends Controller
{

	public function indexAction()
	{
		
	}

	public function loginAction()
	{
		$request = new \Phalcon\Http\Request();
		if ($request->isPost() == true) {
			// Check password
			$password = $request->getPost('password');

			if($password == 'W&S1017') // Login success
			{
				$this->view->user = new User();
			}
		} 
		else echo "Where are you come from?";
	}

	public function profileAction()
	{
		
	}
}