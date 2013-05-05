<?php

// CONFIGURACION DE LA BASE DE DATOS 
define("DB_HOST","localhost");
define("DB_USER","root");
define("DB_PASS","progra");
define("DB_DBNAME","ariframework");

// CONFIGURACION DE LOS DIRECTORIOS
define("DIR_CTL","app/controller/");
define("DIR_MOD","app/model/");
define("DIR_VIW","app/view/");
define("DIR_OBJ","app/object/");
define("DIR_LIB","lib/common/");
define("DIR_PDF","lib/tcpdf/");
define("DIR_HLP","lib/helper/");

// CONFIGURACION DE URL
define("SITE_PROT","http");
define("SITE_URL",SITE_PROT."://".$_SERVER['HTTP_HOST']."/ariframework/");

?>