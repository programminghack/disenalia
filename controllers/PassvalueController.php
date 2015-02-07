<?php

class PassValueController{

    public function indexAction()
    {
    	$passValue = Security::getEncrypt($_POST['password']);
        return new View("admin/passValue", ["passValue" => $passValue, "layout" => "off"]);
    }
}
