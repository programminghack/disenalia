<?php
session_start();
class InboxController{

	public function indexAction()
	{
		if(isset($_SESSION['user']) && $_SESSION['type'] == "admin"){
    		$user = $_SESSION['user'];
        	return new View("admin/inbox", ["title"=>"Administra los comentarios | Administrador","user" => $user, "layout" => "on", "nameLayout" => "layout.admin"]);
        }else{
			header('Location:'.Rutas::getDireccion('login'));
		}
	}
}
