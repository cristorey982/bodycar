<?php

require_once 'conectar.php';
//error_reporting(E_ALL);

class Cliente {
  
  private $registro;
  function __construct() {
    
    $this->registro=array();
    
  }
  
  public function add_cliente($cli_nom,$cli_ide,$cli_dir,$cli_ema,$cli_tel,$cli_dir){
    
    
    $sql="insert into cliente values (null,'$cli_nom','$cli_ide','$cli_dir','$cli_ema','$cli_tel',$cli_dir)";
    $res=  mysqli_query(Conectar::con(), $sql) or die(mysqli_error());

    if(isset($res)){
    echo "<script type='text/javascript'> 
    alert ('Ingresado cliente Exitosamente');
    window.location='v_cliente.php';
    </script>";
    }
  }
  
  public function get_cliente(){
   $sql="select * from cliente";
   $res=mysqli_query(Conectar::con(),$sql) or die(mysqli_error());

   while($reg=mysqli_fetch_assoc($res))
   {
     $this->registro[]=$reg;
   }
   return $this->registro;		
   
 }
 
 public function edit_cliente($$cli_nom,$cli_ide,$cli_dir,$cli_ema,$cli_tel,$cli_dir,id){
  
  $sql="update cliente set cli_nom='$cli_nom', cli_ide='$cli_ide'li_id_proceso='$cli_pro', cli_id_tipo='$cli_tip', cli_contenido='$cli_con' where cli_id=$cli_id";
  $res=mysqli_query(Conectar::con(),$sql);

 if(isset($res)){
    echo "<script type='text/javascript'> 
    alert ('Editado cliente Exitosamente');
    window.location='v_cliente.php';
    </script>";  
 }
}

public function del_cliente($id){
 
  $sql="delete from cliente where cli_id=$id";
  $res=  mysqli_query(Conectar::con(), $sql) or die(mysqli_error());
   if(isset($res)){
  echo "<script type='text/javascript'> 
  alert ('Eliminado Exitosamente');
  window.location='v_cliente.php';
  </script>";

 }
}

public function get_cliente_id($id){

  $sql="select * from cliente where cli_id=$id";
  $res=mysqli_query(Conectar::con(),$sql);
  while($reg=mysqli_fetch_assoc($res))
  {
   $this->registro[]=$reg;
 }
 return $this->registro;
 
} 

}//end class cliente
?>
