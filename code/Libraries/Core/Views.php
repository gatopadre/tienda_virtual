<?php 
	
	class Views
	{
		function getView($controller,$view,$data="")
		{
			// var_dump($controller, $view);exit(0);
			$controller = get_class($controller);
			if($controller == "Home"){
				$view = "Views/".$view.".php";
			}else{
				$view = "Views/".$controller."/".$view.".php";
			}
			require_once ($view);
		}
	}

 ?>