<?php

	namespace X\App\Models;

	use \X\Sys\Model;

	class mAddstory extends Model{
		public function __construct(){
			parent::__construct();
			
            }

            public function addStoryBD($usuario, $titulo, $texto){
				
				$sql="call sp_new_story(:users, :sinopsis, :titulo);"; 
				
				$this->query($sql); 

	                        $this->bind(":users", $usuario);
	                        $this->bind(":titulo", $titulo);
	                        $this->bind(":sinopsis", $texto);
	                        
				$this->execute();

	                        $result=$this->rowCount(); 
	                        
				if($result){
	                            return 1;							
				}else 
	                        {
	                            return -1;
	                            
	                        }
			}

}
