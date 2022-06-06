<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
class Property_model extends CI_Model
{

    function propertyListingCount($searchText = '')
    {
        $this->db->select('*');
        $this->db->from('tbl_properties');
        //$this->db->join('tbl_roles as Role', 'Role.roleId = BaseTbl.roleId','left');
        if(!empty($searchText)) {
            $likeCriteria = "(phone  LIKE '%".$searchText."%'
                            OR  survey_no  LIKE '%".$searchText."%'
                            OR  extent  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        //$this->db->where('BaseTbl.isDeleted', 0);
        // $this->db->where('BaseTbl.roleId !=', 1);
        $query = $this->db->get();
        //echo $this->db->last_query();
        return $query->num_rows();
    }

    function propertyListing($searchText = '', $page, $segment)
    {
        $this->db->select('*');
        $this->db->from('tbl_properties');
        //$this->db->join('tbl_roles as Role', 'Role.roleId = BaseTbl.roleId','left');
        if(!empty($searchText)) {
            $likeCriteria = "(phone  LIKE '%".$searchText."%'
                            OR  survey_no  LIKE '%".$searchText."%'
                            OR  extent  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        //$this->db->where('BaseTbl.isDeleted', 0);
        // $this->db->where('BaseTbl.roleId !=', 1);
        $this->db->order_by('id', 'DESC');
        $this->db->limit($page, $segment);
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }
    
    function addNewProperty($proprtyInfo, $id){
        $this->db->trans_start();
        if(!$id){
            $this->db->insert('tbl_properties', $proprtyInfo);        
            $insert_id = $this->db->insert_id(); 
        }else{
            $this->db->where('id', $id);
            $this->db->update('tbl_properties', $proprtyInfo);
            $insert_id = $id; 
        }               
        $this->db->trans_complete();        
        return $insert_id;
    }

    function getPropertyDetails($id){
        $this->db->select('*');
        $this->db->from('tbl_properties');
        $this->db->where('id', $id);        
        $query = $this->db->get();        
        return $query->row();
    }

    function deleteProperty($id){        
        $deleted = $this->db->delete('tbl_properties', array('id' => $id));       
        return $deleted;                
    }

    function getPropertyList($state , $district , $mandalam){
        $this->db->select(array('o.farm_type', 'o.owner_type', 'o.extent', 'o.price_per_cent', 'o.id'));
        $this->db->from('tbl_properties o');
        
        if($state != null && $state && $state != 'Select State'){
            $this->db->where('o.state', $state);
        }     
        if($district != null && $district && $district != 'Select District'){                      
            $this->db->where('o.district', $district);
        } 
        if($mandalam != null && $mandalam && $mandalam != 'Select Mandal'){           
            $this->db->where('o.mandalam', $mandalam);
        } 

        $this->db->order_by('o.id', 'DESC');
        $query = $this->db->get();
        //echo $this->db->last_query();
        return $query->result_array();
    }
    
    function getLatestProperty(){
        $this->db->select('tp.id, tm.name, tp.farm_type, tp.farm_images');
        $this->db->from('tbl_properties tp'); // this is first table name
        $this->db->join('tbl_mandal tm', 'tm.id = tp.mandalam'); // this is second table name with both table ids
        $this->db->limit(4);
        
        $this->db->order_by('tp.id', 'DESC');
        $query = $this->db->get();
        return $query->result();        
    }

    function getPropertyDetail($pid){
        $this->db->select('*');
        $this->db->from('tbl_properties');
        $this->db->where('id', $pid);        
        $query = $this->db->get();        
        return $query->row();
    }

}

?>