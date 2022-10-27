<?php
require_once("m_orden.php");

//print_r($_GET);
$reg = new orden();
$reg->del_orden($_GET["id"]);


?>