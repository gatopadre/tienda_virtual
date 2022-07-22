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

		// public function registroUser(){
		// 	error_reporting(0);
		// 	if($_POST){
		// 		if(empty($_POST['txtIdentificacion']) || empty($_POST['txtNombre']) || empty($_POST['txtApellido']) || empty($_POST['intTelefono']) || empty($_POST['txtEmail']) || empty($_POST['txtPassword']))
		// 		{
		// 			$arrResponse = array("status" => false, "msg" => 'Datos incorrectos.');
		// 		}else{ 
		// 			$strIdentificacion = strClean($_POST['txtIdentificacion']);
		// 			$strNombre = ucwords(strClean($_POST['txtNombre']));
		// 			$strApellido = ucwords(strClean($_POST['txtApellido']));
		// 			$intTelefono = intval(strClean($_POST['intTelefono']));
		// 			$strEmail = strtolower(strClean($_POST['txtEmail']));
		// 			$strPassword = hash("SHA256",$_POST['txtPassword']);
		// 			$intTipoId = RCLIENTES;
		// 			$intStatus = 0;
		// 			$request_user = "";

		// 			$request_user = $this->insertCliente2($strNombre, 
		// 													$strApellido, 
		// 													$intTelefono, 
		// 													$strEmail,
		// 													$strPassword,
		// 													$intTipoId,
		// 													$strIdentificacion,
		// 													$intStatus);

		// 			if($request_user > 0 )
		// 			{
		// 				$arrResponse = array('status' => true, 'msg' => 'Datos guardados correctamente.');
		// 				$nombreUsuario = $strNombre.' '.$strApellido;
		// 				$dataUsuario = array('nombreUsuario' => $nombreUsuario,
		// 										'email' => $strEmail,
		// 										'password' => $strPassword,
		// 										'asunto' => "Registro de Usuario",
		// 										'enlaceactivacion' => base_url() + '/activacion?email='+$strEmail+'&activation_code='+$strPassword+'');
		// 				sendEmail($dataUsuario,'email_bienvenida');	
		// 			}else if($request_user == 'exist'){
		// 				$arrResponse = array('status' => false, 'msg' => '¡Atención! el email ya existe, ingrese otro.');		
		// 			}else{
		// 			$arrResponse = array("status" => false, "msg" => 'No es posible almacenar los datos.');
		// 			}
		// 		}
		// 		echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);
		// 	}
		// 	die();
		// }
	}
