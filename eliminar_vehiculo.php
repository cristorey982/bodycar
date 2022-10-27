<?php
require_once("m_vehiculo.php");
//print_r($_GET);
$reg = new vehiculo();
$reg->del_vehiculo($_GET["id"]);
?>