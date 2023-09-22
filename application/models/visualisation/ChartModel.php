<?php

class ChartModel extends CI_Model
{
    public $result = [];

    // JSON Data String for the Charts
    public $chart = "";
    public function __construct()
    {
    }

    public function get($table_name, array $columns): string
    {
        global $result;
        foreach ($columns as $column) {
            $this->db->select($column);
        }
        $result = $this->db->get($table_name)->row();
        return json_encode($result);
    }

    public function visualize_data_to_(array $columns, $visualizer = "pie")
    {
        $data = json_decode($this->get('socio_visitor_metrix', $columns), true, 5);
        switch ($visualizer) {
            case 'heatmap':
                $this->chart = $this->data_to_heatmap($data);
                break;

            default:
                $this->chart = $this->data_to_pie($data);

                break;
        }
        return json_decode($this->chart, true, 3);
    }

    /* 
    public function data_to_charttype(array $data) : string{
        $chart = "";

        return $chart;
    } */
    public function data_to_pie(array $data): string
    {
        $array = [];

        foreach ($data as $key => $value) {
            $sdata = json_decode($value, true);
            foreach ($sdata as $dkey => $dvalue) {
                // $array[$dkey] = $dvalue['views'];
                foreach ($dvalue['views'] as $medium => $views) {
                    $array[$medium][$dvalue['date']] = $views;
                }
            }
        }
        $chart = json_encode($array);
        return $chart;
    }
    public function data_to_heatmap(array $data): string
    {
        $chart = "";

        return $chart;
    }
}
