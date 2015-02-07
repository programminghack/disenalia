<?php
session_start();
class CategoryController{
	public function indexAction()
	{
		if(isset($_SESSION['user']) && $_SESSION['type'] == "admin"){
    		$user = $_SESSION['user'];
    		$consulta = new CategoryModel();
    		$values = $consulta -> getall();
        	return new View("admin/category", ["title"=>"Administra las categorias de tu blog | Administrador","user" => $user, "layout" => "on", "nameLayout" => "layout.admin", "values" => $values]);
        }else{
			header('Location:'.Rutas::getDireccion('login'));
		}
	}

	public function editAction()
	{
		if(isset($_SESSION['user']) && $_SESSION['type'] == "admin"){
			$user = $_SESSION['user'];
			$category = $_GET['e'];
			$categorymodel = new CategoryModel();
			$categorydata = $categorymodel->get("id_category",$category);
	        return new View("admin/editCategory", ["title"=>"Editar post | Administrador", "layout" => "on", "nameLayout" => "layout.admin", "categorydata"=> $categorydata,"user" => $user , "category" => $category]);
	    }else{
			header('Location:'.Rutas::getDireccion('login'));
		}
	}

	public function deleteAction()
	{
		if(isset($_SESSION['user']) && $_SESSION['type'] == "admin"){
			$post = $_GET['d'];
			$consulta = new CategoryModel();
	    	$consulta->delete($post);
	    }else{
				header('Location:'.Rutas::getDireccion('login'));
		}
	}
}
