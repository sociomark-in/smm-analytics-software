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

    public function index(){
        $this->data['page'] = [
            'title' => 'All Facebook Pages'
        ];
        $this->data['breadcrumb'] = [
            "Home" => "",
            "Pages" => "pages",
            "All Facebook Pages" => "Current",
        ];
        $this->load->view('analytics/facebook/page/index', $this->data);
    }

    public function page($id)
    {
        $this->data['page'] = [
            'id' => $id,
            'title' => 'Facebook Page'
        ];
        $this->data['breadcrumb'] = [
            "Home" => "",
            "Pages" => "pages",
            "All Facebook Pages" => "pages/facebook/all",
            "Facebook Page" => "Current",
        ];
        $this->load->view('analytics/facebook/page/index', $this->data);
    }
}
