<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Google_area extends CI_Controller
{
    function __construct() {
        parent::__construct();
        // Load user model
        $this->load->model('Google_model');
    }
    
    public function index(){
        // Include the google api php libraries
       // include_once APPPATH."libraries/google-api-php-client/Google_Client.php";
        //include_once APPPATH."libraries/google-api-php-client/contrib/Google_Oauth2Service.php";
        
        // Google Project API Credentials
        $clientId = '624094793332-9kbkefpjgk1gh6ksio0itkgs7gumgp3o.apps.googleusercontent.com';
        $clientSecret = 'kOaHt-SRIkRGFchJwS8rtwve';
        $redirectUrl = base_url() . 'auth/oauth2callback';
        
        // Google Client Configuration
        $gClient = new Google_Client();
        $gClient->setApplicationName('Login register online');
        $gClient->setClientId($clientId);
        $gClient->setClientSecret($clientSecret);
        $gClient->setRedirectUri($redirectUrl);
        $google_oauthV2 = new Google_Oauth2Service($gClient);

        if (isset($_REQUEST['code'])) {
            $gClient->authenticate();
            $this->session->set_userdata('token', $gClient->getAccessToken());
            redirect($redirectUrl);
        }

        $token = $this->session->userdata('token');
        if (!empty($token)) {
            $gClient->setAccessToken($token);
        }

        if ($gClient->getAccessToken()) {
            $userProfile = $google_oauthV2->userinfo->get();
            // Preparing data for database insertion
            $userData['oauth_provider'] = 'google';
            $userData['oauth_uid'] = $userProfile['id'];
            $userData['first_name'] = $userProfile['given_name'];
            $userData['last_name'] = $userProfile['family_name'];
            $userData['email'] = $userProfile['email'];
            $userData['gender'] = $userProfile['gender'];
            $userData['locale'] = $userProfile['locale'];
            $userData['profile_url'] = $userProfile['link'];
            $userData['picture_url'] = $userProfile['picture'];
            // Insert or update user data
            $userID = $this->user->checkUser($userData);
            if(!empty($userID)){
                $data['userData'] = $userData;
               // $this->session->set_userdata('userData',$userData);
			  	$this->session->set_userdata('id', $userData);
			  	$this->session->set_userdata('user', "user");				
				
            } else {
               $data['userData'] = array();
            }
        } else {
            $data['authUrl'] = $gClient->createAuthUrl();
        }
        //$this->load->view('user_authentication/index',$data);
		$this->load->view('private_area',$data);
 				//redirect('private_area');		
		
    }
    
    public function logout() {
        $this->session->unset_userdata('token');
        $this->session->unset_userdata('userData');
        $this->session->sess_destroy();
        redirect('/user_authentication');
    }
}