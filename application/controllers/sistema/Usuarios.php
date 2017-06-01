<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends MY_Controller {
    
    public function __construct()
    {
        parent::__construct();
        // Force SSL
        //$this->force_ssl();
        
        // Form and URL helpers always loaded (just for convenience)    
        $this->load->helper('form');
        $this->require_min_level(1);
    }
  
  
  // --------------------------------------------------------------
    /**
     * Lista los usuarios  del Modulo Sistema/usuarios     
     * @param  -_-  
     */   
    public function listar_usuarios()
    {
        
         // Method should not be directly accessible                      
        if(  $this->auth_role == 'admin' )
        {
            $this->load->model('sistema/Model_usuarios') ;
            $lst_usuarios = $this->Model_usuarios->listar_usuarios();
            
            $data = array (
                    'lst_usuarios' => $lst_usuarios
                   );
            
            $this->load->view('sistema/usuarios', $data); 
                      
              
        }
  
    }
    
        
 
    
    
}
