<?php

class HomeController{

    public function indexAction($hola="hola")
    {
    	$consulta = new PostModel();
    	$values = $consulta -> getFull();
    	$categorymodel = new CategoryModel();
    	$category = $categorymodel->getAll();
        return new View("frontend/home", ["title" => "Diseñalia | Diseño - Marketing - Programacion", "layout" => "on", "nameLayout" => "layout","category" => $category  ,"values" => $values, "profile_act" => "off"]);
    }

    public function categoryAction()
    {
      $cat = $_GET['q'];
      $consulta = new PostModel();
      $values = $consulta->get("id_category",$cat);
      $consult_cat = new CategoryModel();
      $values_in = $consult_cat->get("id_category",$cat);
      foreach ($values_in as $key) {
         $incategory = $key["name_category"];
      }
      $categorymodel = new CategoryModel();
      $category = $categorymodel->getAll();
        return new View("frontend/category", ["title" => "Diseñalia | ".$incategory, "layout" => "on", "nameLayout" => "layout","category" => $category ,"oncategory" => "on" ,"values" => $values, "profile_act" => "off"]);
    }

    public function searchAction()
    {
      $search = $_POST['search'];
      $consulta = new PostModel();
      $values = $consulta->search($search);
      $categorymodel = new CategoryModel();
      $category = $categorymodel->getAll();
        return new View("frontend/search", ["title" => "Diseñalia | ". $search, "layout" => "on", "nameLayout" => "layout","category" => $category ,"oncategory" => "on" ,"values" => $values, "profile_act" => "off", "search_v" => $search]);
    }

    public function goAction()
    {
    	$cat = $_GET['q'];
    	$consulta = new PostModel();
    	$values = $consulta->get("id_post",$cat);
    	$categorymodel = new CategoryModel();
    	$category = $categorymodel->getAll();
      foreach ($values as $key ) {
         $title = $key['title_post'];
         $id_user = $key['id_user'];
      }
      $consulta_profile = new UserModel();
      $profile = $consulta_profile->get("id_user",$id_user);
        return new View("frontend/go", ["title" => $title, "layout" => "on", "nameLayout" => "layout","category" => $category ,"oncategory" => "on" ,"values" => $values, "profile" => $profile, "profile_act" => "on"]);
    }
}
