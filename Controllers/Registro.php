<?php 
	require_once("Models/TCliente.php");
	class Registro extends Controllers{
		use TCliente;
		public function __construct()
		{
			session_start();
			if(isset($_SESSION['login']))
			{
				header('Location: '.base_url().'/dashboard');
				die();
			}
			parent::__construct();
		}

		public function registro()
		{
			$data['page_tag'] = "Registro - Tienda Virtual";
			$data['page_title'] = "Tienda Virtual";
			$data['page_name'] = "registro";
			$data['page_functions_js'] = "functions_registro.js";
			$this->views->getView($this,"registro",$data);
		}

	}
