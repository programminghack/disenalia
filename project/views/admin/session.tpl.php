<?php
	if($values == null){
		session_destroy();
	}else{
		foreach($values as $row){
			$user = $row["name_user"];
			Cookies::set("complete","Hola Bienvenido: ¡" .$user."!","20-s");
		}

		if($user == $session){
			Redirection::go("admin");
		}else{
			session_destroy();
		}

	}
