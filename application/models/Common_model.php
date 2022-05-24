<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class : Login_model (Login Model)
 * Login model class to get to authenticate user credentials 
 * @author : Rajendranath Yarra
 * @version : 1.1
 * @since : 24 02 2022
 */
class Common_model extends CI_Model
{
    function getStates(){
        $this->db->select('id, name');
        $this->db->from('tbl_state');
        $query = $this->db->get();
        return $query->result_array();
    }

    function getDistrict(){
        $this->db->select('id, name');
        $this->db->from('tbl_city');
        $query = $this->db->get();
        return $query->result_array();
    }

    function getMandal(){
        $this->db->select('id, name');
        $this->db->from('tbl_mandal');
        $query = $this->db->get();
        return $query->result_array();
    }
}