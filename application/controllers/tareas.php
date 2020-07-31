<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class tareas extends CI_Controller {

   /**
    * Get All Data from this method.
    *
    * @return Response
   */
     public function __construct() {
      parent::__construct(); 
  
   }


   /**
    * Display Data this method.
    *
    * @return Response
   */
   public function index()
   {
    
       $this->load->view('tareas');
       
   }


    
}