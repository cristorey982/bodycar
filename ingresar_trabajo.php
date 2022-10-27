<?php
require_once("m_trabajo.php");
//error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
//error_reporting(-1);
print_r($_POST);
$can=$_POST["tra_can"];
$uni=$_POST["tra_val_uni"];
$tot=$can*$uni;
//echo $tot;
die();
$cli = new Trabajo();
$cli->add_trabajo($_POST["tra_tec"],$_POST["tra_fec"],$_POST["tra_can"],$_POST["tra_val_uni"],$tot,$_POST["tra_ref"],$_POST["tra_ord"]);

?>