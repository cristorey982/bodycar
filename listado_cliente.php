<!doctype html>
<html lang="en">
<?php
require_once 'm_cliente.php';
?>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>::BodyCar - Listado Cliente::</title>
     <!-- <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/icomoon-social.css">
-->
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/dashboard/">
<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="//code.jquery.com/ui/1.12.1/themes/cupertino/jquery-ui.css">
  <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.13/css/dataTables.jqueryui.min.css">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
  </head>
  <body>
    
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">::Bodycar::</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="logout.php">Sign out</a>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="dashboard.php">
              <span data-feather="home" class="align-text-bottom"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="listado_orden.php">
              <span data-feather="file" class="align-text-bottom"></span>
              Ordenes
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="listado_vehiculo.php">
              <span data-feather="hard-drive" class="align-text-bottom"></span>
            Vehiculos
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="listado_cliente.php">
              <span data-feather="users" class="align-text-bottom"></span>
              Clientes
            </a>
          </li> 
        
          <li class="nav-item">
            <a class="nav-link" href="Listado_tecnico.php">
              <span data-feather="layers" class="align-text-bottom"></span>
              Tecnicos
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="under-construction.php">
              <span data-feather="globe" class="align-text-bottom"></span>
              Usuarios
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="under-construction.php">
              <span data-feather="bar-chart-2" class="align-text-bottom"></span>
              Reports
            </a>
          </li>
        </ul>
        

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
          <span>Saved reports</span>
          <a class="link-secondary" href="#" aria-label="Add a new report">
            <span data-feather="plus-circle" class="align-text-bottom"></span>
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="monitor" class="align-text-bottom"></span>
              Reporte Tecnico
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text" class="align-text-bottom"></span>
              Last quarter
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text" class="align-text-bottom"></span>
              Social engagement
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text" class="align-text-bottom"></span>
              Year-end sale
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
          <!-- Button trigger modal -->
  
 <h2>Listado de Clientes</h2>
 <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
 <span data-feather="plus" class="align-text-bottom"></span>  Nuevo Cliente
 </button>
 
      <div class="table-responsive">
      <table id="datatable" class="table display table-striped table-bordered table-hover" cellspacing="0" width="100%">
                          <thead>
                            <tr class="alert-warning">
                              <th>Id Cliente</th>
                              <th>Nombre</th>
                              <th>Nit/CC</th>
                              <th>Email</th>
                              <th>Teléfono</th>
                              <th>Fecha Ingreso</th>
                              <th></th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php 
                            $regis = new Cliente();
                            $array_articles = $regis->get_cliente();
                            //print_r($array_articles);
                            ?>
                            <?php foreach ($array_articles as $key => $value) { ?>
                            <tr class="odd gradeX">
                              <td><a href="javascript:void(0);" onClick="window.location='editar_cliente.php?id=<?php echo $value["id"];?>';" data-toggle="tooltip" title="Editar" style='text-decoration:none;color:black;'><?php echo $value["id"]; ?></a></td>
                              <td><a href="javascript:void(0);" onClick="window.location='editar_cliente.php?id=<?php echo $value["id"];?>';" data-toggle="tooltip" title="Editar" style='text-decoration:none;color:black;'><?php echo $value["cli_nom"]; ?></a></td>
                              <td><a href="javascript:void(0);" onClick="window.location='editar_cliente.php?id=<?php echo $value["id"];?>';" data-toggle="tooltip" title="Editar" style='text-decoration:none;color:black;'><?php echo $value["cli_ide"]; ?></a></td>
                              <td><a href="javascript:void(0);" onClick="window.location='editar_cliente.php?id=<?php echo $value["id"];?>';" data-toggle="tooltip" title="Editar" style='text-decoration:none;color:black;'><?php echo $value["cli_ema"]; ?></a></td>
                              <td><a href="javascript:void(0);" onClick="window.location='editar_cliente.php?id=<?php echo $value["id"];?>';" data-toggle="tooltip" title="Editar" style='text-decoration:none;color:black;'><?php echo $value["cli_tel"]; ?></a></td>
                              <td><a href="javascript:void(0);" onClick="window.location='editar_cliente.php?id=<?php echo $value["id"];?>';" data-toggle="tooltip" title="Editar" style='text-decoration:none;color:black;'><?php echo $value["cli_fec_ing"]; ?></a></td>
                              
                                <td class="actions">
                                  <div class="text-center">
                                    <a href="javascript:void(0);" onClick="window.location='v_vehiculo.php?id=<?php echo $value["id"];?>';" data-toggle="tooltip" title="Nuevo Vehiculo" class="btn btn-xs btn-outline-danger"><span data-feather="folder-plus" class="align-text-bottom"></span></a>
                                    <a href="javascript:void(0);" onClick="window.location='listado_vehiculo_cliente.php?id=<?php echo $value["id"];?>';" data-toggle="tooltip" title="Listado Vehiculo" class="btn btn-xs btn-outline-success"><span data-feather="list" class="align-text-bottom"></span></a>
                                    <a href="javascript:void(0);" onClick="eliminar('eliminar_cliente.php?id=<?php echo $value["id"];?>')" data-toggle="tooltip" title="Eliminar" class="btn btn-xs btn-outline-warning"><span data-feather="trash-2" class="align-text-bottom"></span></a>
                                  </div>
                                </td>

                              </tr>
                              <?php } ?>

                            </tbody>
                          </table>
      </div>

    </main>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="clienteModal" aria-hidden="true">
  <div class="modal-dialog">
     <form action="ingresar_cliente.php" method="POST">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="clienteModal"><div class="p-3 bg-primary text-white"> Formulario Cliente</div></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="form-horizontal">
    
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="cli_nom" name="cli_nom" placeholder="Digite Nombre!" data-toggle="tooltip"  title="Escribe el nombre!"required >
            <label for="cli_nom">Nombre</label>
          </div>
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="cli_ide" name="cli_ide" placeholder="Digite Nit/CC" data-toggle="tooltip" title="Escribe el Nit/CC!">
            <label for="cli_ide">Nit/CC</label>
          </div>
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="cli_dir" name="cli_dir" placeholder="Digite Dirección!" data-toggle="tooltip"  title="Escribe la dirección!">
            <label for="cli_dir">Dirección</label>
          </div>
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="cli_ema" name="cli_ema" placeholder="Digite Email" data-toggle="tooltip" title="Escribe el email!">
            <label for="cli_ema">Email</label>
          </div>

      <div class="row g-2">
        <div class="col-md">
          <div class="form-floating">
            <input type="text" class="form-control" id="cli_tel" name="cli_tel" placeholder="Digite Teléfono!" data-toggle="tooltip"  title="Escribe el teléfono!" required>
            <label for="cli_tel">Teléfono</label>
          </div>
        </div>
        <div class="col-md">
          <div class="form-floating">
            <input type="text" class="form-control" id="cli_ciu" name="cli_ciu" placeholder="Digite Ciudad" data-toggle="tooltip" title="Escribe la ciudad!">
            <label for="cli_ciu">Ciudad</label>
          </div>
        </div>
      </div>

         </div>                      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <input type="hidden" name="cli_fec_ing" value="<?php echo date("Y-m-d H:i:s"); ?>">
        <button type="submit" class="btn btn-outline-primary">Guardar</button>
      </div>
    </div>
      </form>
  </div>
</div>
  </div>
</div>


    <script type="text/javascript" src="assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
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
                order: [[5, 'desc']],
                "language": {
                  "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
                },
                "lengthMenu": [[8, 10, 20, -1], [8, 10, 20, "Todos"]]
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
