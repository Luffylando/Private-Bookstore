<?php

class Auth extends Controller
{


public function register(){

			$viewmodel = new AuthModel();
		$this->returnView($viewmodel->register(), true);
	}

	public function login(){

			$viewmodel = new AuthModel();
		$this->returnView($viewmodel->login(), true);

	}

	protected function logout(){

		unset($_SESSION['is_logged_in']);
		unset($_SESSION['user_data']);
		session_destroy();

		//redirect

		header('Location: ' . ROOT_URL);

	}
}

