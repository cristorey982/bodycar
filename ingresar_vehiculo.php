<?php
require_once("m_vehiculo.php");
//error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
//error_reporting(-1);
//print_r($_POST);
//die();

$veh = new Vehiculo();
$veh->add_vehiculo($_POST["veh_pla"],$_POST["veh_mar"],$_POST["veh_col"],$_POST["veh_km"],$_POST["veh_obs"],$_POST["veh_rad"],$_POST["veh_llav"],$_POST["veh_par"],$_POST["veh_ant"],$_POST["veh_plac"],$_POST["veh_herr"],$_POST["veh_gat"],$_POST["veh_rep"],$_POST["veh_gas"],$_POST["veh_per"],$_POST["veh_tap"],$_POST["veh_bot"],$_POST["veh_cru"],$_POST["veh_otr"],$_POST["veh_cli"]);

?>