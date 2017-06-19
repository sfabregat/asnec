<?php

   namespace X\App\Controllers;

   use X\Sys\Controller;


   class Edituser extends Controller{
   		

   		public function __construct($params){
   			parent::__construct($params);
            $this->addData(array(
               'page'=>'Edituser'));
   			$this->model=new \X\App\Models\mEdituser();
   			$this->view =new \X\App\Views\vEdituser($this->dataView,$this->dataTable);    
   		}


   		function home(){
              
              $lista=$this->model->getUsers();

              
              $this->addData($lista);
 

              $this->view->__construct($this->dataView,$this->dataTable);

              $this->view->show();
            
   		}

      function eliminar(){
        $id = $_POST['eliminar'];
        

        $result = $this->model->delUser($id); 
        
          if($result==1){
            $this->ajax(array('msg'=>'Correcto'));
            header('Location: ../dashboard');
                  
          }else {$this->ajax(array('msg'=>'no'));header('Location: ../dashboard');}
      }
   }
