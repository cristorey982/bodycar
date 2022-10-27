<?php

require_once 'conectar.php';
//error_reporting(E_ALL);

class Trabajo {
  
  private $registro;
  function __construct() {
    
    $this->registro=array();
    
  }
  
  public function add_trabajo($tra_tec,$tra_fec,$tra_can,$tra_val_uni,$tra_val_tot,$tra_ref,$tra_ord){    
    
    $sql="insert into trabajo values (null,'$tra_tec','$tra_fec','$tra_can','$tra_val_uni','$tra_val_tot','$tra_ref','$tra_ord')";
    $res=  mysqli_query(Conectar::con(), $sql) or die(mysqli_error());

    if(isset($res)){
    echo "<script type='text/javascript'> 
    alert ('Ingresado trabajo Exitosamente');
    window.location='v_trabajo.php';
    </script>";
    }
  }
  
  public function get_trabajo(){
   $sql="select * from trabajo";
   $res=mysqli_query(Conectar::con(),$sql) or die(mysqli_error());

   while($reg=mysqli_fetch_assoc($res))
   {
     $this->registro[]=$reg;
   }
   return $this->registro;		
   
 }


 public function del_trabajo($id){
 
  $sql="delete from trabajo where id=$id";
  $res=  mysqli_query(Conectar::con(), $sql) or die(mysqli_error());
   if(isset($res)){
  echo "<script type='text/javascript'> 
  alert ('Eliminado Exitosamente');
  window.location='listado_trabajo.php';
  </script>";

 }
}

public function get_trabajo_id($id){

  $sql="select * from trabajo where id=$id";
  $res=mysqli_query(Conectar::con(),$sql);
  while($reg=mysqli_fetch_assoc($res))
  {
   $this->registro[]=$reg;
 }
 return $this->registro;
 
} 

public function edit_trabajo($cli_nom,$cli_ide,$cli_dir,$cli_ema,$cli_tel,$cli_ciu,$id){
  
  $sql="update trabajo set cli_nom='$cli_nom', cli_ide='$cli_ide', cli_dir='$cli_dir', cli_ema='$cli_ema', cli_tel='$cli_tel', cli_ciu='$cli_ciu' where id=$id";
  $res=mysqli_query(Conectar::con(),$sql);

 if(isset($res)){
    echo "<script type='text/javascript'> 
    alert ('Editado trabajo Exitosamente');
    window.location='listado_trabajo.php';
    </script>";  
 }
}


}//end class trabajo
?>
