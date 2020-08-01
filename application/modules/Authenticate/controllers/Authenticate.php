<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * User: Ing. Hector Curbelo Barrios
 */

class Authenticate extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('authenticate_mdl');
        $this->load->library('session');
        $this->load->library('auth');
    }


    public function validateAuth()
    {
        $usname = $this->input->post('SG_USER_NAME');
        $uspswd = $this->input->post('SG_USER_PASSW');

        if (!empty($usname) && !empty($uspswd)) 
        {    
            $rslt = json_decode($this->authenticate_mdl->validateAuth( $usname, $uspswd ));
            //var_dump($rslt);
            if( $rslt->status )
            {
                $token = $this->auth->SignIn($rslt);
                echo json_encode(['status'=>TRUE, 'message' => $rslt->message, 'view' => 'main' , 'token'=>$token ]);
            }
            else
            {
                echo json_encode($rslt);
            }
        }
        else
        {
            echo json_encode(['status' => FALSE,'data' => null, 'message' => 'Use this Framework as a way to quickly start any new project in IBM i with PHP language']);
        }
    }
}