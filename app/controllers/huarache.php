<?php

   namespace X\App\Controllers;

   use X\Sys\Controller;


   class Huarache extends Controller{
   		

   		public function __construct($params){
   			parent::__construct($params);
            $this->addData(array(
               'page'=>'Huarache'));
   			$this->model=new \X\App\Models\mHuarache();
   			$this->view =new \X\App\Views\vHuarache($this->dataView);
            
   		}


   		function home(){
   			
   		}
   }
