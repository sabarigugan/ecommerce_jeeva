<?php

class Admindatatable extends CI_Model{

    function __construct() {

    }

    public function getRows($postData,$tabledata){
        $this->_get_datatables_query($postData,$tabledata);
        if($postData['length'] != -1){
            $this->db->limit($postData['length'], $postData['start']);
        }
        if(isset($postData['status'])){
            $this->db->where($tabledata['status'], $postData['status']);
        }
        // if($tabledata['table'] == 'categories'){
        //     $this->db->where('category_type !=', '0');
        // }
        $this->db->where('status', '1');
        $query = $this->db->get();
        return $query->result();
    }

    /*
     * Count all records
     */
    public function countAll($tabledata){
        $this->db->from($tabledata['table']);
        // if($tabledata['table'] == 'categories'){
        //     $this->db->where('category_type !=', '0');
        // }
        $this->db->where('status', '1');
        return $this->db->count_all_results();
    }

    /*
     * Count records based on the filter params
     * @param $_POST filter data based on the posted parameters
     */
    public function countFiltered($postData, $tabledata){
        $this->_get_datatables_query($postData, $tabledata);
        if(isset($postData['status'])){
            $this->db->where($tabledata['status'], $postData['status']);
        }
        // if($tabledata['table'] == 'categories'){
        //     $this->db->where('category_type !=', '0');
        // }
        $this->db->where('status', '1');
        $query = $this->db->get();
        return $query->num_rows();
    }

    /*
     * Perform the SQL queries needed for an server-side processing requested
     * @param $_POST filter data based on the posted parameters
     */
    private function _get_datatables_query($postData, $tabledata){

        $this->db->from($tabledata['table']);
        $this->db->where('status', '1');
        // if($tabledata['table'] == 'categories'){
        //     $this->db->where('category_type !=', '0');
        // }
        if(isset($postData['status'])){
            $this->db->where($tabledata['status'], $postData['status']);
        }

        $i = 0;
        // loop searchable columns
        foreach($tabledata['column_search'] as $item){
            // if datatable send POST for search
            if($postData['search']['value']){
                // first loop
                if($i===0){
                    // open bracket
                    $this->db->group_start();
                    $this->db->like($item, $postData['search']['value']);
                }else{
                    $this->db->or_like($item, $postData['search']['value']);
                }

                // last loop
                if(count($tabledata['column_search']) - 1 == $i){
                    // close bracket
                    $this->db->group_end();
                }
            }
            $i++;
        }

        if(isset($postData['order'])){
            $this->db->order_by($tabledata['column_order'][$postData['order']['0']['column']], $postData['order']['0']['dir']);
        }else if(isset($tabledata['order'])){
            $order = $tabledata['order'];
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }

}
