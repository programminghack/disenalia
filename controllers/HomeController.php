<?php

class HomeController{

    public function indexAction($hola="hola")
    {
    	$consulta = new PostModel();
    	$values = $consulta -> getFull();
    	$categorymodel = new CategoryModel();
    	$category = $categorymodel->getAll();
        return new View("frontend/home", ["title" => "Diseñalia | Diseño - Marketing - Programacion", "layout" => "on", "nameLayout" => "layout","category" => $category ,"oncategory" => "on" ,"values" => $values]);
    }

    public function categoryAction()
    {
    	$cat = $_GET['q'];
    	$consulta = new PostModel();
    	$values = $consulta->get("id_category",$cat);
    	$categorymodel = new CategoryModel();
    	$category = $categorymodel->getAll();
        return new View("frontend/category", ["title" => "UFAAC | Blog", "layout" => "on", "nameLayout" => "layout","category" => $category ,"oncategory" => "on" ,"values" => $values]);
    }

    public function goAction()
    {
    	$cat = $_GET['q'];
    	$consulta = new PostModel();
    	$values = $consulta->get("id_post",$cat);
    	$categorymodel = new CategoryModel();
    	$category = $categorymodel->getAll();
        return new View("frontend/go", ["title" => "UFAAC | Blog", "layout" => "on", "nameLayout" => "layout","category" => $category ,"oncategory" => "on" ,"values" => $values]);
    }
}
