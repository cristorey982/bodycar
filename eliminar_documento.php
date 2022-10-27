<?php
require_once("m_cliente.php");

//print_r($_GET);
$reg = new cliente();
$reg->del_cliente($_GET["id"]);


?>