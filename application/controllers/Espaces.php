<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

/**
 * Class : User (UserController)
 * User Class to control all user related operations.
 * @author : Kishor Mali
 * @version : 1.1
 * @since : 15 November 2016
 */
class Espaces extends BaseController
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
  
      $this->load->model('salle_model');
      
        $this->isLoggedIn();   
    }
    


    
    
    /**
     * This function used to load the first screen of the user
     */
    public function index()
    {

       
                     
        $data['Salles'] = $this->salle_model->salleListing() ;
        $this->global['pageTitle'] = 'Espace';
        $this->loadViews("services/espaces/list", $this->global,  $data , NULL);
    }


     /**
     * This function used to load the first screen of the user
     */
    public function view($salleID)
    {

       
                     
         $data['salle'] = $this->salle_model->salle($salleID) ;
        $this->global['pageTitle'] = 'Espace '.$data['salle']->nom ;
        $this->loadViews("services/espaces/view", $this->global,  $data , NULL);
       
    }
    

}