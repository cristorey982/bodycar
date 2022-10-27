<?php
require_once("m_vehiculo.php");
//error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
//error_reporting(-1);
/*print_r($_POST);
echo "<br>";
print_r($_POST["veh_inv"]);
echo "<br>";
echo count($_POST). "Elementos";
echo "<br>";
for ($i=0; $i < count($_POST["veh_inv"]); $i++ ){
print_r($_POST[$i]) . "<br>";
}
*/
$categorias=implode("~",$_POST["veh_inv"]);
echo $categorias;
//die();

$veh = new Vehiculo();
$veh->add_vehiculo($_POST["veh_pla"],$_POST["veh_mar"],$_POST["veh_col"],$_POST["veh_km"],$categorias,$_POST["veh_otr"],$_POST["veh_obs"],$_POST["veh_cli"],$_POST["veh_fec_ing"]);

?>