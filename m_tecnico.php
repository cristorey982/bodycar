<?php

require_once 'conectar.php';
//error_reporting(E_ALL);

class Tecnico {
  
  private $registro;
  function __construct() {
    
    $this->registro=array();
    
  }
  
  public function add_tecnico($tec_nom,$tec_ide,$tec_dir,$tec_ema,$tec_tel,$tec_ciu,$tec_fec_ing){    
    
    $sql="insert into tecnico values (null,'$tec_nom','$tec_ide','$tec_dir','$tec_ema','$tec_tel','$tec_ciu','$tec_fec_ing')";
    $res=  mysqli_query(Conectar::con(), $sql) or die(mysqli_error());

    if(isset($res)){
    echo "<script type='text/javascript'> 
    alert ('Ingresado tecnico Exitosamente');
    window.location='dashboard.php';
    </script>";
    }
  }
  
  public function get_tecnico(){
   $sql="select * from tecnico";
   $res=mysqli_query(Conectar::con(),$sql) or die(mysqli_error());

   while($reg=mysqli_fetch_assoc($res))
   {
     $this->registro[]=$reg;
   }
   return $this->registro;		
   
 }


 public function del_tecnico($id){
 
  $sql="delete from tecnico where id=$id";
  $res=  mysqli_query(Conectar::con(), $sql) or die(mysqli_error());
  $sql2="delete from vehiculo where veh_cli=$id";
  $res2=  mysqli_query(Conectar::con(), $sql2) or die(mysqli_error());

   if(isset($res)){
  echo "<script type='text/javascript'> 
  alert ('Eliminado Exitosamente');
  window.location='listado_tecnico.php';
  </script>";

 }
}

public function get_tecnico_id($id){

  $sql="select * from tecnico where id=$id";
  $res=mysqli_query(Conectar::con(),$sql);
  while($reg=mysqli_fetch_assoc($res))
  {
   $this->registro[]=$reg;
 }
 return $this->registro;
 
} 

public function edit_tecnico($tec_nom,$tec_ide,$tec_dir,$tec_ema,$tec_tel,$tec_ciu,$id){
  
  $sql="update tecnico set tec_nom='$tec_nom', tec_ide='$tec_ide', tec_dir='$tec_dir', tec_ema='$tec_ema', tec_tel='$tec_tel', tec_ciu='$tec_ciu' where id=$id";
  $res=mysqli_query(Conectar::con(),$sql);

 if(isset($res)){
    echo "<script type='text/javascript'> 
    alert ('Editado tecnico Exitosamente');
    window.location='listado_tecnico.php';
    </script>";  
 }
}


}//end class tecnico
?>
