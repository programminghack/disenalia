<?php

	class LoginController{

		public function indexAction()
		{
			return new View("admin/login", ["title" => "Iniciar Sesion", "layout" => "off"]);
		}

		public function userAction()
		{
			$consulta = new UserModel();
			$values = $consulta->get("name_user",$_POST['name']);
			return $values;
		}

	}
?>
