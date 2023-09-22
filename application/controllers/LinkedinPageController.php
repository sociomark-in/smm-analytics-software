<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LinkedinPageController extends CI_Controller
{
    public $menu;
    public $data;

    public function __construct()
    {
        parent::__construct();
        $this->load->model('MenuModel');
        $this->load->model('pages/LinkedinPageModel', 'LinkedInPage');
        $this->menu = json_decode($this->MenuModel->load_menu(), 3);
        $this->data['menu'] = $this->menu;
    }

    public function index()
    {
        $this->data['all_accounts'] = $this->LinkedInPage->get_all();
        $this->data['page'] = [
            'title' => 'All LinkedIn Pages'
        ];
        $this->data['breadcrumb'] = [
            "Home" => "",
            "Pages" => "accounts-and-pages",
            "All LinkedIn Pages" => "Current",
        ];
        $this->load->view('analytics/linkedin/page/index', $this->data);
    }

    public function page($id)
    {
        $visitors = $this->LinkedInPage->get_visitor_metrics(true);
        $visitors_orig = $this->LinkedInPage->get_visitor_metrics(false);
        $this->data['visitors_metrics']['data'] = $visitors_orig;
        $this->data['visitors_metrics']['duration'] = ['from' => $visitors[0][0], 'to' => $visitors[count($visitors) - 1][0]];
        $this->data['visitors_company_size'] = $this->LinkedInPage->details('_visitors');
        $this->data['page'] = [
            'id' => $id,
            'title' => 'LinkedIn Page'
        ];
        $this->data['breadcrumb'] = [
            "Home" => "",
            "Pages" => "accounts-and-pages",
            "All LinkedIn Pages" => "pages/linkedin/all",
            "LinkedIn Page" => "Current",
        ];
        $this->load->view('analytics/linkedin/page/detail', $this->data);
    }
}
