<?php

class DeletesessionController{

    public function indexAction()
    {
    	$redireccion = header('Location:'.Rutas::getDireccion('login'));
        return new View("admin/deletesession", ["redireccion" => $redireccion, "layout" => "off"]);
    }
}
