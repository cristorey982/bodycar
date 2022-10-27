<?php

require_once 'conectar.php';
//error_reporting(E_ALL);

class Cliente {
  
  private $registro;
  function __construct() {
    
    $this->registro=array();
    
  }
  
  public function add_cliente($cli_nom,$cli_ide,$cli_dir,$cli_ema,$cli_tel,$cli_ciu,$cli_fec_ing){    
    
    $sql="insert into cliente values (null,'$cli_nom','$cli_ide','$cli_dir','$cli_ema','$cli_tel','$cli_ciu','$cli_fec_ing')";
    $res=  mysqli_query(Conectar::con(), $sql) or die(mysqli_error());

    if(isset($res)){
    echo "<script type='text/javascript'> 
     alert ('Ingresado cliente Exitosamente'); 
     window.location='listado_cliente.php';
    </script>";
    }
  }
  
  public function get_cliente(){
   $sql="select * from cliente ORDER BY id DESC;";
   $res=mysqli_query(Conectar::con(),$sql) or die(mysqli_error());

   while($reg=mysqli_fetch_assoc($res))
   {
     $this->registro[]=$reg;
   }
   return $this->registro;		
   
 }


 public function del_cliente($id){
 
  $sql="delete from cliente where id=$id";
  $res=  mysqli_query(Conectar::con(), $sql) or die(mysqli_error());
  $sql2="delete from vehiculo where veh_cli=$id";
  $res2=  mysqli_query(Conectar::con(), $sql2) or die(mysqli_error());

   if(isset($res)){
  echo "<script type='text/javascript'> 
  alert ('Eliminado Exitosamente');
  window.location='listado_cliente.php';
  </script>";

 }
}

public function get_cliente_id($id){

  $sql="select * from cliente where id=$id";
  $res=mysqli_query(Conectar::con(),$sql);
  while($reg=mysqli_fetch_assoc($res))
  {
   $this->registro[]=$reg;
 }
 return $this->registro;
 
} 

public function edit_cliente($cli_nom,$cli_ide,$cli_dir,$cli_ema,$cli_tel,$cli_ciu,$id){
  
  $sql="update cliente set cli_nom='$cli_nom', cli_ide='$cli_ide', cli_dir='$cli_dir', cli_ema='$cli_ema', cli_tel='$cli_tel', cli_ciu='$cli_ciu' where id=$id";
  $res=mysqli_query(Conectar::con(),$sql);

 if(isset($res)){
    echo "<script type='text/javascript'> 
    alert ('Editado cliente Exitosamente');
    window.location='listado_cliente.php';
    </script>";  
 }
}


}//end class cliente
?>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
