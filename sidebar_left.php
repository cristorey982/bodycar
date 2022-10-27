   <!-- Button trigger modal -->
   <div class="text-center">
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
 <i class="glyphicon glyphicon-plus"></i>  Nuevo Cliente
</button>
 </div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
     <form action="ingresar_cliente.php" method="POST">
    <div class="modal-content">
     
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo Cliente</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                   
                             <div class="form-horizontal">
                              <div class="form-group has-success">
                                  <label class="control-label hidden-xs col-sm-2 col-md-2" for="cli_nom">Nombre</label>
                                  <div class="col-xs-6 col-md-4">
                                    <input type="text" class="form-control input-lg" id="cli_nom" name="cli_nom" placeholder="Digite Nombre!" data-toggle="tooltip"  title="Escribe el nombre!"required >
                                  </div>

                                  <label  class="control-label hidden-xs col-sm-2 col-md-2" for="cli_ide">Nit/CC</label>
                                  <div class="col-xs-6 col-sm-6 col-md-4">                                 
                                    <input type="text" class="form-control input-lg" id="cli_ide" name="cli_ide" placeholder="Digite Nit/CC" data-toggle="tooltip" title="Escribe el Nit/CC!">
                                  </div>
                              </div>
                                 <div class="form-group has-warning">
                                  <label class="control-label hidden-xs col-sm-2 col-md-2" for="cli_dir">Dirección</label>
                                  <div class="col-xs-6 col-md-4">
                                    <input type="text" class="form-control input-lg" id="cli_dir" name="cli_dir" placeholder="Digite Dirección!" data-toggle="tooltip"  title="Escribe la dirección!">
                                  </div>

                                  <label  class="control-label hidden-xs col-sm-2 col-md-2" for="cli_ema">Email</label>
                                  <div class="col-xs-6 col-sm-6 col-md-4">                                 
                                    <input type="text" class="form-control input-lg" id="cli_ema" name="cli_ema" placeholder="Digite Email" data-toggle="tooltip" title="Escribe el email!">
                                  </div>
                              </div>
                                 <div class="form-group has-success">
                                  <label class="control-label hidden-xs col-sm-2 col-md-2" for="cli_tel">Teléfono</label>
                                  <div class="col-xs-6 col-sm-6 col-md-4">
                                    <input type="text" class="form-control input-lg" id="cli_tel" name="cli_tel" placeholder="Digite Teléfono!" data-toggle="tooltip"  title="Escribe el teléfono!" required>
                                  </div>

                                  <label  class="control-label hidden-xs col-sm-2 col-md-2" for="cli_ciu">Ciudad</label>
                                  <div class="col-xs-6 col-sm-6 col-md-4">                                 
                                    <input type="text" class="form-control input-lg" id="cli_ciu" name="cli_ciu" placeholder="Digite Ciudad" data-toggle="tooltip" title="Escribe la ciudad!">
                                  </div>
                              </div>
                        </div>
                     
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="hidden" name="cli_fec_ing" value="<?php echo date("Y-m-d H:i:s"); ?>">
        <button type="submit" class="btn btn-outline-danger">Guardar</button>
       </div>
    </div>
     </form>
  </div>
</div> <!-- /modal -->