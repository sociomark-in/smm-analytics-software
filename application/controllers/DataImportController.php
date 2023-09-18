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
}
