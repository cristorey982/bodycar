select tra_ord, tra_can, tra_val_uni, tra_val_tot, tra_ref from trabajo
where tra_fec BETWEEN '2022-05-10' and '2022-05-10'


select tra_ord, tra_can, tra_val_uni, tra_val_tot, tra_ref from trabajo
where tra_tec='13' and tra_fec BETWEEN '2022-05-8' and '2022-05-12'



SELECT tra_ord, tra_can, tra_val_uni, tra_val_tot, tra_ref SUM(tra_val_tot) AS sum_tot from trabajo where tra_tec='13' and tra_fec BETWEEN '2022-05-8' and '2022-05-12'


SELECT SUM(tra_val_tot) AS sum_tot from trabajo



/////////////// sentencia para el total

SELECT SUM(tra_val_tot) AS sum_tot from trabajo where tra_tec='13' and tra_fec BETWEEN '2022-05-8' and '2022-05-12'


------------------------------

$consulta="SELECT * FROM cliente";
$resultado=mysql_query($consulta,$conexion);
while($resul=mysql_fetch_array($resultado)){
            $var=$resul[0];
			$var1=$resul[1];
			$var2=$resul[2];
			$var6=$resul[3];
			$var3=$resul[4];
//echo "id: ".$rows[0]." ";
//echo "nombre: ".$rows[1]." ";

}
echo "<tr>
<td>$var</td>
<td>$var1</td>
<td>$var2</td>
<td>$var3</td>
</tr>";


-------------------------------------
select tra_ord, tra_can, tra_val_uni, tra_val_tot, tra_ref from trabajo where tra_tec='13' and tra_fec BETWEEN '2022-05-8' and '2022-05-12'


 <table id="datatable" class="table display table-striped table-bordered table-hover" cellspacing="0" width="100%">
----------------------

<?php 
                                    $consulta2="SELECT SUM(tra_val_tot) AS sum_tot from trabajo where tra_tec='$rep_tec' and tra_fec BETWEEN '$fec_ini' and '$fec_fin'";
                                    $resultado2=mysql_query($consulta2,$conexion);
                                    while($rows=mysql_fetch_array($resultado2)){
                                    echo "TOTAL: ".$rows[0]." ";
                                   ?>

                                   <?php 
                                    $consulta2="SELECT SUM(tra_val_tot) AS sum_tot from trabajo where tra_tec='$rep_tec' and tra_fec BETWEEN '$fec_ini' and '$fec_fin'";
                                   // $resultado2=mysql_query($consulta2,$conexion);
                                    $resultado2=mysqli_query($con,$consulta2);
                                    while($rows=mysql_fetch_array($resultado2)){
                                    echo "TOTAL: ".$rows[0]." ";
                                    }

                                    -----------------
                                    input-lg btn-block col-sm-8 col-md-8

                                    <span class="badge badge-danger"><?php //echo $value["ord_est"]; 

                                    if ($value["ord_est"]=='1') { echo " Proceso";} 
                                elseif ($value["ord_est"]=='2') { echo " Terminado";} 
                                elseif ($value["ord_est"]=='3') { echo " Garantía";} 

                              ?>
                              </span>

                                                            <?php //echo $value["ord_est"]; 
                                 if ($value["ord_est"]=='1') { echo " Proceso";} 
                               ?>
                              </span>
                              <span class="badge badge-warning">
                              <?php
                                if ($value["ord_est"]=='2') { echo " Terminado";} 
                              ?>
                              </span>

                                <span class="badge badge-success">
                              <?php
                                if ($value["ord_est"]=='3') { echo " Garantía";} 

                              ?>
                              </span>


