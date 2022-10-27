<?php

require_once 'conectar.php';
//error_reporting(E_ALL);

class Reporte {
  
  private $registro;
  function __construct() {
    
    $this->registro=array();
    
  }


  public function get_reporte_id($fec_ini,$fec_fin,$rep_tec){

  $sql="select tra_ord, tra_can, tra_val_uni, tra_val_tot, tra_ref from trabajo where tra_tec=$rep_tec and tra_fec BETWEEN $fec_ini and $fec_fin";

  $res=mysqli_query(Conectar::con(),$sql);
  while($reg=mysqli_fetch_assoc($res))
  {
   $this->registro[]=$reg;
 }
 return $this->registro;
 
} 
  
  public function add_reporte($tra_tec,$tra_fec,$tra_can,$tra_val_uni,$tra_val_tot,$tra_ref,$tra_ord){    
    
    $sql="insert into reporte values (null,'$tra_tec','$tra_fec','$tra_can','$tra_val_uni','$tra_val_tot','$tra_ref','$tra_ord')";
    $res=  mysqli_query(Conectar::con(), $sql) or die(mysqli_error());

    if(isset($res)){
    echo "<script type='text/javascript'> 
    alert ('Ingresado reporte Exitosamente');
    window.location='v_reporte.php';
    </script>";
    }
  }
  
  public function get_reporte(){
   $sql="select * from reporte";
   $res=mysqli_query(Conectar::con(),$sql) or die(mysqli_error());

   while($reg=mysqli_fetch_assoc($res))
   {
     $this->registro[]=$reg;
   }
   return $this->registro;		
   
 }


 public function del_reporte($id){
 
  $sql="delete from reporte where id=$id";
  $res=  mysqli_query(Conectar::con(), $sql) or die(mysqli_error());
   if(isset($res)){
  echo "<script type='text/javascript'> 
  alert ('Eliminado Exitosamente');
  window.location='listado_reporte.php';
  </script>";

 }
}

/*public function get_reporte_id($id){

  $sql="select * from reporte where id=$id";
  $res=mysqli_query(Conectar::con(),$sql);
  while($reg=mysqli_fetch_assoc($res))
  {
   $this->registro[]=$reg;
 }
 return $this->registro;
 
} 

public function edit_reporte($cli_nom,$cli_ide,$cli_dir,$cli_ema,$cli_tel,$cli_ciu,$id){
  
  $sql="update reporte set cli_nom='$cli_nom', cli_ide='$cli_ide', cli_dir='$cli_dir', cli_ema='$cli_ema', cli_tel='$cli_tel', cli_ciu='$cli_ciu' where id=$id";
  $res=mysqli_query(Conectar::con(),$sql);

 if(isset($res)){
    echo "<script type='text/javascript'> 
    alert ('Editado reporte Exitosamente');
    window.location='listado_reporte.php';
    </script>";  
 }
}
*/

}//end class reporte
?>
