<?php

	namespace X\App\Views;

	use \X\Sys\View;
	
	class vSuperstar extends View{

		function __construct($dataView){
			parent::__construct($dataView);
			$this->render('tSuperstar.php');
		}
	}