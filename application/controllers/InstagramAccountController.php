<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InstagramAccountController extends CI_Controller
{
    public $menu;
	public $data;
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('MenuModel');
		$this->menu = json_decode($this->MenuModel->load_menu(), 3);
		$this->data['menu'] = $this->menu;
	}
	public function index(){
        $this->data['page'] = [
            'title' => 'All Instagram Accounts'
        ];
        $this->data['breadcrumb'] = [
            "Home" => "",
            "Accounts" => "accounts-and-pages",
            "All Instagram Accounts" => "Current",
        ];
        $this->load->view('analytics/instagram/page/index', $this->data);
    }
	public function account($id)
	{
		$this->data['page'] = [
            'id' => $id
        ];
        $this->data['breadcrumb'] = [
			"Home" => "",
			"Pages" => "accounts-and-pages",
			"All Instagram Pages" => "accounts/instagram/all",
			"Instagram Page Name" => "Current",
		];
		$this->load->view('analytics/instagram/page/index', $this->data);
	}
}
