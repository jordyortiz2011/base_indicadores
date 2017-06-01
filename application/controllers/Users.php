<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends MY_Controller {
    
    public function __construct()
    {
        parent::__construct();
        // Force SSL
        //$this->force_ssl();
        
        // Form and URL helpers always loaded (just for convenience)    
        $this->load->helper('form');
    }
    
   
    public function index()
    {
        
         // Method should not be directly accessible         
        $this->is_logged_in();             
        if( ! empty( $this->auth_role ) )
        {            
       
          $html =   $this->load->view('comun/header', '' , TRUE);
          $html .=   $this->load->view('comun/nav_top', '' , TRUE);
          echo $html;  
          
        }else {
            
             if( $this->uri->uri_string() == 'examples/login')
                show_404();
    
            if( strtolower( $_SERVER['REQUEST_METHOD'] ) == 'post' )
                $this->require_min_level(1);
            
            $this->setup_login_form();
            
            $html =  $this->load->view('comun/login', '',TRUE);
           
            echo $html;
        }        
       
       
    }
    
    public function login()
    {
                
         $this->is_logged_in();             
        if( ! empty( $this->auth_role ) )
        {            
       
         redirect(base_url() . 'comun/dashboard');      
          
        }else {
            
             if( $this->uri->uri_string() == 'examples/login')
                show_404();
    
            if( strtolower( $_SERVER['REQUEST_METHOD'] ) == 'post' )
                $this->require_min_level(1);
            
            $this->setup_login_form();
            
            $html =  $this->load->view('comun/login', '',TRUE);
           
            echo $html;
        }        
    }
    
        
    /**
     * Log out
     */
    public function logout()
    {
        $this->authentication->logout();

        // Set redirect protocol
        $redirect_protocol = USE_SSL ? 'https' : NULL;

        redirect( site_url( LOGIN_PAGE . '?logout=1', $redirect_protocol ) );
    }
    
    
}
