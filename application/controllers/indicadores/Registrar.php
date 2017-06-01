<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registrar extends MY_Controller {
    
    public function __construct()
    {
        parent::__construct();
        // Force SSL
        //$this->force_ssl();        
        // Form and URL helpers always loaded (just for convenience)    
        $this->load->helper('form');
        $this->is_logged_in();
       // $this->require_min_level(1);
    }
  
    
    
     // --------------------------------------------------------------
    /**
     * Muestra al usuario la interfaz para registrar el indicador    
     * @param  -_-  
     */     
    public function registrar_formulario(){
        
        if(  $this->auth_role == 'admin' )
        {
           $this->load->view('indicadores/registrar_formulario')  ;                  
              
        }
        
    }
    
    
}
