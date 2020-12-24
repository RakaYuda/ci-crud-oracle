<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Base_model extends CI_Model
{   
    function __construct() 
    {
        // Call the Model constructor
        parent::__construct();
    }

    function insert($table, $data)
    {
        return $this->db->insert($table, $data);
    }

    function get_one_result($table, $column, $id)
    {
        $hasil = $this->db->where($column, $id)->limit(1)->get($table);
        if($hasil->num_rows() > 0){
            return $hasil->row();
        } else {
            return array();
        }
    }

    function get_all_result($table)
    {
        return $this->db->get($table)->result();
    }

    function get_row_by_id($table, $column, $input)
    {
        return $this->db->get_where($table, [$column => $input])->row();
    }

    function update_by_id($table, $data, $column, $id)
    {
        return $this->db->update($table, $data, array($column => $id));
    }

    public function delete_by_id($table, $column, $id)
    {
        return $this->db->delete($table, array($column => $id));
    }
    
}