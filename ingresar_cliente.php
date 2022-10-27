<?php
require_once("m_cliente.php");
//error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
//error_reporting(-1);
//print_r($_POST);
//die();

$cli = new Cliente();

$cli->add_cliente($_POST["cli_nom"],$_POST["cli_ide"],$_POST["cli_dir"],$_POST["cli_ema"],$_POST["cli_tel"],$_POST["cli_ciu"],$_POST["cli_fec_ing"]);

?>