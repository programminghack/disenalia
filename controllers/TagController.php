<?php

class TagController{
    public function indexAction()
    {
      $cat = $_GET['q'];
      $consulta = new PostModel();
      $values = $consulta->get("id_category",$cat);
      $categorymodel = new CategoryModel();
      $category = $categorymodel->getAll();
        return new View("frontend/category", ["title" => "UFAAC | Blog", "layout" => "on", "nameLayout" => "layout","category" => $category ,"oncategory" => "on" ,"values" => $values]);
    }
}
