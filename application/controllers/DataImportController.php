<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once './vendor/autoload.php';

use \PhpOffice\PhpSpreadsheet\IOFactory;

class DataImportController extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/userguide3/general/urls.html
     */

    public $menu;
    public $data;

    public function __construct()
    {
        parent::__construct();
        $this->load->model('import/ExcelDataModel', 'ExcelImport');
        $this->load->model('visualisation/ChartModel', 'ChartModel');
    }
    public function excelData($source)
    {
        $data = [];
        switch ($source) {
            case 'company-size':
                $data = $this->ExcelImport->importFromSheetName('Company size');
                break;

            default:
                $data = $this->ExcelImport->importFromSheetName('Visitor metrics');
                break;
        }
        print_r(json_encode($data));
        // return json_encode($data);
    }

    public function import_page_views_by($device)
    {
        $data = [];
        switch ($device) {
            case 'desktop':
            case 'mobile':
            case 'total':
                $data = $this->ChartModel->visualize_data_to_(['page_views'], $device)[$device];
                # code...
                break;

            case 'all':
                $data = $this->ChartModel->visualize_data_to_(['page_views'], $device)[$device];
                # code...
                break;

            default:
                $data = $this->ChartModel->visualize_data_to_(['page_views'], $device);
                # code...
                break;
        }


        $dataset = [
            'website' => [
                'sum' => array_sum($data),
                'max' => max($data),
                'min' => min($data),
                'average' => array_sum($data)/count($data),
            ],
            'chart' => [
                'data' => $data
            ]
        ];
        print_r(json_encode($dataset));
    }

    public function import_page_unique_visitors_by($device){
        $data = [];
        switch ($device) {
            case 'desktop':
            case 'mobile':
            case 'total':
                $data = $this->ChartModel->visualize_data_to_(['page_unique_visitors'], $device)[$device];
                # code...
                break;

            case 'all':
                $data = $this->ChartModel->visualize_data_to_(['page_unique_visitors'], $device)[$device];
                # code...
                break;

            default:
                $data = $this->ChartModel->visualize_data_to_(['page_unique_visitors'], $device);
                # code...
                break;
        }


        $dataset = [
            'website' => [
                'sum' => array_sum($data),
                'max' => max($data),
                'min' => min($data),
                'average' => array_sum($data)/count($data),
            ],
            'chart' => [
                'data' => $data
            ]
        ];
        print_r(json_encode($dataset));
    }
}
