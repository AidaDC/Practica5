<?php
Class Request{

	 static function getCount(){
	 	return array_pop(explode('/',$_SERVER['REQUEST_URI']));


 }


}