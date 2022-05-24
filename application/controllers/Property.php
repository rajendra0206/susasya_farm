<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';



class Property extends BaseController
{

    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('property_model'); 
        $this->load->model('common_model');        
        $this->load->library('common');
       
        $this->isLoggedIn();   
       
    }

    /**
     * This function is used to load the property list
     */
    function propertyListing()
    {
        if(!$this->isAdmin())
        {
            $this->loadThis();
        }
        else
        {                    
            $searchText = $this->security->xss_clean($this->input->post('searchText'));
            $data['searchText'] = $searchText;
            
            $this->load->library('pagination');
            
            $count = $this->property_model->propertyListingCount($searchText);

			$returns = $this->paginationCompress( "propertyListing/", $count, 10 );
            
            $data['userRecords'] = $this->property_model->propertyListing($searchText, $returns["page"], $returns["segment"]);
            
            $this->global['pageTitle'] = 'Susasya : Property Listing';
            
            $this->loadViews("admin_properties", $this->global, $data, NULL);
        }
    }

    function addProperty(){
        if(!$this->isAdmin())
        {
            $this->loadThis();
        }
        else
        {             
            

            $data['states'] = $this->common->getStateList();
            $data['city'] = $this->common->getDistrictList();
            $data['mandal'] = $this->common->getMandalList(); 
            //echo '<pre>'; print_r($data['mandal']); exit;
            $record_id = @end($this->uri->segment_array()); 
            if($record_id){
                $data['propertyInfo'] = $this->property_model->getPropertyDetails($record_id);
            }
            
            $this->global['pageTitle'] = 'Susasya : Add/Edit Property'; 
            $this->loadViews("add_admin_property", $this->global, $data);            
        } 
    }

    function addNewProperty(){
       echo '<pre>';
        $filenames = '';
        
        if(isset($_FILES['imgs']['name'][0]) && $_FILES['imgs']['name'][0] !== ''){
            $imgcount = count($_FILES['imgs']['tmp_name']); 
            for($i=0; $i<$imgcount; $i++ ){
                $time = date("d-m-Y")."-".time();
                $filename = $time.$_FILES['imgs']['name'][$i];
                
                $location = 'farm_images/'. $filename;
                $this->compressImage($_FILES['imgs']['tmp_name'][$i],$location,60);        
                $filenames .= "$filename,";
            }
            $filenames = rtrim($filenames, ',');
        }

        if($_POST['property_id'] ){
            if($filenames){
                $filenames .= ','.$_POST['property_images'];
            }else{
                $filenames .= $_POST['property_images'];
            }
                
        }
       
    
       // Compress Image        
        $propertyInfo = array('user_id' => $_SESSION['userId'], 'state' => $_POST['state'], 'district'=>$_POST['district'], 'mandalam'=>$_POST['mandal'], 'survey_no'=> $_POST['surveyno'], 'extent'=>$_POST['extent'], 'owner_type'=>$_POST['owner_type'], 'contact_no'=>$_POST['mobile'], 'price_per_cent'=>$_POST['percetn'], 'no_of_transactions'=>$_POST['nooftransactions'], 'farm_type'=>$_POST['farmtype'], 'map_info'=>$_POST['latlong'],'farm_images' => $filenames);
        $this->load->model('property_model');
       
        $result = $this->property_model->addNewProperty($propertyInfo, $_POST['property_id']);

        redirect('propertyListing');
        
    }

    // Compress image
    public function compressImage($source, $destination, $quality) {

        $info = getimagesize($source);
    
        if ($info['mime'] == 'image/jpeg') 
        $image = imagecreatefromjpeg($source);
    
        elseif ($info['mime'] == 'image/gif') 
        $image = imagecreatefromgif($source);
    
        elseif ($info['mime'] == 'image/png') 
        $image = imagecreatefrompng($source);
    
        imagejpeg($image, $destination, $quality);
    
    }   

    function deleteProperty(){
        
        if(!$this->isAdmin())
        {
            echo(json_encode(array('status'=>'access')));
        }
        else
        {
            $propertyId = $this->input->post('propertyId');
            //$userInfo = array('isDeleted'=>1,'updatedBy'=>$this->vendorId, 'updatedDtm'=>date('Y-m-d H:i:s'));
            
            $result = $this->property_model->deleteProperty($propertyId);
            
            if ($result) { echo(json_encode(array('status'=>TRUE))); }
            else { echo(json_encode(array('status'=>FALSE))); }
        }
    }

}

?>