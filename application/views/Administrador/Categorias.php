<div class="col-sm-12 col-md-6 pull-right">
  <a data-toggle="modal" data-target="#AgregarCategoria" class="btn btn-fill btn-success btn-block pull-rigth">Nueva Categoria</a>
</div>

<div class="card">
    <div class="card-header card-header-icon" data-background-color="purple">
        <i class="fa fa-tags fa-2x"></i>
    </div>
    <div class="card-content">
        <h3 class="card-title">CATEGORIAS</h3>
        <div class="toolbar">
            <!--        Here you can write extra buttons/actions for the toolbar              -->
        </div>
        <div class="material-datatables">
            <table id="datatables" class="table table-striped table-no-bordered table-hover table-responsive" cellspacing="0" width="100%" style="width:100%">
                <thead>
                    <tr>
                      <th>ID</th>
                      <th>NOMBRE</th>
                      <th>DESCRIPCION</th>
                      <th>VISIBILIDAD</th>
                      <th class="text-right">ACCIONES</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>NOMBRE</th>
                        <th>DESCRIPCION</th>
                        <th>VISIBILIDAD</th>
                        <th class="text-right">ACCIONES</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php foreach ($Categorias as $key => $value): ?>
                      <tr>
                          <td><?= $value->get('CAT_ID'); ?></td>
                          <td><?= $value->get('CAT_NOMBRE'); ?></td>
                          <td><?= $value->get('CAT_DESC'); ?></td>

                          <?php if ($value->get('CAT_ESTADO') == 1): ?>
                          <td><a href="<?= site_url('/Administrador/CambiarEstado/4/');?><?=$value->get('CAT_ID');?>" class="btn btn-info"><i class="fa fa-eye"></i></a></td>
                          <?php else: ?>
                          <td><a href="<?= site_url('/Administrador/CambiarEstado/3/');?><?=$value->get('CAT_ID');?>" class="btn btn-warning"><i class="fa fa-eye-slash"></i></a></td>
                          <?php endif; ?>

                          <td class="text-right">
                              <a href="#" class="btn btn-warning btn-icon"><i class="fa fa-pencil"></i></a>
                          </td>
                      </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


<!-- AGREGAR CATEGORIA Modal -->
  <div class="modal fade" id="AgregarCategoria" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                      <i class="material-icons">clear</i>
                  </button>
              </div>
                <div class="modal-body">
                  <div class="col-sm-12">
                      <div class="card">
                          <form method="POST" action="<?= site_url('/Administrador/NuevaCategoria'); ?>" class="form-horizontal">
                              <div class="card-header card-header-text" data-background-color="purple">
                                  <h4 class="card-title">Nueva Categoria</h4>
                              </div>
                              <div class="card-content">
                                  <div class="row">
                                      <label class="col-sm-2 label-on-left">Nombre</label>
                                      <div class="col-sm-10">
                                          <div class="form-group label-floating is-empty">
                                              <label class="control-label"></label>
                                              <input name="CAT[CAT_NOMBRE]" type="text" class="form-control">
                                              <span class="help-block">Ingrese nombre asociada a la nueva categoria.</span>
                                          </div>
                                      </div>
                                  </div>

                                  <div class="row">
                                      <label class="col-sm-2 label-on-left">Descripcion</label>
                                      <div class="col-sm-10">
                                          <div class="form-group label-floating is-empty">
                                              <label class="control-label"></label>
                                              <input name="CAT[CAT_DESC]" type="text" class="form-control">
                                              <span class="help-block">Ingrese descripcion asociada a la nueva categoria.</span>
                                          </div>
                                      </div>
                                  </div>


                                  <div class="row">
                                      <label class="col-sm-2 label-on-left">Estado</label>
                                      <div class="col-sm-10">
                                          <div class="form-group label-floating is-empty">
                                              <label class="control-label"></label>
                                              <div class="col-sm-10 checkbox-radios">
                                                  <div class="radio">
                                                      <label>
                                                          <input type="radio" name="CAT[CAT_ESTADO]" value="1"> VISIBLE
                                                      </label>
                                                  </div>
                                                  <div class="radio">
                                                      <label>
                                                          <input type="radio" name="CAT[CAT_ESTADO]" value="0"> OCULTO
                                                      </label>
                                                  </div>
                                              </div>
                                              <span class="help-block">Ingrese estado asociada a la nueva categoria.</span>
                                          </div>
                                      </div>
                                  </div>

                              </div>
                      </div>
                  </div>
                </div>

                <div class="modal-footer">
                  <a type="button" class="btn btn-danger btn-simple" data-dismiss="modal">Cancelar</a>
                  <button type="submit" class="btn btn-info btn-simple">Agregar</button>
                </div>
              </form>

          </div>
      </div>
  </div>
<!--  / AGREGAR CATEGORIA Modal -->
