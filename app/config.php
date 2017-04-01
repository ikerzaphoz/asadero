<?php

ini_set("display_errors", 1);


//Declaramos constantes
define("root", $_SERVER['DOCUMENT_ROOT']."/projects/asadero/");
define("path_web", "/projects/asadero/");

/*Incluimos el fichero de la clase Db*/
require root.'app/class/db.php';

/*Incluimos el fichero de la clase Conf*/
require root.'app/class/conf.php';

/*Incluimos el fichero de la clase Customer*/
require root.'app/class/customer.php';

/*Incluimos el fichero de la clase Product*/
require root.'app/class/product.php';

?>