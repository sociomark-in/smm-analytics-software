<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once './vendor/autoload.php';
use \PhpOffice\PhpSpreadsheet\IOFactory;

class ExcelDataModel extends CI_Model
{
    protected $data = [];

    public function importFromSheetName($name)
	{
		$filename = FCPATH . "uploads/ayushakti-ayurved_visitors.xls";
		$fileType = IOFactory::identify($filename);
		$reader = IOFactory::createReader($fileType);
		$spreadsheet = $reader->load($filename);
		$sheet = $spreadsheet->getSheetByName($name);
		$count = 0;
		$this->data['headers'] = [];
		$this->data['data'] = [];
		foreach ($sheet->getRowIterator(2) as $row) {
			array_push($this->data['headers'],$sheet->getCell('A'.$row->getRowIndex())->getValue());
		}
		foreach ($sheet->getRowIterator(2) as $row) {
			array_push($this->data['data'],$sheet->getCell('B'.$row->getRowIndex())->getValue());
		}
		return $this->data;
	}
}
