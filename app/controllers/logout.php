<?php

   namespace X\App\Controllers;

   use X\Sys\Controller;


   class Logout extends Controller{
         

         public function __construct($params){
            parent::__construct($params);
            $this->addData(array(
               'page'=>'Logout'));
            $this->model=new \X\App\Models\mLogin();
            $this->view =new \X\App\Views\vLogin($this->dataView,$this->dataTable);    
         }


         function home(){
          
            $this->view->__construct($this->dataView,$this->dataTable);
            $this->view->show();
            
         }

         
   }

