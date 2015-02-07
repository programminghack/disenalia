<?php
session_start();
class SessionController{
	private $_session;

    public function indexAction()
    {
    	$this->_session = new SessionGenerate();
    	$this->_session = $this->_session->getSession($_POST['id'], $_POST['user'], $_POST['type']);
    	$consulta = new UserModel();
		$values = $consulta->get("name_user",$_POST['user']);
        return new View("admin/session", ["session"=>$this->_session,"id"=>$this->_session_id,"type"=>$this->_session_type ,"values"=>$values ,"layout" => "off"]);
    }
}
