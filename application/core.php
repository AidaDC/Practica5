<?php

	require 'load.php';
	require 'model.php';

	//llama al controlador
	require 'request.php';
	require 'controller.php';

	Class Core{
		public static $controller;

		static function init(){

			self::$controller=new Controller();

		}


	}
	