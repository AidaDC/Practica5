<?php

/**
**Class Load
**helps in view's Load {ayuda en la vista Load} 
**
**
*/
	class Load{
		function __construct(){
		}

		function view($filename,$data=null){
			if (is_array($data)){
			//funcion php para extraer datos.
				extract($data);
			}
		include 'views/'.$filename;

		}



	}

