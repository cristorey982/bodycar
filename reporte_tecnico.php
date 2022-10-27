<!DOCTYPE html>
<?php
//require_once 'm_orden.php';
?>

<?php
require_once("m_trabajo.php");

$fec_ini = $_REQUEST['fec_ini'];
$fec_fin = $_REQUEST['fec_fin'];
$rep_tec = $_REQUEST['rep_tec'];


echo "tecnico ".$rep_tec;
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

$resultado1=mysqli_query($con,$consulta1);

 
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

///////////


      
//echo $id_est;
////////////////////////////Sentencias de seleccionar nombre y grado del alumno
  $sqlgra="Select tec_nom FROM tecnico where id=$rep_tec";

  $resgra=mysqli_query(Conectar::con(),$sqlgra) or die(mysqli_error());

  while($lista1=mysqli_fetch_array($resgra))
  {
echo "tecnico: " . $lista1["tec_nom"];
    $tec_nom = $lista1["tec_nom"];


  }
?>
 <!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
 <!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
 <!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
 <!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
 <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>::Reporte técnico::</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/icomoon-social.css">
  <link rel="stylesheet" href="css/Estilos.css">
 
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,800' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="//code.jquery.com/ui/1.12.1/themes/cupertino/jquery-ui.css">
  <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.13/css/dataTables.jqueryui.min.css">
  <!--<link rel="stylesheet" href="css/leaflet.css" />-->
        <!--[if lte IE 8]>
            <link rel="stylesheet" href="css/leaflet.ie.css" />
            <![endif]-->
            <link rel="stylesheet" href="css/main.css">

            <!-- bootstrap 4 alpha-->
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" integrity="sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi" crossorigin="anonymous">
            

            
          </head>
          <body>
              <div class="content">

            
            <!-- Header -->            
            <?php include('header.php'); ?>
            <!-- End Header -->

            <div class="container-fluid">
              <div class="row justify-content-start">
              <?php
                  include("sidebar.php");
                  ?>
               <div class="col-sm-2 col-md-2 col-lg-2">
                <div class="">
                  <br>
                  <?php
                  //include("sidebar.php");
                  ?>
                  
                </div>
              </div>

              <div class="col-sm-8 col-md-8 col-lg-8">
               
                
                <div class="container-fluid">
                  <div class="panel-group" id="accordion">
                  
                  <div class="panel panel-primary">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">


                        Reporte del tecnico <?php echo $tec_nom;?></a>
                      </h4>
                    </div>

                    <div class="form-horizontal">
                              <h2>Información del Tecnico <?php echo $tec_nom;?></h2>
                              <br>
                               <div class="form-group has-success">
                                  <label class="control-label hidden-xs col-sm-2 col-md-2" for="cli_nom">Nombre</label>
                                  <div class="col-xs-6 col-md-4">
                                    <?php echo $tec_nom;?>
                                  </div>

                                  <label  class="control-label hidden-xs col-sm-2 col-md-2" for="cli_ide">Valor Ganado</label>
                                  <div class="col-xs-6 col-sm-4 col-md-4">                                 
                                   
                                   <?php 
                                    $consulta2="SELECT SUM(tra_val_tot) AS sum_tot from trabajo where tra_tec='$rep_tec' and tra_fec BETWEEN '$fec_ini' and '$fec_fin'";
                                   // $resultado2=mysql_query($consulta2,$conexion);
                                    $resultado2=mysqli_query($con,$consulta2);
                                    while($rows=mysqli_fetch_array($resultado2)){
                                    echo "TOTAL: ".$rows[0]." ";
                                    }
                                   ?>
                                  </div>
                              </div>
                               <div class="form-group has-success">
                                  <label class="control-label hidden-xs col-sm-2 col-md-2" for="cli_nom">Fecha Inicio</label>
                                  <div class="col-xs-6 col-md-4">
                                    <?php echo $fec_ini;?>
                                  </div>

                                  <label  class="control-label hidden-xs col-sm-2 col-md-2" for="cli_ide">Fecha Fin</label>
                                  <div class="col-xs-6 col-sm-4 col-md-4">                                 
                                     <?php echo $fec_fin;?></div>
                              </div>

                    <div id="collapse2" class="panel-collapse collapse in">
                      <div class="panel-body">
                       
               <table id="datatable" class="table display table-striped table-bordered table-hover" cellspacing="0" width="100%">
                          <thead>
                            <tr class="alert-warning">
                              <th>ID Orden</th>
                              
                             
                              <th></th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php 
                            //$regis = new Orden();
                           // $array_articles = $regis->get_orden();
                            //print_r($array_articles);


                            ?>
                            <?php foreach ($results as $key => $value) { ?>
                            <tr class="odd gradeX">
                               <td><a href="javascript:void(0);" onClick="window.location='editar_orden.php?id=<?php echo $value["id"];?>';" data-toggle="tooltip" title="Editar" style='text-decoration:none;color:black;'><?php echo $value["id"]; ?></a>
                              </td>
                              
                              
                              <td class="actions">
                                  <div class="text-center">
                                    <a href="javascript:void(0);" onClick="window.location='v_trabajo.php?id=<?php echo $value["id"];?>';" data-toggle="tooltip" title="Descripcion del trabajo" class="btn btn-xs btn-outline-success">Trabajo</a>
                                     <a href="javascript:void(0);" onClick="eliminar('eliminar_orden.php?id=<?php echo $value["id"];?>')" data-toggle="tooltip" title="Eliminar" class="btn btn-xs btn-outline-warning">Eliminar</a>
                                  
                                  </div>
                                </td>

                              </tr>
                              <?php } ?>

                            </tbody>
                          </table>


                          </div>
                        </div>
                      </div>

              <!--  panel-primary -->
       

                    </div>

                     </div>
                    </div>

                    </div>
                </div>
                    
                   
                           
            </div> <!-- /content -->


            <!-- Footer -->
       <?php include('footer.php') ?>
       <!-- End Footer -->


       

             <!-- Javascripts -->
             <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" integrity="sha384-BLiI7JTZm+JWlgKa0M0kGRpJbF2J8q+qreVrKBC47e3K6BW78kGLrCkeRX6I9RoK" crossorigin="anonymous"></script>
             <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
             <script>window.jQuery || document.write('<script src="js/jquery-1.9.1.min.js"><\/script>')</script>
             <script src="js/bootstrap.min.js"></script>
             <script src="http://cdn.leafletjs.com/leaflet-0.5.1/leaflet.js"></script>
             <script src="js/jquery.fitvids.js"></script>
             <script src="js/jquery.sequence-min.js"></script>
             <script src="js/jquery.bxslider.js"></script>
             <script src="js/main-menu.js"></script>
             <script src="js/template.js"></script>
             <script src="js/documento.js" type="text/javascript"></script>
             <!-- datatable UI -->

             <script type="text/javascript" src="//code.jquery.com/jquery-1.12.4.js"></script>
             <script type="text/javascript" src="//cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
             <script type="text/javascript" src="//cdn.datatables.net/1.10.13/js/dataTables.jqueryui.min.js"></script>
             <script
             src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"
             integrity="sha256-DI6NdAhhFRnO2k51mumYeDShet3I8AKCQf/tf7ARNhI="
             crossorigin="anonymous"></script>


             <script type="text/javascript">
             $(document).ready(function() {
               $( "#button" ).button();
 
               $('[data-toggle="tooltip"]').tooltip({
                position: {
                  my: "left bottom-20",
                  at: "left top",
                  using: function( position, feedback ) {
                    $( this ).css( position );
                    $( "<div>" )
                    .addClass( "arrow" )
                    .addClass( feedback.vertical )
                    .addClass( feedback.horizontal )
                    .appendTo( this );
                  }
                }
              });  
               $('#datatable').DataTable({
                "language": {
                  "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
                },
                "lengthMenu": [[3, 10, 20, -1], [3, 10, 20, "Todos"]]
              });

             });
             </script>

             <style>

             .nota { color: #FF0000; }
             
             h4 {
               font-family: 'MTCORSVA';
             }
             .ui-tooltip, .arrow:after {
              background: black;
              border: 2px solid white;
            }
            .ui-tooltip {
              padding: 10px 20px;
              color: white;
              border-radius: 20px;
              font: bold 14px "Helvetica Neue", Sans-Serif;
              text-transform: uppercase;
              box-shadow: 0 0 7px black;
            }
            .arrow {
              width: 70px;
              height: 16px;
              overflow: hidden;
              position: absolute;
              left: 50%;
              margin-left: -35px;
              bottom: -16px;
            }
            .arrow.top {
              top: -16px;
              bottom: auto;
            }
            .arrow.left {
              left: 20%;
            }
            .arrow:after {
              content: "";
              position: absolute;
              left: 20px;
              top: -20px;
              width: 25px;
              height: 25px;
              box-shadow: 6px 5px 9px -9px black;
              -webkit-transform: rotate(45deg);
              -ms-transform: rotate(45deg);
              transform: rotate(45deg);
            }
            .arrow.top:after {
              bottom: -20px;
              top: auto;
            }
            </style>



          </body>
          </html>

          


