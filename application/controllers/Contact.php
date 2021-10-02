<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

/**
 * Class : User (UserController)
 * User Class to control all user related operations.
 * @author : Kishor Mali
 * @version : 1.1
 * @since : 15 November 2016
 */
class Contact extends BaseController
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
         $this->load->model('contact_model');

        $this->isLoggedIn();   
    }
    


    
    
    /**
     * This function used to load the first screen of the user
     */
    public function index()
    {

      
                     
        
        $this->global['pageTitle'] = 'Kontakt';
        $this->loadViews("contact/contact", $this->global, null , NULL);
    }
    


    

      function addNew(){

        $contactInfo = array(
                 'nom' => $this->input->post('nom') ,
                 'prenom' => $this->input->post('prenom') ,
                 'adresse' => $this->input->post('adresse') ,
                 'ville' => $this->input->post('ville') ,
                 'phone'=> $this->input->post('email') ,                
                 'email'=> $this->input->post('email') ,
                 'message'=>$this->input->post('message'),
                 'createdDtm'=>date('Y-m-d H:i:s'),
                     );
                
        $result = $this->contact_model->addNewContact($contactInfo);

           


       redirect('')  ; 

     }

}