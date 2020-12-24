<?php 
require APPPATH.'/models/base_model.php';
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends Base_model
{   
    function __construct() 
    {
        // Call the Model constructor
        parent::__construct();
    }

    public function register($data)
    {   
        return $this->insert('user', $data);
    }

    public function check_login($username)
    {
        return $this->get_one_result('user', 'username', $username);
    } 
}