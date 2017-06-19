<?php

   namespace X\App\Controllers;

   use X\Sys\Controller;


   class Superstar extends Controller{
   		

         public function __construct($params){
            parent::__construct($params);
            $this->addData(array(
               'page'=>'Superstar'));
            $this->model=new \X\App\Models\mSuperstar();
            $this->view =new \X\App\Views\vSuperstar($this->dataView);    
         }


        function home(){
         }
   }
