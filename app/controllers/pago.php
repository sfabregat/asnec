<?php

   namespace X\App\Controllers;

   use X\Sys\Controller;


   class Pago extends Controller{
   		

   		public function __construct($params){
   			parent::__construct($params);
            $this->addData(array(
               'page'=>'Pago'));
   			$this->model=new \X\App\Models\mPago();
   			$this->view =new \X\App\Views\vPago($this->dataView);
            
   		}


   		function home(){
   			
   		}
   }
