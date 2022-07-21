<?php 
	require_once("Models/TCliente.php");
	require_once("Models/UsuariosModel.php");
	class Activacion extends Controllers{
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

		public function activacion()
		{
			$result = "";
			if($_GET){
				if(empty($_GET['email']) || empty($_GET['activation_code']) )
				{
					$result = 'El enlace no es válido.';
				}else{ 
					$strCode = strClean($_GET['activation_code']);
					$strEmail = strtolower(strClean($_GET['email']));
					
					$request_user = "";
					$request_user = $this->buscarUsuarioSinVerificar($strCode, $strEmail);
					
					if ($request_user > 0){
						$request_user = $this->activarUsuario($request_user[0]["idpersona"]);
						$result = 'USUARIO ACTIVADO CORRECTAMENTE.';
					}else{
					$result = 'El enlace no es válido.';
					}
				}

				}
			$data['page_tag'] = "Activacion - Tienda Virtual";
			$data['page_title'] = "Tienda Virtual";
			$data['page_name'] = "Activacion";
			$data['result'] = $result;
			$this->views->getView($this,"activacion",$data);


		}

	}




