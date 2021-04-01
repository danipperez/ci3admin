<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    // --------------------------------------------------------

	public function index()
	{
		$this->load->view('frontend/auth/index');
	}

    // --------------------------------------------------------

	public function forgot_password()
	{
		$this->load->view('frontend/auth/forgot_password');
	}

    // --------------------------------------------------------

    public function register()
	{
		$this->load->view('frontend/auth/register');
	}

    // --------------------------------------------------------

}