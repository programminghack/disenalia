<?php
session_start();
class AdminUsersController{

	public function indexAction()
		{
			if(isset($_SESSION['user']) && $_SESSION['type'] == "admin"){
				$user = $_SESSION['user'];
	        	$consulta = new UserModel();
	        	$values  = $consulta->getAll();
	        	return new View("admin/adminUsers", ["title"=>"Administra los usuarios | Administrador","user" => $user, "layout" => "on", "nameLayout" => "layout.admin","rows"=>$values]);
	        }else{
				header('Location:'.Rutas::getDireccion('login'));
			}
		}

	public function updateAction(){
		if (isset($_POST['add'])) {
		$consulta = new UserModel();
		$user=$_POST['name'];
		return $consulta->edit($user,[
				"name" => $_POST['name'],
				"password" => Security::getEncrypt($_POST['password']),
				"facebook" => $_POST['facebook'],
				"twitter" => $_POST['twitter'],
				"email" => $_POST['email'],
				
			]);
	}
	}


}