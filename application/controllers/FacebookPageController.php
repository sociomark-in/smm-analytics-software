<?php

class FacebookPageController extends CI_Controller
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
	public function index()
	{
        $this->data['breadcrumb'] = [
			"Home" => "",
			"Pages" => "pages",
			"All Facebook Pages" => "pages/facebook",
			"Facebook Page Name" => "Current",
		];
		$this->load->view('analytics/facebook/page/index', $this->data);
	}
}
