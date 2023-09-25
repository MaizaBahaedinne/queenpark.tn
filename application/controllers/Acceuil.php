<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

/**
 * Class : User (UserController)
 * User Class to control all user related operations.
 * @author : Kishor Mali
 * @version : 1.1
 * @since : 15 November 2016
 */
class Acceuil extends BaseController
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
            
        $this->load->model('reservation_model');
        $this->load->model('user_model');
        $this->isLoggedIn();   
    }
    


    
    
    /**
     * This function used to load the first screen of the user
     */
    public function index()
    {

        $data["clients"] = $this->user_model->users(4) ;              
        $data["projects"] = $this->reservation_model->ReservationAll() ; 
        $this->global['pageTitle'] = 'Acceuil';
        $this->loadViews("acceuil", $this->global,  $data , NULL);
    }


   

}