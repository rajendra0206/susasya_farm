<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class : Login (LoginController)
 * Login class to control to authenticate user credentials and starts user's session.
 * @author : Rajendranath Yarra
 * @version : 1.1
 * @since : 24 02 2022
 */
class Landing extends CI_Controller
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
		
        $this->load->model('user_model'); 
        $this->load->library('email');
        $config['protocol']    = 'smtp';
        $config['smtp_host']    = 'ssl://smtp.gmail.com';
        $config['smtp_port']    = '465';
        $config['smtp_timeout'] = '7';
        $config['smtp_user']    = 'rajendra.yarra@gmail.com';
        $config['smtp_pass']    = 'Gorakala@123';
        $config['charset']    = 'utf-8';
        $config['newline']    = "\r\n";
        $config['mailtype'] = 'text'; // or html
        $config['validation'] = TRUE; // bool whether to validate email or not      

        $this->email->initialize($config);   
        $this->load->model('property_model');    
    }

    /**
     * Index Page for this controller.
     */
    public function index()
    {       
	
        $this->load->model('common_model');        
        $this->load->library('common');

        $data['states'] = $this->common->getStateList();
        $data['city'] = $this->common->getDistrictList();
        $data['mandal'] = $this->common->getMandalList();     
        
        $data['latest_propertyInfo'] = $this->property_model->getLatestProperty();

        $this->load->view('land_header');         
        $this->load->view('landingpage', $data);
        $this->load->view('land_footer', $data); 
    }

    
    function saveContactInfo(){
        
        $from_email = "email@example.com";
        $to_email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
                
        $this->email->from($from_email, 'Identification');
        $this->email->to($to_email);
        $this->email->subject($subject);
        $this->email->message($message);
        
        //Send mail
        if($this->email->send())
            echo  "email_sent", "Congragulation Email Send Successfully.";
        else
            echo "email_sent", "You have encountered an error";
        
    }

    public function getPropertyData(){
        
        $state = $this->input->post('state'); 
        $district = $this->input->post('district');
        $mandalam = $this->input->post('mandalam');
       
      
        $getOrderInfo = $this->property_model->getPropertyList($state, $district, $mandalam);
        $dataArray = array();
        
        foreach ($getOrderInfo as $element) { 
            if($element['farm_type'] == 1){ $farmtype = 'Empty land'; }elseif($element['farm_type'] == 2){ $farmtype = 'With Crop';  }else{ $farmtype = '-';}
            if($element['owner_type'] == 1){ $ownertype = 'Land Owner'; }elseif($element['owner_type'] == 2){ $ownertype = 'Agent';  }else{ $ownertype = '-';}
            $more = '<a href="#" class="usercheck" id="userCheck" data-id="'.$element['id'].'">Read More</a>';
            $dataArray[] = array(
                $farmtype,
                $ownertype,                
                $element['extent'],
                $element['price_per_cent'],	
				$more				
            );
        }
        echo json_encode(array("data" => $dataArray));
    }

}

?>