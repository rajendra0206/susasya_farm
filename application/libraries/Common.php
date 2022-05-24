<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class : Login (LoginController)
 * Common class to control to get all common data.
 * @author : Rajendranath Yarra
 * @version : 1.1
 * @since : 24 02 2022
 */
class Common 
{

    private $ci;
    public function __construct()
    {
        $this->ci =& get_instance();
        $this->ci->load->model('common_model');
    }

    public function getStateList()
    {                       
        $statelist = $this->ci->common_model->getStates();
        return $statelist;
    }

    public function getDistrictList(){
        $districtlist = $this->ci->common_model->getDistrict();
        return $districtlist;
    }

    public function getMandalList(){
        $mandallist = $this->ci->common_model->getMandal();
        return $mandallist;
    }

}