<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_usuarios extends CI_Model {
   
    public function __construct()
    {
        parent::__construct();
        $this->load->database();    
    }       
  
// --------------------------------------------------------------
    /**
     * Obtiene todos los usuarios del sistema     
     * @param  -_-  
     * @return (Objeto) Lista con todos los usuarios registrados en el sistema
     *  */     

    public function listar_usuarios()
    {            
        $res = $this->db->get('users');         
        if (!$res)
        {
          $error = $this->db->error(); // Has keys 'code' and 'message'
          echo "$error[message]";
        }else 
        {                          
           return $res->result();
        }            
    }      
        

}