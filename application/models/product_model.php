<?php 
require APPPATH.'/models/base_model.php';
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends Base_model
{   
    function __construct() 
    {
        // Call the Model constructor
        parent::__construct();
    }

    public function get_all_product()
    {   
        return $this->get_all_result('product');
    }

    public function get_by_id($id)
    {   
        return $this->get_row_by_id('product', 'id', $id);
    }

    public function input_product($data)
    {   
        return $this->insert('product', $data);
    }

    public function edit_product($data, $id)
    {   
        return $this->update_by_id('product', $data, 'id', $id);
    }
    
    public function delete_product($id)
    {   
        return $this->delete_by_id('product', 'id', $id);
        
    }

}