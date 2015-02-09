<?php
session_start();
class EditUserController{

	public function indexAction()
		{
			if(isset($_SESSION['user']) && $_SESSION['type'] == "admin"){
				$user = $_SESSION['user'];
	        	return new View("admin/editUser", ["title"=>"Edita tu usuario | Administrador","user" => $user, "layout" => "on", "nameLayout" => "layout.admin"]);
	        }else{
				header('Location:'.Rutas::getDireccion('login'));
			}
		}

}