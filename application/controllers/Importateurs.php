<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

/**
 * Class : User (UserController)
 * User Class to control all user related operations.
 * @author : Kishor Mali
 * @version : 1.1
 * @since : 15 November 2016
 */
class Importateurs extends BaseController
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
         $this->load->model('user_model');

        $this->isLoggedIn();   
    }
    


    
    
    /**
     * This function used to load the first screen of the user
     */
    public function index()
    {
        $this->global['pageTitle'] = 'Importateurs';
        $this->loadViews("acceuil", $this->global, null , NULL);
    }


     function addNew(){

        $userInfo = array(
                 'nom' => $this->input->post('nom') ,
                 'prenom' => $this->input->post('prenom') ,
                 'pays' => $this->input->post('pays') ,
                 'adresse' => $this->input->post('adresse') ,
                 'ville' => $this->input->post('ville') ,
                 'codePostal' => $this->input->post('codePostal') ,
                 'name' => $this->input->post('name') ,  
                 'email'=> $this->input->post('email') ,
                 'password'=>getHashedPassword($this->input->post('password')),
                 'createdDtm'=>date('Y-m-d H:i:s'),
                 'roleId'=>4
                     );
                
                $result = $this->user_model->addNewUser($userInfo);

        redirect('')  ; 

     }
    

}