<?php

   namespace X\App\Controllers;

   use X\Sys\Controller;


   class Rosherun extends Controller{
   		

   		public function __construct($params){
   			parent::__construct($params);
            $this->addData(array(
               'page'=>'Rosherun'));
   			$this->model=new \X\App\Models\mRosherun();
   			$this->view =new \X\App\Views\vRosherun($this->dataView);
            
   		}


   		function home(){
   			
   		}
   }
