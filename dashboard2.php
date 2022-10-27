<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 5 demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
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

                  <div class="row">
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    Usuarios conectados en este momento: <strong><span id="connected_users">0</span></strong>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    Facturación del día: <strong>$ <span id="daily_revenue">0.00</span></strong>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    Facturación del día: <strong>$ <span id="daily_revenue">0.00</span></strong>
                </div>
            </div>
        </div>
    </div>
                              

                     </div>
                    </div>

                    </div>
                </div>
                    
                   
                           
            </div> <!-- /content -->
    <h1>Hello, world!</h1>

    <div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Orden de Servicio</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Reportes</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>