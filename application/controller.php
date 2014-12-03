<?php
	class Controller{
		public $load;
		public $model;

		//interactuar con el usuario
		public $route;

		function __construct(){
			$this->load=new Load();
			$this->model=new Model();
			$this->route=Request::getCount();
		

			if($this->route==""){
				$this->route='home';
			}

			if(is_readable('views/'.$this->route.'.php')){
				call_user_func(array($this,$this->route));

			}else{
				call_user_func(array($this,'error'));

			}
				}

				function home(){
				//cargar datos
				$data=$this->model->user_info();
				//cargar vista
				$this->load->view('home.php',$data);
			}
			
				function about(){
				//cargar datos
				$data=$this->model->user_info();
				//cargar vista
				$this->load->view('about.php',$data);
			}

			function contact(){
				//cargar datos
				$data=$this->model->user_info();
				//cargar vista
				$this->load->view('contact.php',$data);
			}

				function news(){
				//cargar datos
				$data=$this->model->user_info();
				//cargar vista
				$this->load->view('news.php',$data);
			}


				function error(){
				//cargar datos
				$data=$this->model->user_info();
				//cargar vista
				$this->load->view('error.php',$data);


				}
	}

	
