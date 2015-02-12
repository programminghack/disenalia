<?php
session_start();
class UserController{

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
	public function meAction()
		{
			if(isset($_SESSION['user']) && $_SESSION['type'] == "admin"){
				$user = $_SESSION['user'];
	        	$consulta = new UserModel();
	        	$values  = $consulta->get('name_user',$user);
	        	return new View("admin/editUser", ["title"=>"Edita tu usuario | Administrador","user" => $user, "layout" => "on", "nameLayout" => "layout.admin","values"=>$values]);
	        }else{
				header('Location:'.Rutas::getDireccion('login'));
			}
		}

	
	public function updateAction(){
		if (isset($_POST['add'])) {
		$consulta = new UserModel();
		return $consulta->edit($_SESSION['user'],[
				"name" => $_POST['name'],
				"password" => Security::getEncrypt($_POST['password']),
				"facebook" => $_POST['facebook'],
				"twitter" => $_POST['twitter'],
				"email" => $_POST['email'],
				
			]);
	}
	}

	public function editAction(){
		$consulta = new UserModel();
		$values = $consulta->get("name_user",$_POST['name']);
		return $values;
	}


}