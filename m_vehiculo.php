<?php

require_once 'conectar.php';
//error_reporting(E_ALL);

class Vehiculo {
  
  private $registro;
  function __construct() {
    
    $this->registro=array();
    
  }
  
  /*public function add_vehiculo($veh_pla,$veh_mar,$veh_col,$veh_km,$veh_obs,$veh_rad,$veh_llav,$veh_par,$veh_ant,$veh_plac,$veh_herr,$veh_gat,$veh_rep,$veh_gas,$veh_per,$veh_tap,$veh_bot,$veh_cru,$veh_otr,$veh_cli){    
    $sql="insert into vehiculo values (null,'$veh_pla','$veh_mar','$veh_col','$veh_km','$veh_obs','$veh_rad','$veh_llav','$veh_par','$veh_ant','$veh_plac','$veh_herr','$veh_gat','$veh_rep','$veh_gas','$veh_per','$veh_tap','$veh_bot','$veh_cru','$veh_otr','$veh_cli')";*/

     public function add_vehiculo($veh_pla,$veh_mar,$veh_col,$veh_km,$veh_inv,$veh_otr,$veh_obs,$veh_cli,$veh_fec_ing){    
    $sql="insert into vehiculo values (null,'$veh_pla','$veh_mar','$veh_col','$veh_km','$veh_inv','$veh_otr','$veh_obs','$veh_cli','$veh_fec_ing')";
    $res=mysqli_query(Conectar::con(), $sql) or die(mysqli_error());
    if(isset($res)){
    echo "<script type='text/javascript'> 
    alert ('Ingresado Vehiculo Exitosamente');
    window.location='listado_vehiculo.php';
    </script>";
    }
  }
  
  public function get_vehiculo(){
   $sql="select * from vehiculo";
   $res=mysqli_query(Conectar::con(),$sql) or die(mysqli_error());

   while($reg=mysqli_fetch_assoc($res))
   {
     $this->registro[]=$reg;
   }
   return $this->registro;		
   
 }


 public function del_vehiculo($id){
 
  $sql="delete from vehiculo where id=$id";
  $res=  mysqli_query(Conectar::con(), $sql) or die(mysqli_error());
   if(isset($res)){
  echo "<script type='text/javascript'> 
  alert ('Eliminado Exitosamente');
  window.location='listado_vehiculo.php';
  </script>";

 }
}

public function get_vehiculo_id($id){

  $sql="select * from vehiculo where veh_cli=$id";
  $res=mysqli_query(Conectar::con(),$sql);
  while($reg=mysqli_fetch_assoc($res))
  {
   $this->registro[]=$reg;
 }
 return $this->registro;
} 

public function edit_vehiculo($cli_nom,$cli_ide,$cli_dir,$cli_ema,$cli_tel,$cli_ciu,$id){
  
  $sql="update vehiculo set cli_nom='$cli_nom', cli_ide='$cli_ide', cli_dir='$cli_dir', cli_ema='$cli_ema', cli_tel='$cli_tel', cli_ciu='$cli_ciu' where id=$id";
  $res=mysqli_query(Conectar::con(),$sql);

 if(isset($res)){
    echo "<script type='text/javascript'> 
    alert ('Editado vehiculo Exitosamente');
    window.location='listado_vehiculo.php';
    </script>";  
 }
}

}//end class vehiculo
?>
