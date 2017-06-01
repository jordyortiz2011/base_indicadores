<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller {
    
    public function __construct()
    {
        parent::__construct();
        // Force SSL
        //$this->force_ssl();
        
        // Form and URL helpers always loaded (just for convenience)    
        $this->load->helper('form');
        $this->require_min_level(1);
    }
    
   
    public function index()
    {
        
         // Method should not be directly accessible         
                    
        if(  $this->auth_role == 'admin' )
        {               
         /* $html =   $this->load->view('comun/header', '' , TRUE);
          $html .=   $this->load->view('comun/nav_top', '' , TRUE);
          $html .=   $this->load->view('comun/nav_left', '' , TRUE);
          $html .=   $this->load->view('comun/body', '' , TRUE);
          $html .=   $this->load->view('comun/footer', '' , TRUE);
          echo $html;      */

            $this->load->view('comun/dashboard');
           
          //echo $html;      
        }
    
  
    }
    
        
 
    
    
}
