<?php

	namespace X\App\Views;

	use \X\Sys\View;
	
	class vHuarache extends View{

		function __construct($dataView){
			
			parent::__construct($dataView);
			echo $this->render('tHuarache.php');
		}
	}