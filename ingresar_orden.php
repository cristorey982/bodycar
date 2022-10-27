<?php
require_once("m_orden.php");
//error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
//error_reporting(-1);
//print_r($_POST);
//die();

$ord = new Orden();

$ord->add_orden($_POST["fec_ing"],$_POST["fec_ent"],$_POST["ord_est"],$_POST["ord_obs"],$_POST["ord_veh"]);

?>