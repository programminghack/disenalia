<?php
session_start();
class PostController{

	public function indexAction()
		{
			if(isset($_SESSION['user']) && $_SESSION['type'] == "admin"){
				$iduser = $_SESSION['id'];
				$fecha = date("d/m/Y");
	    		$user = $_SESSION['user'];
	    		$consulta = new PostModel();
	    		$values = $consulta->getAll();
	    		$mcategory = new CategoryModel();
	    		$categorys = $mcategory->getall();
	        	return new View("admin/post", ["title"=>"Administra tus post | Administrador","user" => $user, "layout" => "on", "nameLayout" => "layout.admin", "values"=> $values,"iduser" => $iduser ,"fecha" => $fecha, "categorys" => $categorys]);
	        }else{
				header('Location:'.Rutas::getDireccion('login'));
			}
		}

	public function editAction()
	{
		if(isset($_SESSION['user']) && $_SESSION['type'] == "admin"){
			$iduser = $_SESSION['id'];
			$user = $_SESSION['user'];
			$post = $_GET['e'];
			$postmodel = new PostModel();
			$postdata = $postmodel->get("id_post",$post);
			$categorymodel = new CategoryModel();
			$category = $categorymodel->getall();
	        return new View("admin/editPost", ["title"=>"Editar post | Administrador", "layout" => "on", "nameLayout" => "layout.admin", "postdata"=> $postdata,"user" => $user ,"iduser" => $iduser ,"category" => $category, "post" => $post]);
	    }else{
			header('Location:'.Rutas::getDireccion('login'));
		}
	}

	public function deleteAction()
	{
		if(isset($_SESSION['user']) && $_SESSION['type'] == "admin"){
			$post = $_GET['d'];
			$consulta = new PostModel();
	    	$consulta->delete($post);
	    }else{
				header('Location:'.Rutas::getDireccion('login'));
		}
	}
}
