<?php
session_start();
Cookies::set("alert","Hasta luego ¡" .$_SESSION["user"]. "!, nos vemos. ","20-s");
session_destroy();
Redirection::go("login");
?>
