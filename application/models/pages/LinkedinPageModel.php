<?php

class LinkedinPageModel extends CI_Model
{

    public $data = [];
    public $pages = [];

    public function __construct()
    {
        parent::__construct();
        $this->load->model('import/ExcelDataModel', 'ExcelImport');
    }

    public function get_visitor_metrics($chart, $suffix = "_visitors"){
        $data = $this->ExcelImport->importFromSheetName('Visitor metrics');
        if($chart){
            $entry = [];
            for ($i=0; $i < count($data['data']); $i++) { 
                array_push($entry, [date_format(date_create($data['headers'][$i]), 'Y-m-d'), $data['data'][$i]]);
            }
            $this->data = $entry;
        } else{
            $this->data = $data;
        }
        return $this->data;
    }

    /**
     * Get All LinkedIn Pages Details suffixed by $suffix = "_visitors"
     */
    public function get_all($suffix = "_visitors"){
        $this->pages = [
            [
                'id' => random_string('alnum', 32),
                'name' => "Ayushakti Ayurved Pvt Ltd LinkedIn Page",
                'slug' => "ayushakti-ayurved"
            ]
        ];
        return $this->pages;
    }

    /**
     * Get LinkedIn Page Details suffixed by $suffix
     */
    public function details($suffix){
        $this->pages = $this->get_all($suffix);
        foreach ($this->pages as $page) {
            $this->data = [];
            switch ($page['slug']) {
                case 'ayushakti-ayurved':
                    $this->data = $this->import_data('company-size');
                    break;
                
                default:
                    break;
            }
        } 
        return json_encode($this->data);
    }

    /**
     * Import Data from the Source Excel with the specified format in the [Documentation](https://<documentation_link>/)
     */
    public function import_data($source){
        $data = [];
        switch ($source) {
            case 'company-size':
                $data = $this->ExcelImport->importFromSheetName('Company size');
                break;
            
            default:
                # code...
                break;
        }
		return $data;
	}

}

?>