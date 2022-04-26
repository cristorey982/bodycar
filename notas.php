
 class Conectar
{
   public static function con(){
     
     $conexion=mysql_connect("localhost","root","");
     mysql_select_db("kawak");
     return $conexion;
   }  
}
  
         //sentencia de seleccionar periodos
 $sql2="Select pro_id, pro_nombre FROM pro_proceso";

 $res2=mysqli_query(Conectar::con(),$sql2) or die(mysqli_error());



 ------------------------------------


  public function edit_cliente($cli_nom,$cli_ide,$cli_dir,$cli_ema,$cli_tel,$cli_dir,id){
  
  $sql="update cliente set cli_nom='$cli_nom', cli_ide='$cli_ide', cli_dir='$cli_dir', cli_ema='$cli_ema', cli_tel='$cli_tel', cli_dir='$cli_dir', where id=$id";
  $res=mysqli_query(Conectar::con(),$sql);

 if(isset($res)){
    echo "<script type='text/javascript'> 
    alert ('Editado cliente Exitosamente');
    window.location='v_cliente.php';
    </script>";  
 }
}



-------------------------------------
         <div class="panel panel-primary">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">

                        Listado de Documentos</a>
                      </h4>
                    </div>

                    <div id="collapse2" class="panel-collapse collapse in">
                      <div class="panel-body">

              <table id="datatable" class="table display table-striped table-bordered table-hover" cellspacing="0" width="100%">
                          <thead>
                            <tr class="alert-warning">
                              <th>Nombre</th>
                              <th>Codigo</th>
                              <th>Contenido</th>
                              <th>Tipo</th>
                              <th>Proceso</th>
                              <th></th>
                            </tr>
                          </thead>

                          <tbody>

                            <?php 
                            $regis = new Documento();
                            $array_articles = $regis->get_documento();

                                              //print_r($array_articles);
                            ?>

                            <?php foreach ($array_articles as $key => $value) { ?>
                            <tr class="odd gradeX">

                              <td><a href="javascript:void(0);" onClick="window.location='editar_documento.php?id=<?php echo $value["doc_id"];?>';" data-toggle="tooltip" title="Editar" style='text-decoration:none;color:black;'><?php echo $value["doc_nombre"]; ?></a>
                              </td>
                              <td><a href="javascript:void(0);" onClick="window.location='editar_documento.php?id=<?php echo $value["doc_id"];?>';" data-toggle="tooltip" title="Editar" style='text-decoration:none;color:black;'><?php echo $value["doc_codigo"]; ?></a>
                              </td>
                              <td><a href="javascript:void(0);" onClick="window.location='editar_documento.php?id=<?php echo $value["doc_id"];?>';" data-toggle="tooltip" title="Editar" style='text-decoration:none;color:black;'><?php echo $value["doc_contenido"]; ?></a></td>
                              <td><a href="javascript:void(0);" onClick="window.location='editar_documento.php?id=<?php echo $value["doc_id"];?>';" data-toggle="tooltip" title="Editar" style='text-decoration:none;color:black;'>
                              <?php// echo $value["doc_id_tipo"]; ?>
                              <?php 

                          $id_tip=$value["doc_id_tipo"];
                     
                      //sentencias de seleccionar nombre del tipo
                          $sql="Select tip_nombre, tip_prefijo FROM tip_tipo_doc where tip_id=$id_tip";

                          $resmat2=mysqli_query(Conectar::con(),$sql) or die(mysqli_error());

                          while($lista12=mysqli_fetch_array($resmat2)){
                           
                            echo "( ".$lista12["tip_prefijo"]." )".$lista12["tip_nombre"]; 

                          
                          }
                          ?>

                              </a></td>
                              <td><a href="javascript:void(0);" onClick="window.location='editar_documento.php?id=<?php echo $value["doc_id"];?>';" data-toggle="tooltip" title="Editar" style='text-decoration:none;color:black;'>


                              <?php //echo $value["doc_id_proceso"]; ?>
                               <?php 

                          $id_pro=$value["doc_id_proceso"];
                      
                      //sentencias de seleccionar nombre del proceso
                          $sqlmat="Select pro_nombre, pro_prefijo FROM pro_proceso where pro_id=$id_pro";

                          $resmat=mysqli_query(Conectar::con(),$sqlmat) or die(mysqli_error());

                          while($lista1=mysqli_fetch_array($resmat)){
                           
                            echo "( ".$lista1["pro_prefijo"]." )".$lista1["pro_nombre"]; 

                          
                          }
                          ?>



                              </a></td>
                                <td class="actions">
                                  <div class="text-center">
                                   
                                    <a href="javascript:void(0);" onClick="eliminar('eliminar_documento.php?id=<?php echo $value["doc_id"];?>')" data-toggle="tooltip" title="Eliminar" class="btn btn-xs btn-outline-warning">Eliminar</a>
                                  
                                  </div>
                                </td>

                              </tr>
                              <?php } ?>

                            </tbody>
                          </table>


                          </div>
                        </div>
                      </div>



 -----------------------------------------


 
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



  public function edit_cliente($cli_nom,$cli_ide,$cli_dir,$cli_ema,$cli_tel,$cli_dir,id){
  
  $sql="update cliente set cli_nom='$cli_nom', cli_ide='$cli_ide', cli_dir='$cli_dir', cli_ema='$cli_ema', cli_tel='$cli_tel', cli_dir='$cli_dir', where id=$id";
  $res=mysqli_query(Conectar::con(),$sql);

 if(isset($res)){
    echo "<script type='text/javascript'> 
    alert ('Editado cliente Exitosamente');
    window.location='v_cliente.php';
    </script>";  
 }
}