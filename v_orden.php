	<!DOCTYPE html>
	<?php
	//require_once 'm_cliente.php';

	?>
	<?php
	//print_r($_GET["id"]);
	//echo "id carro: " . $_GET["id"];
	?>
	 <!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
	 <!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
	 <!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
	 <!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	 <head>
	  <meta charset="utf-8">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	  <title>::BodyCar - Orden de Servicio::</title>
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
	            <?php //include('header.php'); ?>
	            <!-- End Header -->

	            <div class="container-fluid">
	              <div class="row justify-content-start">
 <?php
	                  include("sidebar.php");
	                  ?>
	               <div class=" col-md-2 col-lg-2 hidden-sm">
	                <div class="">
	                  <br>
	                  <?php
	                 // include("sidebar.php");
	                  ?>
	                  
	                </div>
	              </div>

	              <div class="col-sm-12 col-md-8 col-lg-8">
	                <div class="container-fluid">
	                  <br>
	                  <div class="panel-group" id="accordion">
	                      <div class="panel panel-success">
	                        <div class="panel-heading">
	                          <h4 class="panel-title">
	                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
	                              Ingreso Orden de Servicio<small>  Bodycar</small></a>
	                            </h4>
	                          </div>
	                          <div id="collapse1" class="panel-collapse collapse in">
	                            <div class="panel-body">

	                             <form action="ingresar_orden.php" method="POST">
	                             <div class="form-horizontal">
	                              <h2>Información de la Orden de Servicio</h2>
	                              <br>
	                               <div class="form-group has-success">                                                         
	                                  <label for="fec_ing" class="control-label col-xs-6 col-sm-2 col-md-3">Fecha de ingreso</label>
	                                  <div class="col-xs-6 col-sm-4 col-md-3">
	                                    <div class="input-group input-append date" id="datePicker">
	                                      <input type="text" class="form-control input-lg" name="fec_ing" id="fec_ing" value="<?php echo date("Y-m-d") ?>" required />
	                                      <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
	                                    </div>
	                                  </div>

	                                  <label for="fec_ent" class="control-label col-xs-6 col-sm-2 col-md-3">Fecha de entrega</label>
	                                  <div class="col-xs-6 col-sm-4 col-md-3">
	                                    <div class="input-group input-append date" id="datePicker">
	                                      <input type="text" class="form-control input-lg" name="fec_ent" id="fec_ent" placeholder="" />
	                                      <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
	                                    </div>
	                                  </div>	                                 
	                              </div>
	                       <div class="form-group has-warning">                 
	                                 <label class="control-label col-md-2"for="ord_est">Estado</label>
                            <div class="col-md-10">
                              <select name="ord_est"class="form-control input-lg" size="1">
                                <option></option>
                                <option value="1" selected>Proceso</option>
                                <option value="2" >Entregado</option>
                                <option value="3" >Garantía</option>                               
                              </select>
                            </div>	                                 
	                       </div>
	                               
	                       <div class="form-group has-success">                 
	                                 <label class="control-label col-md-2"for="ord_est">Observaciones</label>
                            <div class="col-md-10">
                              <textarea class="form-control" rows="8" id="ord_obs" name="ord_obs"></textarea>
                            </div>	                                 
	                       </div>
	                          
	                          <div class="form-group has-warning">
	                            <div class="text-center">
	                              <input type="hidden" name="ord_veh" value="<?php echo $_GET["id"];?>">
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

	              $('#fec_ing').datepicker({
	        		autoclose: true,
	       			dateFormat: "yy-mm-dd"
	     		 })
	     		 .on('changeDate', function(e) {
	            // Revalidate the date field
	          	  $('#eventForm').formValidation('revalidateField', 'date');
	         	 });

	         	 $('#fec_ent').datepicker({
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

	          



