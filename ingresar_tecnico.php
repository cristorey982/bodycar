<?php
require_once("m_tecnico.php");
//error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
//error_reporting(-1);
print_r($_POST);
//die();

$tec = new Tecnico();

$tec->add_tecnico($_POST["tec_nom"],$_POST["tec_ide"],$_POST["tec_dir"],$_POST["tec_ema"],$_POST["tec_tel"],$_POST["tec_ciu"],$_POST["tec_fec_ing"]);

?>