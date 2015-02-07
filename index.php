<?php
/*
 * El frontend controller se encarga de
 * configurar nuestra aplicacion
 */
define("start", True);
$start = True;
require __DIR__.("/helpers/index.php");
require 'config.php';
require 'helpers/templates.php';

//Library
require 'library/Request.php';
require 'library/Inflector.php';
require 'library/Response.php';
require 'library/View.php';
require 'models/UserModel.php';
require 'models/PostModel.php';
require 'models/CategoryModel.php';


//Llamar al controlador indicado

if (empty($_GET['url']))
{
    $url = "";
}
else
{
    $url = $_GET['url'];
}

$request = new Request($url);
$request->execute();


// Plus
