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
            $more = '<a href="#" class="usercheck" id="userCheck" data-properyid="'.$element['id'].'">Read More</a>';
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

    public function userAuthWithPhone(){
        $phoneno = $_POST['phoneno'];       
                
        //next example will recieve all messages for specific conversation                
        if($_POST['otp_no'] === ''){
            
            //CODE TO SET COOKIE HERE
            $random_otp = rand(1111,9999);
            //$random_otp = 1978;
            setcookie("cookie_otp", $random_otp, time()+100);   
            
            //SEND OTP SMS CODE            
            $URL1 = "http://182.18.168.112:8082/Rest/AIwebservice/Bulk";
            $post_fields1 = array( 
                'user' => urlencode('ravi1241'),
                'password' => urlencode('Ravi@123'),
                'mobilenumber' => urlencode($phoneno),
                'message' => urlencode('OTP to approve mobile verification code is : '.$random_otp.' as your susasya login. Do not Share it with anyone. susasya.in Narandra.'),
                'sid' => urlencode('NARESU'),
                'mtype' => urlencode('n')
            );
            $params = '';
            foreach($post_fields1 as $key=>$value)
            {
                $params .= $key.'='.$value.'&';
            }           
            $params = trim($params, '&');	        
            $ch1 = curl_init();
            curl_setopt($ch1, CURLOPT_URL, $URL1.'?'.$params);
            curl_setopt($ch1, CURLOPT_RETURNTRANSFER, true);	
            curl_setopt($ch1, CURLOPT_SSL_VERIFYHOST, FALSE);
            curl_setopt($ch1, CURLOPT_SSL_VERIFYPEER, FALSE);
            curl_setopt($ch1, CURLOPT_CONNECTTIMEOUT , 7); //Timeout after 7 seconds
            curl_setopt($ch1, CURLOPT_HEADER, true);	
        
            $RESULT=curl_exec($ch1);            
            // Check if any error occurred
                if(curl_errno($ch1))
                {
                    echo 'Curl error: ' . curl_error($ch1);
                }    
                // Closing
                curl_close($ch1);

                var_dump($result);
            //END OF SEND OTP CODE
            
        }else{
            //echo $_COOKIE["cookie_otp"];
            //Condition to check POST and Cookie OTP Both are same or not
            if(($_POST['otp_no']) === $_COOKIE["cookie_otp"]){
                //Conditio to check whether OTP expired or not?
                if(!empty($_COOKIE["cookie_otp"])){
                    echo "alive";
                }else{
                    echo "died";
                }
            }else{
                echo "mismatch";
            }           
        }
    }
    //End of the function 

    //Property details Page functionality
    public function propertyDetail(){
        if(!empty($_COOKIE["cookie_otp"])){
            $propery_id = end($this->uri->segments);
            $getPropertyData = $this->property_model->getPropertyDetail($propery_id);
            $data['properyData'] = $getPropertyData;
            $this->load->view('property_detail_header');         
            $this->load->view('property_detail', $data);
            $this->load->view('property_detail_footer'); 
        }else{
            header("Location: ".base_url()); /* Redirect browser */
            exit();
        }
    }

}

?>