<?php
require_once("m_trabajo.php");
//error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
//error_reporting(-1);
//print_r($_POST);
//print_r($_REQUEST);
//die();
$fec_ini = $_REQUEST['fec_ini'];
$fec_fin = $_REQUEST['fec_fin'];
$rep_tec = $_REQUEST['rep_tec'];
//$ord = new Reporte();

echo "tecnico ".$rep_tec;

//$ord->add_orden($_POST["fec_ini"],$_POST["fec_fin"],$_POST["rep_tec"]);

?>

<?php
//Conexion a la base de datos
$conexion=mysql_connect("localhost","root","");
mysql_select_db("bodycar",$conexion);
?>
<?php
////Obteniendo registros de la base de datos a traves de una consulta SQL

  $con = mysqli_connect ("localhost" , "root" , "");

    if (!$con) 
    {
        echo 'No conecta al servidor';
    }
    if ($con) 
    {
        //echo 'Conecta al servidor';
    }

    if (!mysqli_select_db($con,'bodycar'))
    {
        echo 'No conecta a base de datos';
    }

$consulta1="select tra_ord, tra_can, tra_val_uni, tra_val_tot, tra_ref from trabajo where tra_tec='$rep_tec' and tra_fec BETWEEN 'fec_ini' and '$fec_fin'";
//$resultado1=mysqli_query($consulta1,$con);
$resultado1=mysqli_query($con,$consulta1);

 //$rawresults = mysqli_query($con, "SELECT * FROM contrato WHERE (Ncontrato LIKE '%".$Bcontrato."%')");
/*while($rows=mysql_fetch_array($resultado1)){
          
echo "ID Ord: ".$rows[0]." ";
echo "Cantidad: ".$rows[1]." ";
echo "Valor Unidad: ".$rows[2]." ";
echo "Valor Total: ".$rows[3]." ";
echo "Refencia: ".$rows[4]." ";
echo "\n\n";


}*/
  print_r($resultado1);
if(mysqli_num_rows($resultado1) > 0){ // if one or more rows are returned do following

            while($results = mysqli_fetch_array($resultado1)){
            // $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop
print_r($results);
                echo("<p> No Orden, Cantidad, Valor Unitario, Valor total, Refencia</p></br>"); 
                echo "<p>" .$results['tra_ord'].", ".$results['tra_can'].", ".$results['tra_val_uni']." ".$results['tra_val_tot']." ".$results['tra_ref'].                 
                "</p>";
                // posts results gotten from database(title and text) you can also show id ($results['id'])
             echo mysqli_error($con);
            }

        }
        else{ // if there is no matching rows do following
            echo "No results";
        }
?>
<BR><BR><BR>
<?php

$consulta2="SELECT SUM(tra_val_tot) AS sum_tot from trabajo where tra_tec='$rep_tec' and tra_fec BETWEEN '$fec_ini' and '$fec_fin'";
$resultado2=mysql_query($consulta2,$conexion);
while($rows=mysql_fetch_array($resultado2)){
echo "TOTAL: ".$rows[0]." ";
}
?> 