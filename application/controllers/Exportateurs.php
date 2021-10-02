<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

/**
 * Class : User (UserController)
 * User Class to control all user related operations.
 * @author : Kishor Mali
 * @version : 1.1
 * @since : 15 November 2016
 */
class Exportateurs extends BaseController
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
  
        $this->load->model('user_model');
        $this->load->model('exporter_model');
        $this->isLoggedIn();   
    }
    


    
    
    /**
     * This function used to load the first screen of the user
     */
    public function index()
    {

      
        $data['exportateurs'] = $this->exporter_model->exporterListing(0);  
        
        $this->global['pageTitle'] = 'Exportateurs';
        $this->loadViews("exporter/filtre", $this->global, $data , NULL);
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
                 'roleId'=>3
                     );
                
        $result = $this->user_model->addNewUser($userInfo);

        $exporterInfo = array(
                    'rs' => $this->input->post('rs') ,
                    'rc' => $this->input->post('rc') ,
                    'dc' => $this->input->post('dc') ,
                    'cd' => $this->input->post('cd') ,
                    'mf' => $this->input->post('mf') ,
                    'rc' => $this->input->post('rc') ,
                    'rb' => $this->input->post('rb') ,
                    'adresse' => $this->input->post('adresse') ,
                    'email' => $this->input->post('email') ,
                    'cp' => $this->input->post('cp') ,
                    'phone' => $this->input->post('phone') ,
                    'fax' => $this->input->post('fax') ,
                    'createdYear' => $this->input->post('createdYear') ,
                    'nbEmployee' => $this->input->post('nbEmployee') ,
                    'fj' => $this->input->post('fj') ,
                    'autre' => $this->input->post('autre') ,

                    'createdDtm'=>date('Y-m-d H:i:s'),
                    'createdBy'=>$result,
                     );
                
        $result = $this->exporter_model->addNewExporter($exporterInfo);     


       redirect('')  ; 

     }




    /**
     * This function used to load the first screen of the user
     */
    public function view($expoterId)
    {

      
        $data['exportateur'] = $this->exporter_model->exporter($expoterId);  
        
        $this->global['pageTitle'] = 'Exportateurs';
        $this->loadViews("exporter/view", $this->global, $data , NULL);
    }

}