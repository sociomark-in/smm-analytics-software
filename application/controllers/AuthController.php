<?php

class AuthController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('accounts/UserModel', 'UserModel');
	}

	public function login()
	{
		$this->load->view('auth/login');
	}

	public function sign_in()
	{
		$data = [
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password')
		];
		$isOk = $this->UserModel->authenticate($data);
		$redirect = $this->input->get('url');
		if (!$isOk) {
			redirect('login');
		} else {
			$this->session->set_userdata(['user' => $isOk]);
			redirect(($redirect ? $redirect : base_url()));
		}
	}
}
