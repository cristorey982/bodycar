<?php

require_once 'conectar.php';
//error_reporting(E_ALL);

class Orden {
  
  private $registro;
  function __construct() {
    
    $this->registro=array();
    
  }
  
  public function add_orden($fec_ing,$fec_ent,$ord_est,$ord_obs,$ord_veh){    
    
    $sql="insert into orden values (null,'$fec_ing','$fec_ent','$ord_est','$ord_obs','$ord_veh')";
    $res=  mysqli_query(Conectar::con(), $sql) or die(mysqli_error());

    if(isset($res)){
    echo "<script type='text/javascript'> 
    alert ('Ingresado orden Exitosamente');
    window.location='listado_orden.php';
    </script>";
    }
  }
  
  public function get_orden(){
   $sql="select * from orden";
   $res=mysqli_query(Conectar::con(),$sql) or die(mysqli_error());

   while($reg=mysqli_fetch_assoc($res))
   {
     $this->registro[]=$reg;
   }
   return $this->registro;		
   
 }


 public function del_orden($id){
 
  $sql="delete from orden where id=$id";
  $res=  mysqli_query(Conectar::con(), $sql) or die(mysqli_error());
   if(isset($res)){
  echo "<script type='text/javascript'> 
  alert ('Eliminado Exitosamente');
  window.location='listado_orden.php';
  </script>";

 }
}

public function get_orden_id($id){

  $sql="select * from orden where id=$id";
  $res=mysqli_query(Conectar::con(),$sql);
  while($reg=mysqli_fetch_assoc($res))
  {
   $this->registro[]=$reg;
 }
 return $this->registro;
 
} 

public function edit_orden($cli_nom,$cli_ide,$cli_dir,$cli_ema,$cli_tel,$cli_ciu,$id){
  
  $sql="update orden set cli_nom='$cli_nom', cli_ide='$cli_ide', cli_dir='$cli_dir', cli_ema='$cli_ema', cli_tel='$cli_tel', cli_ciu='$cli_ciu' where id=$id";
  $res=mysqli_query(Conectar::con(),$sql);

 if(isset($res)){
    echo "<script type='text/javascript'> 
    alert ('Editado orden Exitosamente');
    window.location='listado_orden.php';
    </script>";  
 }
}


}//end class orden
?>
