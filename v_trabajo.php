<!DOCTYPE html>
<?php
require_once 'm_trabajo.php';

 $sql="Select id, tec_nom FROM tecnico ORDER BY tec_nom ASC";

  $res=mysqli_query(Conectar::con(),$sql) or die(mysqli_error());
?>
<?php
  //print_r($_GET["id"]);
  echo "id orden: ". $_GET["id"];
  ?>
 <!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
 <!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
 <!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
 <!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
 <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>::BodyCar - trabajo::</title>
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
                  <br>
                  <div class="panel-group" id="accordion">
                      <div class="panel panel-success">
                        <div class="panel-heading">
                          <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                              Ingreso de trabajo<small>  Bodycar</small></a>
                            </h4>
                          </div>
                          <div id="collapse1" class="panel-collapse collapse in">
                            <div class="panel-body">

                             <form action="ingresar_trabajo.php" method="POST">
                             <div class="form-horizontal">
                              <h2>Descripción del trabajo</h2>
                              <br>
                               <div class="form-group has-success">
                                <label class="control-label hidden-xs col-sm-2 col-md-2" for="tra_tec">Tecnico</label>
                          <div class="col-xs-6 col-md-4">

                            <select name="tra_tec" class="custom-select input-lg btn-block" data-toggle="tooltip" title="Seleccione el tecnico!" data-style="btn-success" required>
                                <option>Selecciona el técnico</option>
                              <?php

                              while($lista1=mysqli_fetch_array($res))

                                echo "<option value='".$lista1["id"]."'>".$lista1["tec_nom"]."</option>";

                              ?>
                            </select>
                          </div>

                            <label for="tra_fec" class="control-label hidden-xs col-sm-2 col-md-2">Fecha del trabajo</label>
                                    <div class="col-xs-6 col-md-4">
                                      <div class="input-group input-append date" id="datePicker">
                                        <input type="text" class="form-control input-lg" name="tra_fec" id="tra_fec" value="<?php echo date("Y-m-d") ?>" />
                                        <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
                                      </div>
                                    </div>

                              </div>
                               <div class="form-group">
                                <div class="form-group has-success ">
                                    <label class="control-label hidden-xs col-sm-2 col-md-2" for="veh_pla">PIEZAS POR VEHÍCULO</label>
                                    <div class="col-xs-6 col-md-10 row mb-3">
                                      <select id="checkboxes" rows="30" multiple aria-label="multiple select example" name="tra_inv[]" class="custom-select input-lg btn-block col-sm-8 col-md-8" data-toggle="tooltip" title="Seleccione el Inventario!">
                                          <option value="1">Capot</option>
                                          <option value="2">Capacete</option>
                                          <option value="3">Puerta delantera derecha</option>
                                          <option value="4">Puerta trasera derecha</option>
                                          <option value="5">Puerta delantera izquierda</option>
                                          <option value="6">Puerta trasera izquierda</option>
                                          <option value="7">Guardabarros delantero derecho</option>
                                          <option value="8">Guardabarros delantero izquierdo</option>
                                          <option value="9">Costado derecho</option>
                                          <option value="10">Costado izquierdo</option>
                                          <option value="11">Bómper delantero</option>
                                          <option value="12">Bómper trasero</option>
                                          <option value="13">Estribo derecho</option>
                                          <option value="14">Estribo izquierdo</option>
                                          <option value="15">Paral capacete derecho</option>
                                          <option value="16">Paral capacete izquierdo</option>
                                          <option value="17">Frontal</option>
                                          <option value="18">Panel trasero</option>
                                          <option value="19">Piso bodega</option>
                                          <option value="20">Punta chasis</option>
                                          <option value="21">Rines</option>
                                          <option value="22">Otros</option>
                                      </select>
                                    </div>
                                    <label  class="control-label hidden-xs col-sm-2 col-md-2" for="veh_otr">otros</label>
                                    <div class="col-xs-6 col-md-4">    
                                    <input type="text" class="form-control input-lg " id="tra_otr" name="tra_otr" placeholder=" " data-toggle="tooltip"  title="Digite el otro inventario!"></div>
                                </div>
                              </div><!-- form-group 1 -->
                                 <div class="form-group has-warning">
                                  <label class="control-label hidden-xs col-sm-2 col-md-2" for="tra_can">Cantidad</label>
                                  <div class="col-xs-6 col-md-4">
                                    <input type="text" class="form-control input-lg" id="tra_can" name="tra_can" placeholder="Digite Cantidad!" data-toggle="tooltip"  title="Escribe la Cantidad!" required>
                                  </div>

                                  <label  class="control-label hidden-xs col-sm-2 col-md-2" for="tra_val_uni">Valor Unitario</label>
                                  <div class="col-xs-6 col-sm-4 col-md-4">                                 
                                    <input type="text" class="form-control input-lg" id="tra_val_uni" name="tra_val_uni" placeholder="Valor Unitario" data-toggle="tooltip" title="Valor Unitario" required>
                                  </div>
                              </div>
                               <div class="form-group has-warning">
                                <div class="control-label  col-sm-offset-2 col-sm-8 col-md-offset-2 col-md-8">
                                  <label for="comment" class="control-label col-md-3">Referencia:</label>
                                  <textarea class="form-control" rows="10" id="tra_ref" name="tra_ref"></textarea>
                                </div>
                              </div>
                              

                          <br><br>
                          <div class="form-group has-warning">
                            <div class="text-center">
                                <input type="hidden" name="tra_ord" value="<?php echo $_GET["id"];?>">
                              <button type="submit" class="btn btn-outline-danger btn-lg btn-block">Guardar</button>
                            </div>
                          </div>


                        </div>
                      </form>

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
               $('#tra_fec').datepicker({
              autoclose: true,
              dateFormat: "yy-mm-dd"
           })
           .on('changeDate', function(e) {
              // Revalidate the date field
                $('#eventForm').formValidation('revalidateField', 'date');
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

          


