<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';



class Produits extends BaseController {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('produit_model');
       
        
        $this->isLoggedIn();   
    }
    

    public function index()
		        {    
		                $this->global['pageTitle'] = 'Produits';
		            	$data['Produits'] = $this->produit_model->produitListing() ;
		                $this->loadViews("produits/list", $this->global, $data, NULL);   
		        }



	public function mesProduits($expoterId)
		        {    
		                $this->global['pageTitle'] = 'Porduits';
		            	$data['Produits'] = $this->produit_model->produitListing($expoterId) ;
		                $this->loadViews("academy/list", $this->global, $data, NULL);   
		        }
        		
    public function addNew($expoterId)
		        {

		        	$date = new DateTime();
                    $file_name = $date->getTimestamp() ;
                    $file_tmp = $_FILES['fname']['tmp_name'];
                      
                    $file_destination = 'uploads/produits/' . $file_name;

                    move_uploaded_file($file_tmp, $file_destination);
						
				   		   $xInfo = array(
			                 'nom' =>  $this->input->post('nom'), 
			                 'description' => $this->input->post('description') ,
			                 'image' =>  $file_name , 
			                 'exporterId' => $expoterId ,
			                 'createdDTM'=> date('Y-m-d H:i:s')
			                     );

			   		   	$resultat = $this->produit_model->addNewProduit($xInfo);
		       		
		        	redirect('Produits/mesProduits'.$resultat) ;  
		          
		        }    

		
		
		
}